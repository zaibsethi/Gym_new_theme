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
    <FooterComponent :address="address" :gymTime="gymTime" ></FooterComponent>

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

// Importing GarhiShahu gym images the image
import gallery1 from '../../../public/frontend/img/gallery/gr1.jpg';
import gallery2 from '../../../public/frontend/img/gallery/gr2.jpg';
import gallery3 from '../../../public/frontend/img/gallery/gr3.jpg';
import gallery4 from '../../../public/frontend/img/gallery/gr4.jpg';
import gallery5 from '../../../public/frontend/img/gallery/gr5.jpg';
import gallery6 from '../../../public/frontend/img/gallery/gr6.jpg';

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
            youtubeUrl: "https://youtu.be/syC6SRM-pd4",
            address: "Allama Iqbal Road Garhi Shahu,",
            gymTime: "Open 24Hours",
            hasVideo: true,

        };
    },
})


</script>
