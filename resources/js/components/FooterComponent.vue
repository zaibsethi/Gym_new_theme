<template>
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="wrap">
                            <h4>Contact</h4>
                            <div class="wrap-text">{{ address }}
                                <br>Lahore
                            </div>
                            <div class="wrap-phone">Phone: 0324-4900875</div>
                            <div class="wrap-mail">info@fitnesszonepk.com</div>
                        </div>
                    </div>
                    <div class="col-md-3 offset-md-1">
                        <div class="opening-hours">
                            <h4>Links</h4>
                            <ul>
                                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                                <li class="nav-item"><a class="nav-link" href="#service">Services</a></li>
                                <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 offset-md-1">
                        <div class="opening-hours">
                            <h4>Opening Hours</h4>
                            <ul>
                                <li>
                                    <div class="tit">Mon - Sat</div>
                                    <div class="dots"></div>
                                    <span>{{ gymTime }}</span>
                                </li>

                                <li>
                                    <div class="tit">Sunday</div>
                                    <div class="dots"></div>
                                    <span>Closed</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="copyright">
                            <p>2024 © All rights reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-6 text-end">
                        <div class="footer-social"><a href="https://www.facebook.com/fitnesszone7/" target="_blank"><i
                            class="ti-instagram"></i></a> <a href="https://www.facebook.com/fitnesszone7/"
                                                             target="_blank"><i
                            class="ti-facebook"></i></a> <span style="visibility: hidden">Hide</span></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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

    props: {
        address: String,
        gymTime: String
    }

};
</script>
