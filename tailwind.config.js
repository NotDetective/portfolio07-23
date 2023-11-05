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
            background: '#ffffff',
            custom_dark: '#190E25',
        },
        fontFamily: {
            sofiaSans: ['Sofia Sans', 'sans-serif'],
        }
    },
  },
  plugins: [],
}

