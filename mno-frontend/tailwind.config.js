/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "mno-frontend/index.html",
    "mno-frontend/src/**/*.{js,ts,jsx,tsx}",
  ],
  theme: {
    fontFamily: {
      logo: ["Audiowide", "system-ui"]
    },
    extend: {},
  },
  plugins: [],
}

