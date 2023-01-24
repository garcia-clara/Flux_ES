/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./components/*.php"],
  theme:{
    fontFamily: {
      'helvetica' : ['Helvetica']
    }
  },
  daisyui: {
    themes: ["emerald"],
  },
  plugins: [require('daisyui')],
}