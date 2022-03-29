/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
 import VueSweetalert2 from 'vue-sweetalert2';
 import 'sweetalert2/dist/sweetalert2.min.css';
import Vue from 'vue';
require('./bootstrap');

window.Vue = require('vue');
window.axios = require('axios');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.use(VueSweetalert2);
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('eliminar-distribuidor', require('./components/EliminarDistribuidor.vue').default);
Vue.component('eliminar-usuario', require('./components/EliminarUsuario.vue').default);
Vue.component('guardar-datos', require('./components/GuardarDatos.vue').default);
Vue.component('modificar-datos', require('./components/ModificarDatos.vue').default);
Vue.component('eliminar-metal', require('./components/EliminarMetal.vue').default);
Vue.component('eliminar-frente', require('./components/EliminarFrente.vue').default);
Vue.component('eliminar-size', require('./components/EliminarSize.vue').default); 
Vue.component('eliminar-vuelta', require('./components/EliminarVuelta.vue').default); 


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
