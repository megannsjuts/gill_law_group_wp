<?php
/*
Template Name: Lawyers
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="container">

  <main class="main">
					<div class="banner6"></div>

					<div class="firm">
						<h1>Our Lawyers</h1>x
					</div>

          <p class="lawyers">The Gil Law Group is one of the most respected law firms in the Chicagoland area dedicated to serving the legal needs of our community. Our attorneys are highly experienced and committed to preserving and protecting our clients’ rights. We strive to meet all of our clients’ needs and concerns, regardless of the complexity of the matter.</p>

          <p class="lawyers">We provide uncompromised legal representation to individuals, families, entrepreneurs, and small businesses that are founded upon the core values of integrity, hard work, and aggressive advocacy so as to assist clients in achieving both personal and business objectives. Whether you have been injured in an accident, are charged with a criminal offense, looking to buy a house or a business, seeking to file bankruptcy or divorce, our experienced and dedicated attorneys can assist you with these and all your other legal needs.</p>

          <p class="free">If you are in need of quality legal representation, call our office for a free consultation. We will take the time to provide you with the personal attention and dedicated legal representation you deserve. We have convenient offices in Aurora and West Chicago.</p>

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

        </div>


<?php endwhile; endif; ?>

<?php get_footer(); ?>
