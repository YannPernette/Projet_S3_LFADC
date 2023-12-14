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
      body: '1rem',               // Taille pour laptop (16px)
      'body_mobile': '0.875rem',  // Taille pour mobile (16px * 0.875 = 14px)
    
      h5: '1.125rem',          // Taille pour laptop (18px)
      'h5_mobile': '0.9rem',   // Taille pour mobile (18px * 0.9 = 16.2px)
    
      h4: '1.375rem',          // Taille pour laptop (22px)      
      'h4_mobile': '1.125rem', // Taille pour mobile (22px * 0.9 = 19.8px)
    
      h3: '1.5rem',            // Taille pour laptop (24px)
      'h3_mobile': '1.2rem',   // Taille pour mobile (24px * 0.9 = 21.6px)
    
      h2: '1.625rem',          // Taille pour laptop (26px)
      'h2_mobile': '1.375rem',   // Taille pour mobile (26px * 0.9 = 23.4px)
    
      h1: '2rem',              // Taille pour laptop (32px)
      'h1_mobile': '1.6rem',   // Taille pour mobile (32px * 0.9 = 28.8px)
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

