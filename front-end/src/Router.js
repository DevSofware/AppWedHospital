import Vue from 'vue';
import Router from 'vue-router';
import Login from '@/pages/Login.vue';
import Dashboard from '@/pages/Dashboard.vue';

Vue.use(Router);

export default new Router({
    routes: [        
        {
            path: '/',
            name: 'dashboard',
            component: Dashboard,
        },
        {
            path: '/login',
            name: 'login',
            component: Login,
        },
    ],
    
});