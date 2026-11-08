import tailwindcss from "@tailwindcss/vite";
import laravel from "laravel-vite-plugin";
import { bunny } from "laravel-vite-plugin/fonts";
import { defineConfig, lazyPlugins } from "vite-plus";
import AOS from "aos";
import "aos/dist/aos.css";
AOS.init({});

export default defineConfig({
    plugins: lazyPlugins(() => [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
            fonts: [
                bunny("Instrument Sans", {
                    weights: [400, 500, 600],
                }),
            ],
        }),
        tailwindcss(),
    ]),
    server: {
        cors: true,
        watch: {
            ignored: [
                "**/.agents/**",
                "**/.claude/**",
                "**/.cursor/**",
                "**/.junie/**",
                "**/storage/framework/views/**",
                "**/vendor/**",
            ],
        },
    },
});
