/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
    './app/Http/Livewire/**/*Table.php', 
    './vendor/power-components/livewire-powergrid/resources/views/**/*.php',
    './vendor/power-components/livewire-powergrid/src/Themes/Tailwind.php'
  ],
  presets: [ 
    require("./vendor/power-components/livewire-powergrid/tailwind.config.js"), 
  ],
  darkMode: 'class',
  theme: {
    extend: { 
    },
  },
  plugins: [
      require('flowbite/plugin')
  ],
}