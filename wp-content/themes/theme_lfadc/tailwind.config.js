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
      body: '1.1vw',
      h5: '1.4vw',
      h3: '1.65vw',
      h2: '1.8vw',
      h1: '2.7vw',
    },
    extend: {},
  },
  plugins: [],
}

