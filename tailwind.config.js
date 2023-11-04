const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            maxWidth: {
                "container-width": "1170px",
                cw: "1170px",
            },
            colors: {
                gray: "#4d4d4d",
                "nav-gray": "rgba(21,21,21,0.75)",
            },
            fontSize: { md: "16px" },
            width: {
                "container-width": "1170px",
            },
            screens: {
                xs: "380px",
                sm: "576px",
                md: "960px",
                lg: "1440px",
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
