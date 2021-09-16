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
    require('@tailwindcss/line-clamp'),
    plugin(function ({ addUtilities, addComponents, e, prefix, config }) {
      const container = {
        '.main-container': {
          width: 'calc(100% - 2rem)',
          margin: '0 auto',
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

      const fontRaleway = {
        '.font-raleway': {
          'font-family': '"Raleway", sans-serif',
        },
      }

      addComponents(container)
      addComponents(fontRaleway)
    }),
  ],
}
