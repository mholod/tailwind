module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
  purge: ['./storage/framework/views/*.php', './resources/views/**/*.blade.php', './resources/views/**/*.vue'],
  theme: {
    extend: {
        width: {
            '96': '24rem'
        }
    },
  },
  variants: {},
  plugins: [],
}
