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
        colors:{
            'custom-background': '#000000',
        },
        extend: {
            
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                montserrat: ['Montserrat', 'sans-serif'],
                raleway: ['Raleway', 'sans-serif'],
                nunito:['Nunito', 'sans-serif'],
                moderustic:[ 'Moderustic', 'sans-serif'],
                josefin: ['Josefin Sans', 'sans-serif'],
            },
        },
    },

    // tailwind.config.js


    plugins: [forms],
};
