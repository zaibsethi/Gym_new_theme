import './bootstrap';
import {createApp} from 'vue';
import router from './routes.js';

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';

app.component('example', ExampleComponent);

import NavbarComponent from './components/NavbarComponent.vue';

app.component('navbar-cmp', NavbarComponent);

import SliderComponent from './components/SliderImageComponent.vue';

app.component('slider-cmp', SliderComponent);

import AboutComponent from './components/AboutComponent.vue';

app.component('about-cmp', AboutComponent);

import VideoComponent from './components/VideoComponent.vue';

app.component('video-cmp', VideoComponent);

import ServiceComponent from './components/ServiceComponent.vue';

app.component('service-cmp', ServiceComponent);

import GalleryComponent from './components/GalleryComponent.vue';

app.component('gallery-cmp', GalleryComponent);

import ContactComponent from './components/ContactComponent.vue';

app.component('contact-cmp', ContactComponent);

import FooterComponent from './components/FooterComponent.vue';

app.component('footer-cmp', FooterComponent);


app.use(router).mount('#app');
