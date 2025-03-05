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
</div>

<!-- <div class="">
	<h1 class="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl dark:text-zinc-100">
		Publications
	</h1>
	<div class="flex flex-col space-y-8 pt-12">
		<div class="flex flex-col lg:grid grid-cols-2 xl:grid-cols-3 items-center">
			<div class="flex justify-center pb-4">
				<img src="https://edenjoyauthor.com/wp-content/uploads/2025/02/book-mock.png" alt=""
					class="h-[20rem] sm:h-[30rem]">
			</div>
			<div class="xl:col-span-2 space-y-3">
				<h2 class="text-ej-green text-2xl font-bold">
					Voices of the Future:<br />
					Stories of Bravery & Belonging
				</h2>
				<h3 class="text-ej-gold text-lg fond-semibold italic">Featuring “Flan and a
					Flying Monkey”<br />
					by Eden Joy
				</h3>
				<p class="text-zinc-800 dark:text-zinc-100">
					The fifth student showcase anthology from The Author Conservatory, a
					college-alternative
					program for gifted writers focused on raising up the
					next C.S. Lewis and J.R.R. Tolkien. 100% of your purchase goes to help students
					attend
					writing conferences where they can pitch their work to gents and publishers.
				</p>
				<div class="pt-4">
					<button
						class="py-1 px-2 rounded-md bg-ej-green text-white hover:cursor-pointer hover:brightness-125">
						Order a Signed Copy
					</button>
				</div>
			</div>
		</div>
		<div class="flex flex-col lg:grid grid-cols-2 xl:grid-cols-3 items-center">
			<div class="flex justify-center pb-4">
				<img src="https://edenjoyauthor.com/wp-content/uploads/2025/02/book-mock.png" alt=""
					class="h-[20rem] sm:h-[30rem]">
			</div>
			<div class="xl:col-span-2 space-y-3">
				<h2 class="text-ej-green text-2xl font-bold">
					Voices of the Future:<br />
					Stories of Bravery & Belonging
				</h2>
				<h3 class="text-ej-gold text-lg fond-semibold italic">Featuring “Flan and a
					Flying Monkey”<br />
					by Eden Joy
				</h3>
				<p class="text-zinc-800 dark:text-zinc-100">
					The fifth student showcase anthology from The Author Conservatory, a
					college-alternative
					program for gifted writers focused on raising up the
					next C.S. Lewis and J.R.R. Tolkien. 100% of your purchase goes to help students
					attend
					writing conferences where they can pitch their work to gents and publishers.
				</p>
				<div class="pt-4">
					<button
						class="py-1 px-2 rounded-md bg-ej-green text-white hover:cursor-pointer hover:brightness-125">
						Order a Signed Copy
					</button>
				</div>
			</div>
		</div>
	</div>
</div> -->

<?php get_footer(); ?>