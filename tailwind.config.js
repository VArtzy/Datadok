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
            colors: {
                'primary': '#22577A',
                'primary-light': '#38A3A5',
                'secondary': '#57CC99',
                'secondary-light': '#80ED99',
                'black': '#1E1E1E',
                'white': '#F5F5F5'
            },
            fontFamily: {
                sans: ['Rubik', ...defaultTheme.fontFamily.sans],
                serif: ['Merriweather', ...defaultTheme.fontFamily.serif]
            },
            spacing: {
                '4': '0.75rem',
                '8': '1.5rem',
                '12': '3rem',
                '16': '6rem'
            }
        }
    },

    plugins: [forms, typography],
};
