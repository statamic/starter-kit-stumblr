module.exports = {
  content: [
    './resources/**/*.antlers.html',
    './resources/**/*.blade.php',
    './resources/**/*.vue',
    './content/**/*.md'
  ],
  theme: {
    extend: {
        boxShadow: {
            '3xl': '0 25px 28px -26px rgba(0,0,0,0.50), 0 16px 50px 1px rgba(0,0,0,0.11)',
        }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
