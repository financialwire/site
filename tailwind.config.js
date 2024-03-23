/** @type {import('tailwindcss').Config} */
export default {
  presets: [
    require('./vendor/tallstackui/tallstackui/tailwind.config.js')
  ],
  content: [
    "./resources/**/*.blade.php",
    "./vendor/tallstackui/tallstackui/src/**/*.php",
  ],
  theme: {
    extend: {
      fontFamily: {
        "grotesk": ["'Space Grotesk'", 'sans-serif'],
        "inter": ["'Inter'", 'sans-serif']
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms')
  ],
}

