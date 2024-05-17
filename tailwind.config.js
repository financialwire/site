/** @type {import('tailwindcss').Config} */
export default {
  presets: [
    require('./vendor/tallstackui/tallstackui/tailwind.config.js')
  ],
  content: [
    "./resources/**/*.blade.php",
    "./vendor/tallstackui/tallstackui/src/**/*.php",
    "./app/Providers/*.php",
  ],
  theme: {
    extend: {
      fontFamily: {
        "grotesk": ["'Space Grotesk'", 'sans-serif'],
        "inter": ["'Inter'", 'sans-serif']
      },
      colors: {
        "financialwire-purple": "#5B21B6"
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('tailwindcss-animated')
  ],
}

