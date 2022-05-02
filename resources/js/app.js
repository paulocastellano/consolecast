require('./bootstrap');

window.Vapor = require("laravel-vapor");


import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Console Cast';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .mixin({ methods: { route, asset: window.Vapor.asset } })
            .mount(el);
    },
})
