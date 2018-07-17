<?php /* Template Name: Contact Us*/get_header('contactus');?>
<section class="contactus_info_section">
  <h2>CONTACT US</h2>
  <p class="contactus_para">
    Whether you're a current customer or want to learn more about WRT, we want to answer all your questions. Please contact us in the most convenient
    way, and we'll answer your questions as soon as possible.
  </p>
  <div class="container">
    <div class="row">
      <div class="padding">
        <div class="col l6">
          <div class="joseph_section">
            <p><strong class="name">Joseph Witzke</strong></p>
            <p class="phone">(209) 720-8040</p>
            <p class="email">joseph@wrtag.com</p>
          </div>
        </div>
        <div class="col l6">
          <div class="sara_section">
            <p><strong class="name">Sara Witzke</strong></p>
            <p class="phone">1-844-978-5433</p>
            <p class="email">sara@wrtag.com</p>
          </div>
        </div>
        <div class="col l6">
          <div class="silvano_section">
            <p> <strong class="name">Silvano DeLuna Jr (Fresno/ South/ Coast)</strong></p>
            <p class="phone">(559) 970-2881</p>
            <p class="email">wrt.silvano@gmail.com</p>
          </div>
        </div>
        <div class="col l6">
          <div class="tim_section">
            <p><strong class="name">Tim Mirnates (Sacramento/North)</strong></p>
            <p class="phone">(530) 501-6936</p>
            <p class="email">wrt.tim@gmail.com</p>
          </div>
        </div>
        <div class="col l6">
          <div class="spencer_section">
            <p><strong class="name">Spencer Veldstra (Modesto/Central)</strong></p>
            <p class="phone">(209) 247-5235</p>
            <p class="email"> wrt.spencer@gmail.com</p>
          </div>
        </div>  
      </div>
    </div>
  </div>
</section>
<section class="contact_form">
  <h2 class="center-align">COMPLETE THIS FORM AND WE'LL GET RIGHT BACK TO YOU.</h2>
  <div class="container">
    <div class="row">
      <form class="col l12 m12 s12">
        <div class="row">
          <div class="form">
            <?php echo do_shortcode('[ninja_form id=2]'); ?>
            <!-- <div class="input-field col l6 m12 s12">
              <input class="validate" placeholder="first name" type="text" id="first_name">
            </div>
            <div class="input-field col l6 m12 s12">
              <input class="validate" placeholder="last name" type="text" id="last_name">
            </div>
            <div class="input-field col l12 m12 s12">
              <input class="validate" placeholder="Company" type="text" id="company">
            </div>
            <div class="input-field col l6 m12 s12">
              <input class="validate" placeholder="Email" type="email" id="email">
            </div>
            <div class="input-field col l6 m12 s12">
              <input class="validate" placeholder="Phone Number" type="number" id="phone_number">
            </div>
            <div class="input-field col l12 m12 s12">
              <textarea class="materialize-textarea" placeholder="message" type="text" id="textarea1"></textarea>
            </div> -->
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<?php get_footer(); ?>
