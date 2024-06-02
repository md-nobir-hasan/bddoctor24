import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/css/style.css",
                "resources/js/app.js",
                "resources/js/admin/chart/chart.min.js",
                "resources/js/admin/chart/ecommerce.js",
                // "resources/js/admin/flatpickr/dist/flatpickr.min.js",
                // "resources/js/admin/flatpickr/dist/plugins/rangePlugin.js",
                // "resources/js/admin/tagify/tagify.min.js",
                // "resources/js/admin/pristinejs/dist/pristine.min.js",
                // "resources/js/admin/simple-datatables/dist/umd/simple-datatables.js",
                // "resources/js/admin/demo.js",
                // "resources/js/admin/customizer.js",
            ],
            refresh: true,
        }),
    ],
});
