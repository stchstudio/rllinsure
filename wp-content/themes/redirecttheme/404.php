<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<header class="page-header">
    <div class='grid-container'>
        <div class='grid-x grid-padding-x'>
            <div class='small-12 large-8 cell'>
				<div class="headline reveal-up load-hidden">
					<h1>Oh No, it's a 404</h1>
					<p>It looks like the page you were looking for doesn’t exist or has moved. No worries, our site navigation is just as friendly as our insurance experience. Let’s see if we can’t navigate to what you’re looking for.</p>
					<a href="<?php echo site_url() ?>" class="button">Back Home</a>
				</div>       
				
            </div>
			<div class="small-12 large-4 text-center">
				<div class="reveal-up load-hidden">
					<img src="https://rllinsure.com/wp-content/uploads/2022/10/frowny.svg" alt="Frowny">
				</div>
			</div>
        </div>
    </div>
</header>

<?php get_footer();
