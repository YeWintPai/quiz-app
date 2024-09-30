/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
  ],
  theme: {
    
    extend: {
      fontFamily: {
        logo: ["Audiowide", "system-ui"]
      },
      colors:{
        bars: '#333333'
      },
    },
  },
  plugins: [],
}

