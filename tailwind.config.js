/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/views/livewire/*.blade.php", // JSTAR: added this directory to apply tailwindcss    
    "./resources/views/components/layouts/*.blade.php", // JSTAR: added this directory to apply tailwindcss    
    "./resources/**/*.vue"
    
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

