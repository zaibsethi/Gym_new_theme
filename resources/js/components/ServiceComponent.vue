<template>
    <section class="classes3 section-padding" id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-60">
                    <div class="section-title3">Our Services</div>
                    <div class="section-title">Our <span>Classes</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-60">
                    <div class="card">
                        <div class="card-inner">
                            <div class="card-img align-center"><span
                                class="icon-size icon-size-1 flaticon-dumbbells"></span></div>
                            <div class="card-box">
                                <h4 class="card-title align-center">Personal Training</h4>
                                <p class="font-text align-center">Elevate Your Skills, Unlock Your Potential: Experience
                                    Professional Training at Its Finest!</p>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-60">
                    <div class="card">
                        <div class="card-inner">
                            <div class="card-img align-center"><span
                                class="icon-size icon-size-1 flaticon-sports-1"></span></div>
                            <div class="card-box">
                                <h4 class="card-title align-center">Fitness Class</h4>
                                <p class="font-text align-center">Shed Pounds, Gain Confidence: Join Our Results-Driven
                                    Fat Loss Program Today!</p>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-60">
                    <div class="card">
                        <div class="card-inner">
                            <div class="card-img align-center"><span
                                class="icon-size icon-size-1 flaticon-dumbbell-2"></span></div>
                            <div class="card-box">
                                <h4 class="card-title align-center">Nutrition Plan</h4>
                                <p class="font-text align-center">Optimize your health with our Nutrition Plan. Expert
                                    guidance for your goals.</p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import {useRoute} from 'vue-router';

export default {
    setup() {
        const route = useRoute();
        return {
            route,
        };
    },
};
</script>

