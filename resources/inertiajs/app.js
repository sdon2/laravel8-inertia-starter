import './bootstrap';

import Vue from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue';
import { InertiaProgress } from '@inertiajs/progress';
import { ZiggyVue } from 'ziggy';
import Multiselect from 'vue-multiselect';
import VueNumeric from 'vue-numeric';
import LoadingButton from '@/Shared/LoadingButton';
import { Head } from "@inertiajs/inertia-vue";
import VueSweetalert2 from 'vue-sweetalert2';
import VueModal from "vue2-modal";

// Swal
import 'sweetalert2/dist/sweetalert2.min.css';

// Multiselect
import "vue-multiselect/dist/vue-multiselect.min.css";

// Custom styles
import "../sass/inertia.scss";

const appName = window.document.querySelector('meta[name="app_name"]').content || 'Laravel';

const swal_options = {
    confirmButtonColor: '#41b882',
    cancelButtonColor: '#ff7674',
};

createInertiaApp({
    title: (title) => `${appName} | ${title}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin }) {

        Vue.use(plugin);
        Vue.use(ZiggyVue, Ziggy);
        Vue.use(VueNumeric);
        Vue.use(VueSweetalert2, swal_options);
        Vue.use(VueModal);

        Vue.component('loading-button', LoadingButton);
        Vue.component('v-multiselect', Multiselect);
        Vue.component('v-head', Head);

        Vue.prototype.$confirmDelete = function () {
            return Vue.swal({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
            });
        };

        Vue.prototype.$alert = function (message) {
            return Vue.swal({
                title: "Error",
                text: message,
                icon: "error",
                showCancelButton: false,
                confirmButtonColor: "#3085d6",
                confirmButtonText: "Ok",
            });
        };

        return new Vue({
            render: h => h(app, props),
        }).$mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
