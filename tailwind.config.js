/** @type {import('tailwindcss').Config} */
module.exports = {
    daisyui: {
        themes: [
          {
            light: {
              ...require("daisyui/src/colors/themes")["[data-theme=light]"],
              primary: "blue",
              "primary-focus": "mediumblue",
            },
          },
        ],
      },
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./resources/wisata/*.blade.php",
    "./resources/wisata/*.js",
    "./resources/wisata/*.vue",
  ],
  theme: {
    fontFamily: {
        lato: ['Lato', 'sans-serif'],
       poppins: ['Poppins', 'sans-serif'],
       monst:['Montserrat', 'sans-serif']
    },
    extend: {
        textColor: ['active']
    },

  },
  plugins: [
    require("daisyui")
  ],
}
