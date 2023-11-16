/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    colors: {
      "blanc": "#FFFFFF",
      "noir": "#000000",
      "bleu": "#00425A",
      "vert-clair": "#1F8A70",
      "vert-fonce": "#205B46",
      "orange": "#EF8731",
      "beige": "#FDF7F1",
    },
    fontFamily: {
      "dela-gothic-one": ['Dela Gothic One', 'sans-serif'],
      "montserrat": ['Montserrat', 'sans-serif'],
    },
    fontSize: {
      sm: '0.8rem',
      base: '1.1vw',
      xl: '1.25rem',
      '2xl': '1.563rem',
      '3xl': '5vw',
      '4xl': '2.441rem',
      '5xl': '3.052rem',
    },
    extend: {},
  },
  plugins: [],
}

