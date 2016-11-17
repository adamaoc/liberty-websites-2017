<?php getHeader(); ?>
<div class="jumbotron block-bg--light-gray">
  <div class="container">
    <h1>Make a difference
      <br><span class="text-uppercase">Be Politically Active</span></h1>
    <p>Learn how we can help get your political movement, moving!</p>
    <p><a class="btn btn-primary btn-lg" href="/offer" role="button">Learn more about our $10 Offer!</a></p>
  </div>
</div>
<div class="container text-center">
  <div class="row">
    <h2>About Our $10/per month Websites</h2>
    <div class="max-center">
      <?php getComponent('basicPricingAbout'); ?>
    </div>
    <!-- <p class="max-center">We’re here to help you get your word out! We love seeing politically active citizens and we’re here to do what we can to foster that outreach. As such, we’ll work with you to help get the right platform and right design to achieve your goals. We build and setup everything for FREE and host it on our servers. You buy a domain name and your $10/per month is basically paying for us to host your site.</p> -->
  </div>
</div>

<?php getShared('whatwedo'); ?>

<div class="container">
  <div class="row text-center">
    <h2>More About Liberty Websites</h2>
    <div class="max-center">
      <?php getComponent('aboutText'); ?>
    </div>
  </div>
</div>
<div class="container-fluid contact-wrap">
  <div class="row max-center max-center--lg text-center">
    <h2>Create your new blog or website now!</h2>
    <div>
      <a class="btn btn-primary btn-lg" href="/pricing" role="button">Get Started!</a>
      <a class="btn btn-default btn-lg" href="/contact" role="button">Contact Us</a>
    </div>
  </div>
</div>
<?php getFooter(); ?>
