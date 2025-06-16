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

							<div class="flex flex-col space-y-8 sm:pt-30">
								<div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 items-center">
									<div class="flex justify-center pb-4">
										<img src="https://edenjoyauthor.com/wp-content/uploads/2025/02/book-mock.png" alt=""
											class="h-[20rem] sm:h-[30rem]">
									</div>
									<div class="xl:col-span-2 space-y-3">
										<h2 class="text-ej-teal text-2xl font-bold">
											Voices of the Future:<br />
											Stories of Bravery & Belonging
										</h2>
										<h3 class="text-ej-gold text-lg fond-semibold italic">Featuring “Flan and a
											Flying Monkey”<br />
											by Eden Joy
										</h3>
										<p class="text-zinc-800 dark:text-zinc-100">
											Twelve-year-old Thomas and his younger brother and sister are trying to help their
											Cuban
											foster brother adjust to staying in the US until it's safe enough for him to return
											to
											his parents, but the only thing he'll open up about is his love for Cuban food.
										</p>
										<p class="text-zinc-800 dark:text-zinc-100">
											With his birthday in two days, the siblings embark on a quest to make his favorite
											dessert. They just never expected to be helped by a magical monkey guardian and find
											community in their own town, while helping their brother find <span class="italic">his.</span>
										</p>
										<p class="text-zinc-800 dark:text-zinc-100">
											The fifth student showcase anthology from The Author Conservatory, a
											college-alternative
											program for gifted writers focused on raising up the
											next C.S. Lewis and J.R.R. Tolkien. 100% of your purchase goes to help students
											attend
											writing conferences where they can pitch their work to gents and publishers.
										</p>
										<form action="https://www.paypal.com/ncp/payment/C8NYM53C7GP28" method="post"
											target="_blank" class="pt-4">
											<input
												class="py-1 px-2 rounded-md bg-ej-teal text-white hover:cursor-pointer hover:brightness-125"
												type="submit" value="Order a Signed Copy" />
										</form>
									</div>
								</div>
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
									<div class="flex flex-col px-4 z-10 pb-12">
										<div class="bg-white rounded-full w-full md:w-3/4 lg:w-2/3 xl:w-1/2 mx-auto">
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