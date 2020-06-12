import Vue from 'vue';
import VueRouter from 'vue-router';
import App from './App.vue';
import Home from './containers/Home.vue';
import css from "./sass/style.scss";

Vue.use(VueRouter);

const router = new VueRouter({
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
    ]
});

new Vue({
    el: '#app',
    router: router,
    render: app => app(App)
});
