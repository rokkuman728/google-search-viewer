/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [],
    purge: [
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
};
