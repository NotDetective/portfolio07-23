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
            gradient_one: '#0FA3E2',
            gradient_two: '#6366F1',
            custom_dark: '#190E25',
        },
        fontFamily: {
            sofiaSans: ['Sofia Sans', 'sans-serif'],
        }
    },
  },
  plugins: [],
}

