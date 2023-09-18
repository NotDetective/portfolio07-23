/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
    extend: {
        colors: {
            primary: '#0FA3E2',
            darksecondary: '#086788',
            lightsecondary: '#189AB4',
            background: '#A5E7ED',
        },
        fontFamily: {
            inter: ['Inter var'],
        }
    },
  },
  plugins: [],
}

