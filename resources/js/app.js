import './bootstrap';

import "../sass/app.scss"

import { createApp } from 'vue';
import Home from '../components/Home.vue';
import Match from '../components/Match.vue';


const app = createApp({});


app.component('home', Home)
    .component('match', Match);


app.mount("#app"); 
