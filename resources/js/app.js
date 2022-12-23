import './bootstrap';

import { createApp } from 'vue';
import Home from '../components/Home.vue';
import Test from '../components/Test.vue';


const app = createApp({});


app.component('home', Home)
    .component('test', Test);


app.mount("#app");