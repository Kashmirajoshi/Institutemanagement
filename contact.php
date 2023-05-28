<!-- Header section  -->
<?php include 'header.php'; ?>

<main>
  <!-- <Start of contact section> -->
  <section class="contact_us" id="contact">
    <div>
      <h2>Enquiry</h2>
      <br />
      <p>Call / WhatsApp - +91-9730782009</p>
      <br />
      <br />
      <p>Timings - Mon to Sat - Open 24 Hrs</p>
      <br />
      <br />
      <p>Email us - Vidhyarthi203@gmail.com</p>
      <br />
      <br />
      <p>
        Address - VIT Technology Solution, 3rd Floor, Rajmata Complex,
        Kranti Chowk,<br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp; Aurangabad-Maharashtra - 431005 (Above
        Mannubhai Mithaiwal)
      </p>
      <br />
      <br />
      <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3752.21809524941!2d75.32873529999999!3d19.8730106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTnCsDUyJzIyLjgiTiA3NcKwMTknNDMuNSJF!5e0!3m2!1sen!2sin!4v1676988860074!5m2!1sen!2sin" width="500" height="300">does not support</iframe>
      </div>
      <br />
      <br />
    </div>

    <div class="contact bg-body w-50 rounded-2 text-center">
      <form method="post">
        <h3>GET IN TOUCH</h3>
        <input type="text" name="name" id="name" placeholder="Your Name" required />
        <input type="text" name="subject" id="subject" placeholder="Subject for enquiry" required />
        <input type="email" name="email" id="email" placeholder="Email id" required />
        <!-- <input type="text" name="phone" id="phone" placeholder="Phone No." required /> -->
        <textarea name="message" id="message" rows="4" placeholder="How can we help you?"></textarea>
        <div>
          <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        </div>
      </form>
    </div>
    <?php require 'enquiry_crud.php'; ?>

    <?php require 'sendMail.php'; ?>
  </section>
  <!--< end of contact section> -->
</main>

<!-- Footer section -->
<?php include 'footer.php'; ?>