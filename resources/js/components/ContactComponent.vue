<template>

    <section class="contact section-padding" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-60 animate-box fadeInUp animated" data-animate-effect="fadeInUp">
                    <h5>Do you have questions about specific training courses, <span>the center or the team?</span></h5>
                    <!--                    <p class="mb-30">Praesent sed nisl ullamcorper the drana duru metus utah phare mavna busnini viventa-->
                    <!--                        the ornare ipsum.</p>-->
                    <div class="con">
                        <div class="icon">
                            <span class="flaticon-phone-call"></span>
                        </div>
                        <div class="con-content">
                            <p class="text"><a href="tel:0324-4900875">0324-4900875</a></p>
                        </div>
                    </div>
                    <div class="con">
                        <div class="icon">
                            <span class="flaticon-envelope"></span>
                        </div>
                        <div class="con-content">
                            <p class="text"><a href="mailto:info@fitnesszonepk.com">info@fitnesszonepk.com</a></p>
                        </div>
                    </div>
                    <div class="con">
                        <div class="icon">
                            <span class="flaticon-pin"></span>
                        </div>
                        <div class="con-content">
                            <div class="text">{{ address }}
                                <br>Lahore
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-md-1 animate-box fadeInUp animated" data-animate-effect="fadeInUp">
                    <div class="form-box">
                        <h5>Get in touch</h5>
                        <form method="post" class="contact__form"
                              action="https://duruthemes.com/demo/html/nostop/dark-slider/mail.php">
                            <!-- Form message -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                        Your message was sent successfully.
                                    </div>
                                </div>
                            </div>
                            <!-- Form elements -->
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input name="name" type="text" placeholder="Your Name *" required="">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="email" type="email" placeholder="Your Email *" required="">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input name="phone" type="text" placeholder="Your Number *" required="">
                                </div>
                                <div class="col-md-12 form-group">
                                    <input name="subject" type="text" placeholder="Subject *" required="">
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *"
                                              required=""></textarea>
                                </div>
                                <div class="col-md-12 mt-15">
                                    <input name="submit" type="submit" value="Send Message">
                                </div>
                            </div>
                        </form>
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
    props:{
        address:String
    }
};
</script>
