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
                'brand-orange': 'rgb(255 155 48)',
                'brand-dark': 'rgb(15 3 2)',
                'brand-beige': 'rgb(236 226 210)',
                'brand-rust': 'rgb(208 125 54)',
                'brand-cream': 'rgb(228 210 191)',
            },
        },
    },

    plugins: [forms],
};
