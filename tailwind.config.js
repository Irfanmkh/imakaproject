/** @type {import('tailwindcss').Config} */
module.exports = {
content: ["index.html",
"./resources/**/*.blade.php",
"./resources/**/*.js",
"./resources/**/*.vue",
],
theme: {
container: {
center: true,
padding: "25px",
},
extend: {
colors: {
primary: "#287bd9",
dark: "#0f172a",
secondary: "#64748b",
},
screens: {
"2xl": "1320px",
},
fontFamily: {
monobuntu: "Ubuntu Mono",
raleway: ['Raleway', 'sans-serif'],
}
},
},
plugins: [],
};
