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

							<div class="relative flex flex-col justify-center gap-10 my-12">
								<div class="absolute left-1/2 transform -translate-x-1/2 w-screen h-full bg-ej-blue z-0">
								</div>
								<div class="flex flex-col items-center pt-12 px-4 lg:px-24 gap-5 z-10 text-zinc-100">
									<h2 class="text-4xl font-bold">
										About the Anthology
									</h2>
									<p class="py-4 text-center">
										The fifth student showcase anthology from The Author Conservatory, a
										college-alternative program for gifted writers focused on raising up the next C.S.
										Lewis and J.R.R. Tolkien. 100% of your purchase goes to help students attend writing
										conferences where they can pitch their work to agents and publishers.
									</p>
								</div>
								<div class="flex flex-col px-4 z-10">
									<div class="bg-white rounded-full w-1/2 mx-auto">
										<div class="w-full h-20 bg-ej-gold/25 rounded-full overflow-hidden shadow-inner">
											<div class="h-full bg-ej-gold rounded-full" style="width: 43%;"></div>
										</div>
									</div>
									<div class="text-center text-white">
										<span class="block my-8 text-7xl font-bold">43%</span>
										<p>
											funded for September conference!
										</p>
									</div>
								</div>
								<div class="flex justify-center p-4 z-10 pb-12">
									<img src="<?php echo get_template_directory_uri(); ?>/vof-banner.png" alt="VoF Banner"
										class="w-full h-auto">
								</div>
							</div>

						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>