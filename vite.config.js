<<<<<<< HEAD
import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'
=======
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
>>>>>>> bb1d15a8ad6975885f7f5cfb4e5f7b5c0fae9f1f

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
<<<<<<< HEAD
    ],
})
=======
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
>>>>>>> bb1d15a8ad6975885f7f5cfb4e5f7b5c0fae9f1f
