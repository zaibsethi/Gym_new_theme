<template>
    <section class="banner-header section-padding bg-img" data-overlay-dark="5" :data-background="gallery1"
             :style="gallery1" id="gallery">
        <div class="v-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h6 class="animate-box fadeInUp animated" data-animate-effect="fadeInUp">Image Gallery</h6>
                        <h1 class="animate-box fadeInUp animated" data-animate-effect="fadeInUp">Image Gallery</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">

            <div class="row gallery-items" style="position: relative; height: 801.969px;">
                <div class="col-md-4 gallery-masonry-wrapper single-item"
                     style="position: absolute; left: 0px; top: 0px;" v-for="(image, index) in images" :key="index">

                    <a :href="image" title="" class="gallery-masonry-item-img-link img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"><img :src="image" class="img-fluid mx-auto d-block"
                                                          alt=""></div>
                            <div class="gallery-masonry-item-img"></div>
                        </div>
                    </a>
                </div>


            </div>
        </div>
    </section>
</template>


<script>
// Importing the image
import gallery1 from '../../../public/frontend/img/gallery/gr1.jpg';
// import gallery2 from '../../../public/frontend/img/gallery/gr2.jpg';
// import gallery3 from '../../../public/frontend/img/gallery/gr3.jpg';
// import gallery4 from '../../../public/frontend/img/gallery/gr4.jpg';
// import gallery5 from '../../../public/frontend/img/gallery/gr5.jpg';
// import gallery6 from '../../../public/frontend/img/gallery/gr6.jpg';

export default {
    props: {
        images: {
            type: Array,
            required: true
        }
    },
    data() {
        return {
            gallery1: gallery1,
        };
    }

}
</script>

