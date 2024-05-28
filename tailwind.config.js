/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            borderWidth: {
                '3': '3px',
            },
            colors: {
                'background': '#ffffff',
                'custom-dark-purple': '#190E25',
                'custom-blue': '#0FA3E2',
                'custom-purple': '#6366F1',
                'custom-light-gray': '#cdcdcd',
                'custom-gray': '#a7a7a7',
            },
            fontFamily: {
                sofiaSans: ['Sofia Sans', 'sans-serif'],
            }
        },
    },
    plugins: [],
}

