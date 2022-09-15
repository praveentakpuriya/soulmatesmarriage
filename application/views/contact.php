<div class="hero-wrap" style="background-image: url('assets/img/bg_3.jpg');height: 300px;background-size: cover;background-position: bottom;">

    <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
            <div class="col-lg-6 col-md-6  d-flex align-items-end">
                <div class="text">
                    <h1 class="mb-4">Contact Us<span></span> <span></span></h1>
                </div>
            </div>

        </div>
    </div>
</div>


<section id="contact_section" class="contact_section sec_ptb_120 clearfix pt-0">
    <div class="container">
        <div class="section_title text-center mb-70 c_slide_in is_shown">
            <h2 class="title_text mb-0 c_slide_in_wrap1">
                <span class="c_slide_in_wrap2">
                    <span class="c_slide_in_wrap3">
                        Get In Touch
                    </span>
                </span>
            </h2>
            <p class="d-block text-center mt-2" data-aos="fade-up" data-aos-delay="300">
                We are always happy to talk with you. <br> Be sure to write to us if
                you have any questions or need help and support.</p>
        </div>

        <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
            <?php $msg = $this->session->flashdata('msg');
            if (isset($msg)) { ?>
                <div class="alert alert-success" role="alert">
                    <p>Your data record successfully!</p>
                </div>
            <?php } ?>
            <div class="col-lg-7">
                <div class="contact_form">
                    <form action="<?php echo base_url('Contact/submitFormData') ?>" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form_item">
                                    <input type="text" name="name" placeholder="Enter Your Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form_item">
                                    <input type="number" name="number" placeholder="Enter Mobile Number">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form_item">
                                    <input type="email" name="email" placeholder="Enter Email Address">
                                </div>
                            </div>
                        </div>

                        <div class="form_item">
                            <textarea name="message" placeholder="Enter Your Message..."></textarea>
                        </div>
                        <div class="col-lg-12 text-center">
                            <button type="submit" class="btn btn-primary btn-pdd w-30">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact_info ul_li_block" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="list_title mb-3">Contact Us</h3>
                    <ul class="clearfix">
                        <li>Indore india </li>
                        <li>Karimu Kotun Street, Victoria Island, Lagos, India, 101241.</li>
                    </ul>
                </div>
                <div class="contact_info ul_li_block">
                    <h3 class="list_title mb-3">Contact Info</h3>
                    <ul class="clearfix">

                        <li><span>Email:</span> example@gmail.com</li>
                        <li><span>Coll Us:</span> 0123456789</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>