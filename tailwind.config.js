const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    future: {
        purgeLayersByDefault: true,
        removeDeprecatedGapUtilities: true,
    },
    purge: {
        content: [
            './vendor/laravel/jetstream/**/*.blade.php',
            './storage/framework/views/*.php',
            './resources/views/**/*.blade.php',
        ],
    },

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        opacity: [
            'responsive', 'hover', 'focus'
            /*, 'active', 'visited', 'checked', 'disabled', 'first', 'last', 'even', 'odd', 'group-hover', 'group-focus', 'focus-within'*/
        ],
    },

    plugins: [require('@tailwindcss/ui')],
};
