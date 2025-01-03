import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    light: '#6d28d9', // Example custom color
                    DEFAULT: '#5b21b6',
                    dark: '#4c1d95',
                },
                secondary: {
                    light: '#db2777',
                    DEFAULT: '#be185d',
                    dark: '#9d174d',
                },
                // Add more custom colors here
            },
        },
    },

    plugins: [forms],
};
