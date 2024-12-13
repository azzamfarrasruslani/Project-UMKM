import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from "path";



export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "node_modules/preline/dist/preline.js",
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "@images": path.resolve(__dirname, "resources/images"), // Pastikan alias @images mengarah ke resources/images
        },
    },
    server: {
        host: '127.0.0.1',
        port: 5173,  // Vite berjalan di port yang berbeda
    },
    base: 'http://127.0.0.1:8000',  // Base URL dari Laravel
});
