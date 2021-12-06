import Vue from 'vue'
import App from './App.vue'
import Router from './Router'
import BootstrapVue from 'bootstrap-vue';

import HTTP from './core/Services/http-services';

Vue.config.productionTip = false
Vue.use(BootstrapVue);

Vue.component('HTTP', HTTP);
new Vue({
  router: Router,
  render: h => h(App),
}).$mount('#app')

