/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/Templates/**/*.php",
  ],
  theme: {
    extend: {},
    fontFamily: {
      space: ["Space Mono", "monospace"],
    }
  },
  plugins: [
    require("@tailwindcss/typography"),
  ],
}
