const plugin = require('tailwindcss/plugin')

module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.svelte',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [
    plugin(function ({ addUtilities, addComponents, e, prefix, config }) {
      const container = {
        '.main-container': {
          width: '1024px',
        },

        '@media (min-width: 640px)': {
          '.main-container': {
            'max-width': '640px',
          },
        },

        '@media (min-width: 768px)': {
          '.main-container': {
            'max-width': '768px',
          },
        },

        '@media (min-width: 1024px)': {
          '.main-container': {
            'max-width': '1024px',
          },
        },
      }

      addComponents(container)
    }),
  ],
}
