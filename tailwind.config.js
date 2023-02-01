/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['index.html'],
  theme: {
    extend: {
      fontFamily: {
        montserrat: ['Montserrat', 'sans-serif'],
        xanh: ['Xanh Mono', 'monospace'], 
      },
      fontSize: {
        'customVw': '8vw',
      }
    },
  },
  plugins: [],
}
