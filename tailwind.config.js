import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                'montserrat': ['Montserrat', 'sans-serif'],
            },
        },
        colors: {
            // 'primary': '#f97316',
            'primary': '#f3782e',
            'white': '#ffffff',
            'black': '#000000',
            'green': '#65a30d'
        }
    },

    plugins: [forms, typography],
};
