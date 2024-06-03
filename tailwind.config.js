import preset from './vendor/filament/support/tailwind.config.preset'

/** @type {import('tailwindcss').Config} */
export default {
    presets: [preset],
  content: [ "./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue",
  './app/Filament/**/*.php',
  './resources/views/filament/**/*.blade.php',
  './vendor/filament/**/*.blade.php',],
  theme: {
    extend: {
        colors:{
            pup: '#791417',
            resume:'#8d9e78'
        }
    },
  },
  plugins: [    require('@tailwindcss/typography'),
],
}

