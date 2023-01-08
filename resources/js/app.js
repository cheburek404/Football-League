import './bootstrap';

import "../sass/app.scss"

import { createApp } from 'vue';
import Home from '../components/Home.vue';
import ClubTable from '../components/ClubTable.vue';
import ClubMatch from '../components/ClubMatch.vue';


const app = createApp({});


app.component('home', Home)
    .component('clubTable', ClubTable)
    .component('clubMatch', ClubMatch);


app.mount("#app");