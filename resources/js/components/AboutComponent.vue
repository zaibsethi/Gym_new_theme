<template>
    <section class="about section-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30">
                    <div class="section-title2">About Us</div>
                    <div class="section-title ">The story behind <span>our gym</span></div>
                    <p class="mb-30 textStyle">Welcome to Fitness Zone, the ultimate destination for your fitness
                        journey. At
                        Fitness Zone, we are dedicated to helping you achieve your fitness goals, whether you're a
                        beginner or a seasoned fitness enthusiast.

                        Our gym is designed to cater to individuals of all fitness levels and interests. Whether you're
                        looking to lose weight, build strength, improve endurance, or simply maintain a healthy
                        lifestyle, we have a wide range of fitness programs and equipment to meet your needs. From
                        cutting-edge cardio machines and weightlifting equipment to group fitness classes and personal
                        training sessions, we offer a comprehensive fitness solution under one roof.</p>
                    <ul class="list-unstyled list">
                        <li>
                            <div class="list-icon"><span class="ti-check"></span></div>
                            <div class="list-text">
                                <p>Over 7 years of experience</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-icon"><span class="ti-check"></span></div>
                            <div class="list-text">
                                <p>Certified Trainers</p>
                            </div>
                        </li>
                        <li>
                            <div class="list-icon"><span class="ti-check"></span></div>
                            <div class="list-text">
                                <p>Exceptional work quality</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="about-img">
                        <div class="img"><img :src="aboutImg" class="img-fluid" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</template>

<script>
import aboutImg from '../../../public/frontend/img/about.jpg';

export default {
    data() {
        return {
            aboutImg: aboutImg
        };
    }
}
</script>

<style scoped>
.textStyle {
    text-align: justify;
}

</style>


