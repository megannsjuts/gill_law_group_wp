<?php
/*
Template Name: Home
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="container">

  <main class="main">
    <div class="banner1"></div>

    <h1>Our Services</h1>
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

    <div class="banner2">
    <!--<img src="assets/src/img/lawyer.png" /> -->
    </div>

    <?php get_template_part('partials/awards'); ?>

    <div class="team">
    <img src="<?php bloginfo('template_url'); ?>/assets/src/img/svg/Asset6.svg"/>
    <h1>Meet Our Legal Team</h1>
    <p>The Gil Law Group is one of the most respected law firms in the Chicagoland area dedicated to serving the legal needs of our community. Our attorneys are highly experienced and committed to preserving and protecting our clients’ rights. We strive to meet all of our clients’ needs and concerns, regardless of the complexity of the matter.</p>
    </div>

    <div class="grid">
    	<div class="card">
    		<img src="<?php bloginfo('template_url'); ?>/assets/src/img/gil.jpg" class="responsive-image"/>
    		<div class="content">
    			<h2>Eduardo J. Gill</h2>
    		</div>
    	</div>

    	<div class="card">
    		<img src="<?php bloginfo('template_url'); ?>/assets/src/img/smutzer.jpg" class="responsive-image"/>
    		<div class="content">
    			<h2>Jenniffer Smutzer</h2>
    		</div>
    	</div>

    	<div class="card">
    		<img src="<?php bloginfo('template_url'); ?>/assets/src/img/berrones.jpg" class="responsive-image"/>
    		<div class="content">
    			<h2>Elizabeth Berrones</h2>
    		</div>
    	</div>

    	<div class="card">
    		<img src="<?php bloginfo('template_url'); ?>/assets/src/img/negron.jpg" class="responsive-image"/>
    		<div class="content">
    			<h2>Jesus Negron</h2>
    		</div>
    	</div>

    	<div class="card">
    		<img src="<?php bloginfo('template_url'); ?>/assets/src/img/gonzalez.jpg" class="responsive-image"/>
    		<div class="content">
    			<h2>Edward Gonzalez</h2>
    		</div>
    	</div>

    	<div class="card">
    		<img src="<?php bloginfo('template_url'); ?>/assets/src/img/klein.jpg" class="responsive-image"/>
    		<div class="content">
    			<h2>Eliza Klein</h2>
    		</div>
    	</div>

    	<div class="card">
    		<img src="<?php bloginfo('template_url'); ?>/assets/src/img/marrerro.jpg" class="responsive-image"/>
    		<div class="content">
    			<h2>Samuel Marrero Jr.</h2>
    		</div>
    	</div>

    	<div class="card">
    		<img src="<?php bloginfo('template_url'); ?>/assets/src/img/sanchez.jpg" class="responsive-image"/>
    		<div class="content">
    			<h2>Julietta Sanchez</h2>
    		</div>
    	</div>
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
