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
      },
      boxShadow: {
        'xs': '0 0 0 1px rgba(0,0,0,.05)'
      },
    },
  },
  plugins: [
    tailwindcssForms,
  ],
}

