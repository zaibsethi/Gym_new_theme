<template>

    <section class="video-wrapper video section-padding bg-img bg-fixed" data-overlay-dark="4"
             :data-background="videoImg" v-if="hasVideo">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-30">
                    <div class="section-title3">Be Inspired</div>
                    <div class="section-title">Explore Life <span>Gym</span></div>
                </div>
            </div>
            <div class="row">
                <div class="text-center col-md-12">
                    <a class="vid" :href="youtubeUrl">
                        <div class="vid-butn"><span class="icon"> <i class="ti-control-play"></i> </span></div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import videoImg from '../../../public/frontend/img/slider/10.jpg';

export default {
    data() {
        return {
            videoImg: videoImg,

        };
    },
    props: {
        youtubeUrl: String,
        hasVideo:Boolean
    }
}
</script>
