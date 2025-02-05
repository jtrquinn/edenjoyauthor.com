<?php get_header(); ?>

<div>
	<main>

		<?php if (have_posts()): ?>
			<?php while (have_posts()):
				the_post(); ?>

				<article>

					<?php the_post_thumbnail('large'); ?>

					<h1>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_title(); ?>
						</a>
					</h1>

					<div>
						<?php the_time('m/d/Y'); ?> |
						<?php if (comments_open()): ?>
							<span>
								<?php comments_popup_link(__('Comment', 'break'), __('1 Comment', 'break'), __('% Comments', 'break')); ?>
							</span>
						<?php endif; ?>
					</div>

					<div>
						<?php the_content('Continue...'); ?>
						<?php wp_link_pages(); ?>
					</div>

					<div class="meta clearfix">
						<div class="category">
							<?php echo get_the_category_list(); ?>
						</div>
						<div class="tags">
							<?php echo get_the_tag_list('| &nbsp;', '&nbsp;'); ?>
						</div>
					</div>

				</article>

			<?php endwhile; ?>

			<!-- pagintation -->
			<div>
				<div class="past-page">
					<?php previous_posts_link('newer'); ?>
				</div>
				<div class="next-page">
					<?php next_posts_link('older'); ?>
				</div>
			</div>

		<?php else: ?>

			<article class="post error">
				<h1 class="404">Nothing has been posted like that yet</h1>
			</article>

		<?php endif; ?>
	</main>
</div>

<?php get_footer(); ?>