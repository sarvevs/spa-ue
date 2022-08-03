require('./bootstrap');
import Vue from 'vue'
import router from "./router";
Vue.component('index', require('./components/Index.vue').default);

const app = new Vue({
    el: '#app',
    router
});
