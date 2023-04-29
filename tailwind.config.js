/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        keyframes: {
            animated: {
                "0%": { transform: "rotate(0deg)" },
                "50%,100%": { transform: "rotate(180deg)" },
            },
            rotate: {
                "0%": { transform: "rotate(90deg)" },
                "50%,100%": { transform: "rotate(0deg)" },
            },
        },
        extend: {
          animation: {
              animation: "rotate 1s linear infinite",
          },

        }
    },
    plugins: [],
};
