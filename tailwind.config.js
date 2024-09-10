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
            width: {
                'logo-nav': '55px', // Largura personalizada para a barra de navegação
                'logo-auth': '100px', // Largura personalizada para login/registro
            },
            height:{
                'hAuth':'100px',
                'hNav':'55px',
            },
            backgroundImage: {
                'logo-retina': "url('img/favicon@2x.png')",
            },
            backgroundSize: {
                'contain': 'contain',
            },
        },
    },

    // tailwind.config.js


    plugins: [forms],
};
