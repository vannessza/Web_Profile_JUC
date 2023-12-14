

import './bootstrap';
import { createApp } from 'vue';

import * as VueGoogleMaps from 'vue2-google-maps';

Vue.use(VueGoogleMaps, {
    load: {
      key: ''
    },
  });

const app = new Vue({
    el: '#app'
});

import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);


app.mount('#app');
