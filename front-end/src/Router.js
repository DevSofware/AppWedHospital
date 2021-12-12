import Vue from 'vue';
import Router from 'vue-router';
import Login from '@/pages/Login.vue';
import Dashboard from '@/pages/Dashboard.vue';
import SignPatient from '@/pages/SignPatient.vue';
import SignDoctor from '@/pages/SignDoctor.vue';

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
        {
            path: '/SignPatient',
            name: 'SignPatient',
            component: SignPatient,
        },
        {
            path: '/SignDoctor',
            name: 'SignDoctor',
            component: SignDoctor,
        }
    ],
    
});