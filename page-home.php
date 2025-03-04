<?php get_header(); ?>


<div class="flex-auto">
	<div class="sm:px-8 mt-9">
		<div class="mx-auto w-full max-w-7xl lg:px-8">
			<div class="px-4 sm:px-8 lg:px-12">
				<div class="mx-auto max-w-2xl lg:max-w-5xl">
					<div class="max-w-2xl">

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
	</div>

	<div class="sm:px-8 sm:mt-24">
		<div class="mx-auto w-full max-w-7xlxl:px-8">
			<div class="relative px-4 sm:px-8 lg:px-12">
				<div class="mx-auto max-w-2xl lg:max-w-5xl">
					<div class="mx-auto grid max-w-xl grid-cols-1 gap-y-20 lg:max-w-none lg:grid-cols-2">
						<div class="space-y-10">
							<div class="rounded-2xl border border-zinc-100 p-6 dark:border-zinc-700/40">
								<div class="flex justify-center pb-4">
									<img src="http://localhost:8080/wp-content/uploads/2025/02/book-mock.png" alt=""
										class="h-[20rem] sm:h-[30rem]">
								</div>
								<div class="space-y-3">
									<h2 class="text-ej-green text-2xl font-bold">
										Voices of the Future:<br />
										Stories of Bravery & Belonging
									</h2>
									<h3 class="text-ej-gold text-lg fond-semibold italic">Featuring “Flan and a
										Flying Monkey” by Eden
										Joy
									</h3>
									<p class="text-zinc-800 dark:text-zinc-100">
										The fifth student showcase anthology from The Author Conservatory, a
										college-alternative program for gifted writers focused on raising up the
										next
										C.S. Lewis and J.R.R. Tolkien. 100% of your purchase goes to help students
										attend writing conferences where they can pitch their work to agents and
										publishers.
									</p>
								</div>
							</div>
							<form action="/thank-you"
								class="rounded-2xl border border-zinc-100 p-6 dark:border-zinc-700/40">
								<h2 class="flex text-sm font-semibold text-zinc-900 dark:text-zinc-100">
									<svg viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke-linecap="round"
										stroke-linejoin="round" aria-hidden="true" class="h-6 w-6 flex-none">
										<path
											d="M2.75 7.75a3 3 0 0 1 3-3h12.5a3 3 0 0 1 3 3v8.5a3 3 0 0 1-3 3H5.75a3 3 0 0 1-3-3v-8.5Z"
											class="fill-zinc-100 stroke-zinc-400 dark:fill-zinc-100/10 dark:stroke-zinc-500">
										</path>
										<path d="m4 6 6.024 5.479a2.915 2.915 0 0 0 3.952 0L20 6"
											class="stroke-zinc-400 dark:stroke-zinc-500">
										</path>
									</svg>
									<span class="ml-3">Stay up to date</span>
								</h2>
								<p class="mt-2 text-sm text-zinc-600 dark:text-zinc-400">
									Get notified when I publish something new, and unsubscribe at any time.
								</p>
								<div class="mt-6 flex"><input placeholder="Email address" aria-label="Email address"
										required=""
										class="min-w-0 flex-auto appearance-none rounded-md border border-zinc-900/10 bg-white px-3 py-[calc(--spacing(2)-1px)] shadow-md shadow-zinc-800/5 placeholder:text-zinc-400 focus:border-teal-500 focus:ring-4 focus:ring-teal-500/10 focus:outline-hidden sm:text-sm dark:border-zinc-700 dark:bg-zinc-700/[0.15] dark:text-zinc-200 dark:placeholder:text-zinc-500 dark:focus:border-teal-400 dark:focus:ring-teal-400/10"
										type="email">
									<button
										class="inline-flex items-center gap-2 justify-center rounded-md py-2 px-3 text-sm outline-offset-2 transition active:transition-none bg-zinc-800 font-semibold text-zinc-100 hover:bg-zinc-700 active:bg-zinc-800 active:text-zinc-100/70 dark:bg-zinc-700 dark:hover:bg-zinc-600 dark:active:bg-zinc-700 dark:active:text-zinc-100/70 ml-4 flex-none"
										type="submit">
										Join
									</button>
								</div>
							</form>
						</div>
						<div class="flex flex-col gap-16 lg:ps-8">
							<article class="group relative flex flex-col items-start">
								<h2 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
									<div
										class="absolute -inset-x-4 -inset-y-6 z-0 scale-95 bg-zinc-50 opacity-0 transition group-hover:scale-100 group-hover:opacity-100 sm:-inset-x-6 sm:rounded-2xl dark:bg-zinc-800/50">
									</div>
									<a href="/articles/crafting-a-design-system-for-a-multiplanetary-future">
										<span
											class="absolute -inset-x-4 -inset-y-6 z-20 sm:-inset-x-6 sm:rounded-2xl"></span>
										<span class="relative z-10">
											Death by Living: Life Is Meant to Be Spent
										</span>
									</a>
								</h2>
								<time
									class="relative z-10 order-first mb-3 flex items-center text-sm text-zinc-400 dark:text-zinc-500 pl-3.5"
									datetime="2023-12-04">
									<span class="absolute inset-y-0 left-0 flex items-center" aria-hidden="true">
										<span class="h-4 w-0.5 rounded-full bg-zinc-200 dark:bg-zinc-500"></span>
									</span>
									May 4, 2024
								</time>
								<p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400">
									Besides the Bible, this book might have the most impact on my worldview
								</p>
								<div aria-hidden="true"
									class="relative z-10 mt-4 flex items-center text-sm font-medium text-ej-green">
									Read Full Review
									<svg viewBox="0 0 16 16" fill="none" aria-hidden="true"
										class="ml-1 h-4 w-4 stroke-current">
										<path d="M6.75 5.75 9.25 8l-2.5 2.25" stroke-width="1.5" stroke-linecap="round"
											stroke-linejoin="round"></path>
									</svg>
								</div>
							</article>
							<article class="group relative flex flex-col items-start">
								<h2 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
									<div
										class="absolute -inset-x-4 -inset-y-6 z-0 scale-95 bg-zinc-50 opacity-0 transition group-hover:scale-100 group-hover:opacity-100 sm:-inset-x-6 sm:rounded-2xl dark:bg-zinc-800/50">
									</div>
									<a href="/articles/crafting-a-design-system-for-a-multiplanetary-future">
										<span
											class="absolute -inset-x-4 -inset-y-6 z-20 sm:-inset-x-6 sm:rounded-2xl"></span>
										<span class="relative z-10">
											Voices of the Future: Stories of Family and Fearlessness
										</span>
									</a>
								</h2>
								<time
									class="relative z-10 order-first mb-3 flex items-center text-sm text-zinc-400 dark:text-zinc-500 pl-3.5"
									datetime="2023-12-04">
									<span class="absolute inset-y-0 left-0 flex items-center" aria-hidden="true">
										<span class="h-4 w-0.5 rounded-full bg-zinc-200 dark:bg-zinc-500"></span>
									</span>
									January 14, 2024
								</time>
								<p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400">
									My favorite part of this book was the opening chapters about the Christian theology
									for
									productivity. Challies explains a brilliant and simple system for organization and
									productivity, but
									it's worth noting that this system won't work for everyone. Definitely read this
									book and take from
									it what's helpful for you. There are some great organizational principles that can
									be pulled out
									applied to anything even if you don't adopt the whole system. I also found the
									ending bonus section
									on managing email to be very helpful!
								</p>
								<div aria-hidden="true"
									class="relative z-10 mt-4 flex items-center text-sm font-medium text-ej-green">
									Read Full Review
									<svg viewBox="0 0 16 16" fill="none" aria-hidden="true"
										class="ml-1 h-4 w-4 stroke-current">
										<path d="M6.75 5.75 9.25 8l-2.5 2.25" stroke-width="1.5" stroke-linecap="round"
											stroke-linejoin="round"></path>
									</svg>
								</div>
							</article>
							<article class="group relative flex flex-col items-start">
								<h2 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
									<div
										class="absolute -inset-x-4 -inset-y-6 z-0 scale-95 bg-zinc-50 opacity-0 transition group-hover:scale-100 group-hover:opacity-100 sm:-inset-x-6 sm:rounded-2xl dark:bg-zinc-800/50">
									</div>
									<a href="/articles/crafting-a-design-system-for-a-multiplanetary-future">
										<span
											class="absolute -inset-x-4 -inset-y-6 z-20 sm:-inset-x-6 sm:rounded-2xl"></span>
										<span class="relative z-10">
											Voices of the Future: Stories of Family and Fearlessness
										</span>
									</a>
								</h2>
								<time
									class="relative z-10 order-first mb-3 flex items-center text-sm text-zinc-400 dark:text-zinc-500 pl-3.5"
									datetime="2023-12-04">
									<span class="absolute inset-y-0 left-0 flex items-center" aria-hidden="true">
										<span class="h-4 w-0.5 rounded-full bg-zinc-200 dark:bg-zinc-500"></span>
									</span>
									December 4, 2023
								</time>
								<p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400">
									So, so good! I binged read most of this in two days and loved every minute of it.
									&lt;3
								</p>
								<div aria-hidden="true"
									class="relative z-10 mt-4 flex items-center text-sm font-medium text-ej-green">
									Read Full Review
									<svg viewBox="0 0 16 16" fill="none" aria-hidden="true"
										class="ml-1 h-4 w-4 stroke-current">
										<path d="M6.75 5.75 9.25 8l-2.5 2.25" stroke-width="1.5" stroke-linecap="round"
											stroke-linejoin="round"></path>
									</svg>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<?php get_footer(); ?>