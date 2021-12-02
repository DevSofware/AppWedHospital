import Vue from 'vue';
import Router from 'vue-router';

import Login from '@/pages/Login';

window.Vue = Vue;

Vue.use(Router);

export default new Router({
    routes: [
        {
            path: '/Login',
            name: 'Login',
            component: Login,
        },
    ],
    
});