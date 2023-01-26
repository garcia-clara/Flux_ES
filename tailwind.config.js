/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php"],
  theme: {
    fontFamily: {
      'helvetica': ['Helvetica']
    },
  },
  daisyui: {
    themes: ["emerald"],
  },
  plugins: [require('daisyui')],
}