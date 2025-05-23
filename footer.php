</main><!-- / end page container, begun in the header -->

<footer class="mt-12 flex-none">
	<div class="sm:px-8">
		<div class="mx-auto w-full max-w-7xl lg:px-8">
			<div class="border-t border-zinc-100 pt-10 pb-16 dark:border-zinc-700/40">
				<div class="relative px-4 sm:px-8 lg:px-12">
					<div class="mx-auto max-w-2xl lg:max-w-5xl">
						<div class="flex flex-col items-center justify-between gap-6 sm:flex-row">
							<?php wp_nav_menu(array(
								'theme_location' => 'primary',
								'container' => 'div',
								'menu_class' => 'flex flex-wrap justify-center gap-x-6 gap-y-1 text-sm font-medium text-zinc-800 dark:text-zinc-200',
								'item_class' => 'transition hover:text-ej-teal dark:hover:text-ej-gold',
							)); ?>
							<p class="text-sm text-zinc-400 dark:text-zinc-500">
								&copy; <?php echo date('Y'); ?> Eden Joy. All rights reserved.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</div>
</div>
</body>

</html>