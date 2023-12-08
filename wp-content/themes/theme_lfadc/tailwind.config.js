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
      body: '0.875rem',            // Taille pour laptop (14px)
      'body_mobile': '0.7rem',  // Taille pour mobile (14px / 16px = 0.875 * 0.9 = 0.7875rem)

      h5: '1rem',                  // Taille pour laptop (16px)
      'h5_mobile': '0.8rem',       // Taille pour mobile (16px / 16px = 1 * 0.9 = 0.9rem)

      h4: '1.125rem',              // Taille pour laptop (18px)
      'h4_mobile': '0.9rem',    // Taille pour mobile (18px / 16px = 1.125 * 0.9 = 1.0125rem)

      h3: '1.375rem',              // Taille pour laptop (22px)
      'h3_mobile': '1.1rem',    // Taille pour mobile (22px / 16px = 1.375 * 0.9 = 1.2375rem)

      h2: '1.625rem',              // Taille pour laptop (26px)
      'h2_mobile': '1.3rem',    // Taille pour mobile (26px / 16px = 1.625 * 0.9 = 1.4625rem)

      h1: '2rem',                  // Taille pour laptop (32px)
      'h1_mobile': '1.6rem',       // Taille pour mobile (32px / 16px = 2 * 0.9 = 1.8rem)
    },
    screens: {
      'xl': {'max': '1439px'},

      'lg': {'max': '1023px'},

      'md': {'max': '767px'},

      'sm': {'max': '424px'},
    },
    extend: {},
  },
  plugins: [],
}

