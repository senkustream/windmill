import defaultTheme from 'tailwindcss/defaultTheme';
import tailwindcssForms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['"Inter"', ...defaultTheme.fontFamily.sans]
      }
    },
  },
  plugins: [
    tailwindcssForms,
  ],
}

