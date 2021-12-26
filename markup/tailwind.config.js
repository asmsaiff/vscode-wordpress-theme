module.exports = {
  purge: {
	enabled: false,
	content: ['*.html',],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [
    function ({ addComponents }) {
      addComponents({
        '.container': {
          maxWidth: '100%',
          '@screen sm': {
            maxWidth: '700px',
          },
          '@screen md': {
            maxWidth: '900px',
          },
          '@screen lg': {
            maxWidth: '1000px',
          },
          '@screen xl': {
            maxWidth: '1300px',
          },
        }
      })
    }
  ]
}
