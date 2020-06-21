import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';

Vue.use(VueRouter); // register vue router as a plugin




let app = new Vue({
    el: '#app',

    router: new VueRouter(routes)
});