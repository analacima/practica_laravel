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
            height:{
                "7v":"7vh",
                "10v":"10vh",
                "15v":"15vh",
                "65v":"65vh",
                "76v":"76vh"
            },
            colors:{
                "header":"#fcd5ce",
                "nav":"#fae1dd",
                "main":"#f8edeb",
                "footer":"#fae1dd"
            }
        },
    },

    // paleta de colores
    //fec5bb, fcd5ce, fae1dd, f8edeb, e8e8e4, d8e2dc, ece4db, ffe5d9, ffd7ba, fec89a


    plugins: [forms, require('daisyui')],
};
