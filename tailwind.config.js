/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    // './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    extend: {
      colors:{
        primary: '#023887',
        secondary: '#0398EC',
        third: '#046CB4',
        four: '#095073',
        five: '#01B8FE',
        sixColorText: '#01B8FE',
      },
    },
  },
  plugins: [require('@tailwindcss/line-clamp')],
}
