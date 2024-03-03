/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            fontFamily: {
                'sans': ['Poppins', 'sans-serif']
            },
            colors: {
                'body-color': '#f7cdcd',
                'nav-color': '#f7cdcd',
                'side-nav': '#010718',
                'text-color': '#170202',
            },
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
}
