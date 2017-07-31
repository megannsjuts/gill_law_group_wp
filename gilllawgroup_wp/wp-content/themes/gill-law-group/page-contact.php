<?php
/*
Template Name: Contact
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="container">

  <main class="main">
  					<div class="banner7"></div>

  					<div class="firm">
  						<h1>Contact Us</h1>
  					</div>

            <p class="firm-content">If you are in need of quality legal representation, call our office for a free consultation. We will take the time to provide you with the personal attention and dedicated legal representation you deserve. We have convenient offices in Aurora and West Chicago.</p>
            <p class="firm-content">You can also contact us with any questions or concerns you may have by using the contact form below!</p>

            <div id="contact-us">
              <form class="contact-us" action="script.php" method="post">
                <input type="hidden" name="redirect" value="http://www.opera.com" />
                <ul>
                    <li>
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" value="" />
                    </li>
                    <li>
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email" value="" />
                    </li>
                    <li>
                        <label for="comments" id="comments">Comments:</label>
                        <textarea name="comments" cols="25" rows="6"></textarea>
                    </li>
                    <li>
                        <input type="submit" value="submit" class="submit"/>
                        <input type="reset" value="reset" class="reset"/>
                    </li>
                </ul>
            </form>
          </div>

          <p class="firm-content">Before sending, please note:  Information on www.gilllawgroup.com is for general use and is not legal advice.  This website is not intended to create, and receipt of it does not constitute, an attorney-client relationship.  Anything that you send to anyone at our Firm will not be confidential or privileged unless we have agreed to represent you.  If you send this email, you confirm that you have read and understand this notice.</p>

          <div>
            <style>
               #map {
                height: 400px;
                width: 95%;
                margin: 0 auto;
               }
            </style>
            <h2 class="location-map">Location | Get Directions</h2>
            <div id="map"></div>
            <script>
              function initMap() {
                var uluru = {lat: 41.891436, lng: -88.203395};
                var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 4,
                  center: uluru
                });
                var marker = new google.maps.Marker({
                  position: uluru,
                  map: map
                });
              }
            </script>
            <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEff-5BXf44xoyxmH_ZmnOoxCHyjd239w&callback=initMap">
            </script>

          </div>

            <div class="anniversary">
              <h2>20<sup>th</sup> Year Anniversary</h2>
              <p>We want to thank all of our clients, the communities, our tremendous staff and our families for helping make the dream of helping others in their time of need come true. We could not continue to do so without all the hard work and commitment from everyone at The Gil Law Group.</p>
              <p>We thank you for all your support over the years.</p>
            </div>

            <div class="email">
              <p>Want to receive free legal tips?</p>
              <h2>Sign up for our newsletter!</h2>
              <form>
                E-mail:
                <input type="email" name="email" placeholder="your email address" required class="optin">
                <input type="submit" value="Subscribe" class="button">
              </form>
            </div>
				</main>
      </div>

      <?php endwhile; endif; ?>

      <?php get_footer(); ?>
