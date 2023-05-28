<!-- Header section  -->
<?php include 'header.php'; ?>

<div class="contact text-center">
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

<!-- Footer section -->
<?php include 'footer.php'; ?>