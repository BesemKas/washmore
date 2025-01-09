import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'media', // Enable dark mode based on user's system preference
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {

                // text colors
                primary: {
                    light: '#f7fbff',
                    DEFAULT: '#5b21b6',
                    dark: '#4c1d95',
                },
                secondary: {
                    light: '#db2777',
                    DEFAULT: '#be185d',
                    dark: '#9d174d'
                },
                navtextActive:{
                    light: '#444444',
                    dark: '#000000',
                },
                navtextInactive:{
                    light: '#616161',
                    dark: '#d2d2d2',
                },

                // logo colors
                logoGreen: '#00b140',
                logoBlue: '#29a7d7',

                // button colors
                btnPrimary:{
                    light: '#29a7d7',
                    DEFAULT: '#29a7d7',
                    dark: '#61bcdf',
                },
                btnSecondary:{
                    light: '#00b140',
                    DEFAULT: '#00b140',
                    dark: '#61bcdf',
                },

                // background colors
                navbg:{
                    light: '#eaeaea',
                    dark: '#5e7581',
                },
                contentbg:{
                    light: '#eeeeee',
                    dark: '#3c4d56',
                },
                footerbg:{
                    light: '#eeeeee',
                    dark: '#bababa',
                },


                //link colors
                navlinkActive:'#29a7d7',
                navlinkHover:'#00b140',

            },
            
        },
    },

    plugins: [forms],
};