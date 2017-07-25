<?php
/*
Template Name: Services
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="container">

  <main class="main">
					<div class="banner5">
						<!-- <img src="assets/src/img/about.jpg" /> -->
					</div>

					<div class="firm">
						<h1>Our Services</h1>
					</div>

          <p class="lawyers">The Gil Law Group is one of the most respected law firms in the Chicagoland area dedicated to serving the legal needs of our community. Our attorneys are highly experienced and committed to preserving and protecting our clients’ rights. We strive to meet all of our clients’ needs and concerns, regardless of the complexity of the matter.</p>

          <p class="lawyers">We provide uncompromised legal representation to individuals, families, entrepreneurs, and small businesses that are founded upon the core values of integrity, hard work, and aggressive advocacy so as to assist clients in achieving both personal and business objectives. Whether you have been injured in an accident, are charged with a criminal offense, looking to buy a house or a business, seeking to file bankruptcy or divorce, our experienced and dedicated attorneys can assist you with these and all your other legal needs.</p>

          <p class="free">If you are in need of quality legal representation, call our office for a free consultation. We will take the time to provide you with the personal attention and dedicated legal representation you deserve. We have convenient offices in Aurora and West Chicago.</p>

					<div class="grid">
						<div class="card">
							<img src="<?php bloginfo('template_url'); ?>/assets/src/img/civil.jpg" class="responsive-image"/>
							<div class="content">
								<h2>Civil Cases</h2>
								<p>From landlord and tenant cases to multimillion dollar lawsuits, we have the experience you can trust.</p>
							</div>
						</div>

						<div class="card">
							<img src="<?php bloginfo('template_url'); ?>/assets/src/img/criminal.jpg" class="responsive-image"/>
							<div class="content">
								<h2>Criminal Cases</h2>
								<p>From traffic tickets to death penalty cases, misdemeanors to felonies, our attorneys have successfully handled all areas of criminal law.</p>
							</div>
						</div>

						<div class="card">
							<img src="<?php bloginfo('template_url'); ?>/assets/src/img/bankruptcy.jpg" class="responsive-image"/>
							<div class="content">
								<h2>Bankruptcy</h2>
								<p>Are you drowning in debt? From Chapter 7 to Chapter 13, our experienced attorneys can help you get out of debt and on with your life.</p>
							</div>
						</div>

						<div class="card">
							<img src="<?php bloginfo('template_url'); ?>/assets/src/img/family.jpg" class="responsive-image"/>
							<div class="content">
								<h2>Family Law</h2>
								<p>During one of the most agonizing times of your life, you need attorneys with experience to help you through. Our award winning attorneys litigate divorce, custody, paternity, child support and adoption cases.</p>
							</div>
						</div>

						<div class="card">
							<img src="<?php bloginfo('template_url'); ?>/assets/src/img/comp.jpg" class="responsive-image"/>
							<div class="content">
								<h2>Personal Injury / Worker's Compensation</h2>
								<p>Our firm has helped individuals involved in serious accidents recover millions of dollars.  From auto accidents, worker's compensation to birth defects, put your case in the hands of experienced litigators.</p>
							</div>
						</div>

						<div class="card">
							<img src="<?php bloginfo('template_url'); ?>/assets/src/img/realestate.jpg" class="responsive-image"/>
							<div class="content">
								<h2>Real Estate</h2>
								<p>No other local law firm handles more residential real estate transactions than The Gil Law Group. When you make the biggest purchase of your life, count on the firm with the most experience on your side.</p>
							</div>
						</div>
					</div>

					<h2 class="immigration">We now offer complete immigration services for our clients.</h2>

				</main>

      </div>


<?php endwhile; endif; ?>

<?php get_footer(); ?>
