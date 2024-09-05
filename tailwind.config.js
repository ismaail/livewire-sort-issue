const colors = require('tailwindcss/colors')

module.exports = {
	content: [
		'./resources/assets/**/*.vue',
		'./resources/views/**/*.blade.php',
	],
	darkMode: 'media', // or 'media' or 'class'
	// prefix: '',
  // purge: [],
  theme: {
    extend: {
			colors: {
			},
			fontFamily: {
				//poppins: ['poppins', 'sans-serif']
			},
		},
  },
  variants: {
		extend: {},
	},
	safelist: [
		'active',
	],
  plugins: [
	],
}
