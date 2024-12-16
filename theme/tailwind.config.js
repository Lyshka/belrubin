/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "*.php",
    "./templates/*.php",
    "./woocommerce/**/*.php",
    "./src/**/*.{php,js,svg}",
  ],
  theme: {
    extend: {
      fontFamily: {
        Montserrat: "Montserrat",
      },
      screens: {
        xl: "1200px",
      },
      gridTemplateRows: {
        0: "0fr",
        1: "1fr",
      },
      backgroundImage: {},
      colors: {
        black: {
          DEFAULT: "#2C2C2C",
        },
        blue: {
          DEFAULT: "#3D34FF",
          "0d": "#0D199B",
          "06": "#060F60",
          f6: "#F6FBFF",
        },
        red: {
          DEFAULT: "#E51F1F",
          ff: "#FFF3F3",
        },
        green: {
          DEFAULT: "#06A56C",
        },
        gray: {
          ba: "#BABABA",
          68: "#686868",
          e7: "#E7E7E7",
        },
      },
      boxShadow: {
        header: "0px 4px 4px 0px #00000026",
        productInfo: "0px 2px 10px 0px #32324724",
      },
    },
  },
  plugins: [],
};
