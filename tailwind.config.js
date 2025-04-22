/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            keyframes: {
                fadeIn: {
                    "0%": { opacity: "0" },
                    "100%": { opacity: "1" },
                },
                slideInDown: {
                    "0%": { transform: "translateY(-50px)", opacity: "0" },
                    "100%": { transform: "translateY(0)", opacity: "1" },
                },
                slideInLeft: {
                    "0%": { transform: "translateX(-50px)", opacity: "0" },
                    "100%": { transform: "translateX(0)", opacity: "1" },
                },
                slideInUp: {
                    "0%": { transform: "translateY(50px)", opacity: "0" },
                    "100%": { transform: "translateY(0)", opacity: "1" },
                },
            },
            animation: {
                fadeIn: "fadeIn 1s ease-out",
                slideInDown: "slideInDown 1s ease-out",
                slideInLeft: "slideInLeft 1s ease-out",
                slideInUp: "slideInUp 1s ease-out",
            },
        },
    },
    plugins: [],
};
