const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            boxShadow: {
                full: "0px 0px 15px rgba(0, 0, 0, 0.15)",
            },
            fontFamily: {
                sans: ["Poppins", ...defaultTheme.fontFamily.sans],
            },

            colors: {
                "primary-500": "#221D53",
                "secondary-500": "#5D54A4",
                "text-500": "#4765AF",

                "danger-500": "#DC6EBE",
                "info-500": "#DC6EBE",
                "warning-500": "#DC6EBE",
                "success-500": "#DC6EBE",

                "green-600": "#4EBA9B",
                "green-500": "#59D4B0",
                "green-400": "#99E0CC",
                "green-300": "#BCEEE0",
                "green-200": "#DEF6EF",
                "green-100": "#EEFBF7",

                "pink-600": "#C261A7",
                "pink-500": "#DC6EBE",
                "pink-400": "#EAA8D8",
                "pink-300": "#F1C5E5",
                "pink-200": "#F8E2F2",
                "pink-100": "#FBF0F8",

                "blue-600": "#41A9D4",
                "blue-500": "#48BCEC",
                "blue-400": "#91D7F4",
                "blue-300": "#B6E4F7",
                "blue-200": "#DAF2FB",
                "blue-100": "#EDF8FD",

                "yellow-600": "#E5B336",
                "yellow-500": "#FFC73C",
                "yellow-400": "#FFDD8A",
                "yellow-300": "#FFE9B1",
                "yellow-200": "#FFF4D8",
                "yellow-100": "#FFF9EB",

                "lavander-600": "#8279CC",
                "lavander-500": "#A397FF",
                "lavander-400": "#C8C1FF",
                "lavander-300": "#DAD5FF",
                "lavander-200": "#EDEAFF",
                "lavander-100": "#F6F5FF",
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require("@tailwindcss/aspect-ratio"),
        require("@tailwindcss/line-clamp"),
    ],
};
