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
                background: '#ffffff',
                purpleDark: '#190E25',
                blue: '#0FA3E2',
                purple: '#6366F1',
            },
            fontFamily: {
                sofiaSans: ['Sofia Sans', 'sans-serif'],
            }
        },
    },
    plugins: [],
}

