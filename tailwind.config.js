const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './src/**/*.{html,js}',
        './node_modules/tw-elements/dist/js/**/*.js',
    ],


  darkMode : false,
  theme: {
      extend: {
            margin: {
                '1/12': '8%',
                '1/8': '12%',
                '1/4': '25%',
                '1/3': '33%',
                '1/2': '50%',
                '3/4': '75%',
            },
            padding: {
                '0': '0',
                '1/12': '8%',
                '1/8': '12%',
                '1/4': '25%',
                '1/3': '33%',
                '1/2': '50%',
                '3/4': '75%',
                'full': '100%',
            },
            maxWidth: {
                '4': "18px",
            },
            maxHeight: {
             '0': '0',
             '1/4': '25%',
             '1/2': '50%',
             '3/4': '75%',
             'full': '100%',
            },
            minWidth: {
             '0': '0',
             '1/4': '25%',
             '1/2': '50%',
             '3/4': '75%',
             'full': '100%',
            },
            minHeight: {
             '0': '0',
             '1/4': '25%',
             '1/2': '50%',
             '3/4': '75%',
             'full': '100%',
            },
            boxShadow: {
                'inner-bottom': 'inset 0px -15px 10px -10px rgba(255,255,255,5)',
                'inner-center': 'inset 0px 0px 5px 2px rgba(255,255,255,5)',
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
  },

  variants: {

      extend: {},

  },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('tw-elements/dist/plugin'),
    ],

};

