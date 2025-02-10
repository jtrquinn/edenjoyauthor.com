<?php get_header(); ?>


<div class="sm:px-8 mt-16 sm:mt-32">
	<div class="mx-auto w-full max-w-7xl lg:px-8">
		<div class="relative px-4 sm:px-8 lg:px-12">
			<div class="mx-auto max-w-2xl lg:max-w-5xl">
				<?php if (have_posts()): ?>
					<?php while (have_posts()):
						the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>