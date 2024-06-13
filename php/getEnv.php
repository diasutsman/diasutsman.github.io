<?php
$env = parse_ini_file('.env');
$env['IS_PRODUCTION'] = $env['IS_PRODUCTION'] == 1;
