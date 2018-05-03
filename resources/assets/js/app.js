
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

import passportClients from './components/passport/Clients.vue';
import passportAuthorizedClients from './components/passport/AuthorizedClients.vue';
import passportPersonalAccessTokens from './components/passport/PersonalAccessTokens.vue';
Vue.component('passport-clients',passportClients);
Vue.component('passport-authorized-clients',passportAuthorizedClients);
Vue.component('passport-personal-access-tokens',passportPersonalAccessTokens);

import imageUpload from './components/ImageUpload.vue';
Vue.component('image-upload',imageUpload);


import userProfile from './components/UserProfile.vue';
Vue.component('user-profile',userProfile);

const app = new Vue({
    el: '#app'
});
