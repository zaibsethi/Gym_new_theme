<template>
    <header class="header slider-fade" id="home">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="text-left item bg-img" data-overlay-dark="4" :data-background="slider1">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10">
                                <h6>Welcome to <span class="textColor">FitnessZone</span></h6>
                                <h1>Be A Happier, Healthier, <span>Stronger You</span></h1>
                                <p>Achieve your health & fitness goals at any stage.</p>
                                <a href="#contact" class="btn-1 button-1">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-left item bg-img" data-overlay-dark="5" :data-background="slider2">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <h6>Welcome to <span class="textColor">FitnessZone</span></h6>
                                <h1>Keep Your Body <span>Fit & Strong</span></h1>
                                <p>Achieve your health & fitness goals at any stage.</p>
                                <a href="#contact" class="btn-1 button-1">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-left item bg-img" data-overlay-dark="4" :data-background="slider4">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <h6>Welcome to <span class="textColor">FitnessZone</span></h6>
                                <h1><span>Be stronger</span> than your excuses<span>!</span></h1>
                                <p>Achieve your health & fitness goals at any stage.</p>
                                <a href="#contact" class="btn-1 button-1">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
// Importing the image
import slider1 from '../../../public/frontend/img/slider/b1.jpg';
import slider2 from '../../../public/frontend/img/slider/b2.jpg';
import slider4 from '../../../public/frontend/img/slider/b3.jpg';

export default {
    data() {
        return {
            // style
            dynamicStyles: {
                fontSize: '20px'
            },
            slider1: slider1,
            slider2: slider2,
            // slider3: slider3,
            slider4: slider4,


        };
    },


}
</script>

<style scoped>

.textColor {
    color: #C7D300;
}
</style>
