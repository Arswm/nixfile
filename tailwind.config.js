/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            classes: {
                'btn-primary': 'px-10 py-2 rounded-xl bg-primary-color text-white', // it doesn't working sadly
            },
            colors: {
                'primary-color': '#EB4334',
                'secondary-color': '#FF9900',
            },
        },
    },
    plugins: [],
}
