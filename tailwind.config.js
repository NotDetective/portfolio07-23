/** @type {import('tailwindcss').Config} */
export default {
  mode: "jit",
  content: ['./resources/**/*.{php,js,html}'],
  theme: {
    colors: {
      lightblue: '#0FA3E2',
      darkblue: '#086788',
      lighterblue: '#189AB4',

      white: '#ffffff',

      red: '#ff0000',
      green: '#00ff00',
      blue: '#0000ff'
    },
    extend: {
      fontFamily: {
        inter: ['Inter var'],
      }
    },
  },
  plugins: [],
}

