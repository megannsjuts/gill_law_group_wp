<?php
/*
Template Name: About
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="container">

    <main class="main">
    	<div class="banner3">
    		<!-- <img src="assets/src/img/about.jpg" /> -->
    	</div>

    	<div class="firm">
    		<h1>Our Firm</h1>
    	</div>

    	<div class="history">
    		<h2>History</h2>
    		<p>The Gil Law Group was first established in 1994. Eduardo J. Gil left the Kane County State’s Attorney’s Office as a successful felony prosecutor and opened his doors to the Hispanic community in Aurora as the firm Barbosa and Gil.  After Attorney Barbosa became a Federal Judge, the firm was reorganized as Eduardo J. Gil and Associates.  In 2000, Attorney Rene Cruz was promoted to partner and the firm became Gil &amp; Cruz.</p>

    		<p>In January 2006, the firm relocated its Aurora office to 605 N. Broadway in Aurora.  The office is located on the corner of Route 25 and Pierce Street, just North of the US Post Office.  Gil &amp; Cruz spent 9 months renovating and restoring the original 44,000 square foot John Deere building built in 1927. Gil &amp; Cruz took great care in restoring all the original maple flooring, wooden beams and brick interior to their original appearance.</p>

    		<p>After 12 years as a partner of Gil &amp; Cruz, in December 2012, Rene Cruz became the first Latino Judge in the Sixteenth Judicial Circuit.  The firm then reorganized and became The Gil Law Group.</p>

    		<p>The Gil Law Group now has several offices in Illinois, and employs six experienced bilingual/bicultural attorneys and a large support staff.One of the main goals of The Gil Law Group has been and continues to be a dedication and passion to educate members of the Hispanic community, while prosecuting and defending their rights in all areas of law. An active member of the community, The Gil Law Group was named the 2005, 2007 and 2008 Aurora Hispanic Chamber of Commerce Small Business of the Year for its commitment to helping the Hispanic community.</p>

    		<p>The Gil Law Group is one of the most respected law firms in the Chicagoland area dedicated to serving the legal needs of our community. Our attorneys are highly experienced and committed to preserving and protecting our clients’ rights. We strive to meet all of our clients’ needs and concerns, regardless of the complexity of the matter.</p>

    		<p>We provide uncompromised legal representation to individuals, families, entrepreneurs, and small businesses that are founded upon the core values of integrity, hard work, and aggressive advocacy so as to assist clients in achieving both personal and business objectives. Whether you have been injured in an accident, are charged with a criminal offense, looking to buy a house or a business, seeking to file bankruptcy or divorce, our experienced and dedicated attorneys can assist you with these and all your other legal needs.</p>

    		<p class="free">If you are in need of quality legal representation, call our office for a free consultation. We will take the time to provide you with the personal attention and dedicated legal representation you deserve. We have convenient offices in Aurora and West Chicago.</p>
    	</div>
    	<div class="banner4">
    		<!-- <img src="assets/src/img/office.jpg" /> -->
    	</div>

    	<?php get_template_part('partials/awards'); ?>

    	<div class="partners">
    		<div class="team">
    			<img src="<?php bloginfo('template_url'); ?>/assets/src/img/svg/Asset 6.svg"/>
    			<h1>Meet Our Partners</h1>
    			<p>The Gil Law Group is one of the most respected law firms in the Chicagoland area dedicated to serving the legal needs of our community. Our attorneys are highly experienced and committed to preserving and protecting our clients’ rights. We strive to meet all of our clients’ needs and concerns, regardless of the complexity of the matter.</p>
    		</div>

    			<div class="grid">
    				<div class="card">
    					<img src="wp-content/themes/gill-law-group/assets/src/img/gil.jpg" class="responsive-image"/>
    					<div class="content">
    						<h2>Eduardo J. Gill</h2>
    					</div>
    				</div>

    				<div class="card">
    					<img src="wp-content/themes/gill-law-group/assets/src/img/smutzer.jpg" class="responsive-image"/>
    					<div class="content">
    						<h2>Jenniffer Smutzer</h2>
    					</div>
    				</div>
    			</div>
    		</div>

    </main>
  </div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
