<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header px-4 border-0">
                <h2 class="modal-title h4" id="exampleModalLabel">Make Appointment</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4 pt-0">
                <?php echo do_shortcode('[contact-form-7 id="125" title="appointment"]')?>
            </div>
        </div>
    </div>
</div>

<a href="#" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
<footer class="bg-footer" style="overflow: hidden;">
    <div class="container">
        <div class="col-lg-8 mx-auto py-7">
            <h2 class="mb-3 c-brown" data-aos="fade-up" data-aos-duration="500">Rejuvenique Aesthetic </br> Clinic in Bali.</h2>
            <div class="row align-items-top">
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="550">                    
                    <div class="pt-4 text-white">
                    <b>Operating Hours</b><br>
                    Monday - Saturday : 9am - 6pm<br>
                    <br>
                    <b>Address</b><br>
                    <ul style="padding: 0;list-style: none;color: white;">
                        <li class="pt-2"><b style="font-size: 14px;">Sanur</b></li>
                        <li>Jl. Danau Tamblingan no. 59, Sanur, Bali 80228</li>
                        <li class="pt-2"><b style="font-size: 14px;">Canggu</b></li>
                        <li>Jl. Pantai Berawa no. 8, Badung, Bali 80361</li>
                    </ul>
                    <b>Contact</b><br>
                    contact@rejuveniqueclinic.com<br>
                    +62 853 3316 5062<br>
                    </div>
                    <div class="pt-4">
                        <a href="" class="pe-3">
                            <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/instagram.png" alt="">
                        </a>
                        <a href="" class="pe-3">
                            <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/facebook.png" alt="">
                        </a>
                        <a href="" class="pe-3">
                            <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/google-maps.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="600">
                <form class="contact-form row row-cols-1">
                    <div class="form-field col mt-4 mb-2">
                        <input id="name" class="input-text js-input" type="text" required>
                        <label class="label" for="name">Name</label>
                    </div>
                    <div class="form-field col mt-4 mb-2">
                        <input id="email" class="input-text js-input" type="email" required>
                        <label class="label" for="email">E-mail</label>
                    </div>
                    <div class="form-field col mt-4 mb-2">
                        <input id="message" class="input-text js-input" type="text" required>
                        <label class="label" for="message">Message</label>
                    </div>
                    <div class="form-field col mt-4 mb-2 align-center">
                        <input class="btn p-0 text-white" type="submit" value="+ send message">
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</footer>