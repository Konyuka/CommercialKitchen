import './bootstrap';
import '../css/app.css';

import { createApp, h} from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

import Bugsnag from '@bugsnag/js'
import BugsnagPluginVue from '@bugsnag/plugin-vue'
import BugsnagPerformance from '@bugsnag/browser-performance'


Bugsnag.start({
    apiKey: '4949a3c5acbf54e3f01a4a3ce4e82953',
    plugins: [new BugsnagPluginVue()]
})

BugsnagPerformance.start('4949a3c5acbf54e3f01a4a3ce4e82953')


// Bugsnag.notify(new Error('Test error'))


const appName = import.meta.env.VITE_APP_NAME || 'Laravel';
const bugsnagVue = Bugsnag.getPlugin('vue')

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(bugsnagVue)
            .mount(el);
    },
    progress: {
        color: '#f97316',
    },
});
