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
                sans: ['Plus Jakarta Sans', 'Figtree', ...defaultTheme.fontFamily.sans],
                serif: ['Playfair Display', 'Cinzel', ...defaultTheme.fontFamily.serif],
                cinzel: ['Cinzel', 'serif'],
                playfair: ['Playfair Display', 'serif'],
            },
            colors: {
                brand: {
                    maroon: '#721c1c',
                    'dark-maroon': '#800000',
                    gold: '#d4af37',
                    'dark-gold': '#b8860b',
                    olive: '#4a6123',
                    cream: '#fdfbf7',
                    beige: '#f7f2e8',
                },
            },
        },
    },

    plugins: [forms],
};
