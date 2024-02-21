<template>
    <NavbarComponent></NavbarComponent>
    <SliderComponent></SliderComponent>
    <AboutComponent></AboutComponent>
    <VideoComponent :youtubeUrl="youtubeUrl" :hasVideo="hasVideo"></VideoComponent>
    <ServiceComponent></ServiceComponent>
    <GalleryComponent
        :images="[gallery1, gallery2, gallery3, gallery4, gallery5, gallery6]"
    ></GalleryComponent>
    <ContactComponent :address="address"></ContactComponent>
    <FooterComponent :address="address" :gymTime="gymTime"></FooterComponent>
</template>

<script>
import NavbarComponent from "../components/NavbarComponent.vue";
import SliderComponent from "../components/SliderImageComponent.vue";
import AboutComponent from "../components/AboutComponent.vue";
import VideoComponent from "../components/VideoComponent.vue";
import ServiceComponent from "../components/ServiceComponent.vue";
import GalleryComponent from "../components/GalleryComponent.vue";
import ContactComponent from "../components/ContactComponent.vue";
import FooterComponent from "../components/FooterComponent.vue";
import {defineComponent} from "vue";
// Importing ValenciaTown gym images the image
import gallery1 from '../../../public/frontend/img/gallery/mint1.jpeg';
import gallery2 from '../../../public/frontend/img/gallery/mint2.jpeg';
import gallery3 from '../../../public/frontend/img/gallery/mint3.jpeg';
import gallery4 from '../../../public/frontend/img/gallery/mint4.jpeg';
import gallery5 from '../../../public/frontend/img/gallery/mint5.jpeg';
import gallery6 from '../../../public/frontend/img/gallery/mint6.jpeg';


export default defineComponent({
    components: {
        NavbarComponent, SliderComponent, AboutComponent, VideoComponent, ServiceComponent,
        GalleryComponent, ContactComponent, FooterComponent
    }, data() {
        return {
            // images
            gallery1: gallery1,
            gallery2: gallery2,
            gallery3: gallery3,
            gallery4: gallery4,
            gallery5: gallery5,
            gallery6: gallery6,
            // youtube url

            youtubeUrl: "https://youtu.be/933dg1TzYhc",
            address: "309 G.T road Pakistan Mint stop,orange train, station # 5,",
            gymTime: "7:00AM - 12:00AM",
            hasVideo: false,

        };
    },
})


</script>
