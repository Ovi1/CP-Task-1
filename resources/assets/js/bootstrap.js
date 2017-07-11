window._ = require('lodash');
try {
    window.$ = window.jQuery = require('jquery');
    require('bootstrap-sass');
} catch (e) {

}


import VueRouter from 'vue-router'
import Form from 'form-backend-validation';
import axios from  'axios'
import Vue from  'vue'


window.Form = Form;
window.Vue = Vue;
Vue.use(VueRouter);
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}