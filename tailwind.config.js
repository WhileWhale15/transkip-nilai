/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./src/**/*.{html,js}",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "/node_modules/preline/dist/*.js",
    ],
    theme: {
        extend: {
            colors: {
                "2E335B": "#2E335B",
                FCFBF9: "#FCFBF9",
                F0F4F8: "#F0F4F8",
            },
        },
    },
    plugins: [require("@tailwindcss/forms"), require("preline/plugin")],
};
