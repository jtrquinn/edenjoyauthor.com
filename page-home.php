<?php get_header(); ?>

<div class="flex-auto">
	<div class="sm:px-8 mt-9">
		<div class="mx-auto w-full max-w-7xl lg:px-8">
			<div class="px-4 sm:px-8 lg:px-12">
				<?php if (have_posts()): ?>
					<?php while (have_posts()):
						the_post(); ?>
						<div class="mt-6 text-base text-zinc-600 dark:text-zinc-400">
							<?php the_content(); ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>