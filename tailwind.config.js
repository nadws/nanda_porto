/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                Silkscreen: ["IBM Plex Sans Arabic", "sans-serif"],
            },
        },
    },
    plugins: [],
};
