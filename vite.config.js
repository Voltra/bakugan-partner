import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import { compression } from "vite-plugin-compression2";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.ts"],
            refresh: true,
        }),
        compression({ algorithm: "gzip" }),
        compression({ algorithm: "brotliCompress" }),
    ],
    resolve: {
        alias: {
            "@": "/resources",
        },
    },
});
