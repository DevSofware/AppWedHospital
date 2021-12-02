import App from './App.vue'

import Vue from 'vue';
import Router from './Routes';


new Vue({
    el:'#app',
    Router, 
    render: h => h(App),
});
