<?php
class PHP_Email_Form {
  public $ajax = false;
  public $to = '';
  public $from_name = '';
  public $from_email = '';
  public $subject = '';
  public $smtp = array();
  public $message = array();
  public $headers = array();
  public $sent = false;
  public $error = '';
  public $response = '';
  public function add_message( $message, $label = '', $lines = 0 ) {
    if( $lines > 0 ) {
      $message = str_replace( array( "\r\n", "\r", "\n" ), '', $message );
      $message = wordwrap( $message, $lines * 75, "", true );
    }
    $this->message[] = array(
      'label' => $label,
      'message' => $message
    );
  }

  public function send() {
    if( $this->validate() ) {
      $this->prepare_headers();
      $this->prepare_message();
      $this->sent = $this->send_mail();
      if( $this->sent ) {
        $this->response = 'Message has been sent successfully';
      } else {
        $this->response = 'Message could not be sent. Mailer Error: ' . $this->error;
      }
    }
    return $this->response();
  }

  public function response() {
    if( $this->ajax ) {
      $response = array(
        'sent' => $this->sent,
        'message' => $this->response
      );
      return json_encode( $response );
    } else {
      return $this->response;
    }
  }
  
  public function validate() {
    if( empty( $this->to ) ) {
      $this->error = 'To email address is empty';
      return false;
    }
    if( empty( $this->from_email ) ) {
      $this->error = 'From email address is empty';
      return false;
    }
    if( ! filter_var( $this->from_email, FILTER_VALIDATE_EMAIL ) ) {
      $this->error = 'From email address is invalid';
      return false;
    }
    if( empty( $this->subject ) ) {
      $this->error = 'Email subject is empty';
      return false;
    }
    if( empty( $this->message ) ) {
      $this->error = 'Email message is empty';
      return false;
    }
    return true;
  }

  public function prepare_headers() {
    $this->headers[] = 'MIME-Version: 1.0';
    $this->headers[] = 'Content-type: text/plain; charset=utf-8';
    $this->headers[] = 'From: ' . $this->from_name . ' <' . $this->from_email . '>';
    $this->headers[] = 'Reply-To: ' . $this->from_name . ' <' . $this->from_email . '>';
    $this->headers[] = 'X-Mailer: PHP/' . phpversion();
  }

  public function prepare_message() {
    $message = '';
    foreach( $this->message as $item ) {
      if( ! empty( $item['label'] ) ) {
        $message .= $item['label'] . ": ";
      }
      $message .= $item['message'] . "";
    }
    $this->message = $message;
  }

  public function send_mail() {
    if( ! empty( $this->smtp ) ) {
      return $this->smtp_mail();
    } else {
      return mail( $this->to, $this->subject, $this->message, implode( "\r", $this->headers ) );
    }
  }

  public function smtp_mail() {
    $smtp = $this->smtp;
    $smtp['host'] = isset( $smtp['host'] ) ? $smtp['host'] : 'localhost';
    $smtp['port'] = isset( $smtp['port'] ) ? $smtp['port'] : 25;
    $smtp['username'] = isset( $smtp['username'] ) ? $smtp['username'] : '';
    $smtp['password'] = isset( $smtp['password'] ) ? $smtp['password'] : '';
    $smtp['secure'] = isset( $smtp['secure'] ) ? $smtp['secure'] : '';
    $smtp['timeout'] = isset( $smtp['timeout'] ) ? $smtp['timeout'] : 5;
    $smtp['auth'] = isset( $smtp['auth'] ) ? $smtp['auth'] : true;
    $smtp['debug'] = isset( $smtp['debug'] ) ? $smtp['debug'] : 0;
    $smtp['charset'] = isset( $smtp['charset'] ) ? $smtp['charset'] : 'utf-8';
    $smtp['newline'] = isset( $smtp['newline'] ) ? $smtp['newline'] : "\r";
  }

}