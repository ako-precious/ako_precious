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
            colors: {
                darkblue: "#1B1B3A",
                red: "#93032E",
                green: "#034C3C",
                orange: "#FF521B",
            },
            backgroundColor: {
                darkblue: "#1B1B3A",
                red: "#93032E",
                green: "#034C3C",
                orange: "#FF521B",
            },
            scale: {
                '300': '3',
              }
        },
    },
    plugins: [],
};
