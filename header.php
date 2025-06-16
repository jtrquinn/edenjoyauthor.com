<?php ?>
<!DOCTYPE html>
<html class="h-full antialiased light" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title>
		<?php bloginfo('name'); ?> |
		<?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
	</title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class("flex h-full bg-ej-teal dark:bg-black"); ?>>

	<div class="w-full">

		<!-- background -->
		<div class="fixed inset-0 flex justify-center sm:px-8">
			<div class="flex w-full max-w-7xl lg:px-8">
				<div class="w-full bg-white ring-1 ring-zinc-100 dark:bg-zinc-900 dark:ring-zinc-300/20"></div>
			</div>
		</div>

		<div class="relative flex w-full flex-col">

			<header id="site-header"
				class="pointer-events-none z-50 flex flex-none flex-col fixed top-0 left-0 w-full transition-transform duration-300 ease-in-out"
				style="height:var(--header-height);margin-bottom:var(--header-mb)">
				<div class="top-0 z-10 h-16 pt-6" style="position:var(--header-position)">
					<div class="sm:px-8 top-(--header-top,--spacing(6)) w-full"
						style="position:var(--header-inner-position)">
						<div class="mx-auto w-full max-w-7xl lg:px-8">
							<div class="relative px-4 sm:px-8 lg:px-12">
								<div class="mx-auto max-w-2xl lg:max-w-5xl">
									<div class="relative flex gap-4">
										<div class="flex flex-1"></div>
										<div class="flex flex-1 justify-end md:justify-center">

											<!-- Mobile Menu Button -->
											<div class="pointer-events-auto md:hidden">
												<button id="mobile-menu-toggle"
													class="group flex items-center rounded-full bg-white/90 px-4 py-2 text-sm font-medium text-zinc-800 ring-1 shadow-lg shadow-zinc-800/5 ring-zinc-900/5 backdrop-blur-sm dark:bg-zinc-800/90 dark:text-zinc-200 dark:ring-white/10 dark:hover:ring-white/20"
													type="button" aria-expanded="false">
													Menu
													<svg viewBox="0 0 8 6" aria-hidden="true"
														class="ml-3 h-auto w-2 stroke-zinc-500 group-hover:stroke-zinc-700 dark:group-hover:stroke-zinc-400">
														<path d="M1.75 1.75 4 4.25l2.25-2.5" fill="none"
															stroke-width="1.5" stroke-linecap="round"
															stroke-linejoin="round"></path>
													</svg>
												</button>
											</div>

											<!-- Desktop Navigation -->
											<nav class="pointer-events-auto hidden md:block">
												<?php wp_nav_menu(array(
													'theme_location' => 'primary',
													'container' => 'ul',
													'menu_class' => 'flex rounded-full bg-white/90 px-3 text-sm font-medium text-zinc-800 ring-1 shadow-lg shadow-zinc-800/5 ring-zinc-900/5 backdrop-blur-sm dark:bg-zinc-800/90 dark:text-zinc-200 dark:ring-white/10',
													'add_li_class' => 'relative block px-3 py-2 transition hover:text-ej-teal dark:hover:text-ej-gold',
												)); ?>
											</nav>
										</div>
										<div class="flex justify-end md:flex-1">
											<div class="pointer-events-auto">
												<button id="themeSwitcher" type="button"
													aria-label="Switch to light theme"
													class="group rounded-full bg-white/90 px-3 py-2 ring-1 shadow-lg shadow-zinc-800/5 ring-zinc-900/5 backdrop-blur-sm transition dark:bg-zinc-800/90 dark:ring-white/10 dark:hover:ring-white/20 hover:cursor-pointer">
													<svg viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round"
														stroke-linejoin="round" aria-hidden="true"
														class="h-6 w-6 fill-zinc-100 stroke-zinc-500 transition group-hover:fill-zinc-200 group-hover:stroke-zinc-700 dark:hidden [@media(prefers-color-scheme:dark)]:fill-teal-50 [@media(prefers-color-scheme:dark)]:stroke-ej-gold [@media(prefers-color-scheme:dark)]:group-hover:fill-teal-50 [@media(prefers-color-scheme:dark)]:group-hover:stroke-ej-blue">
														<path
															d="M8 12.25A4.25 4.25 0 0 1 12.25 8v0a4.25 4.25 0 0 1 4.25 4.25v0a4.25 4.25 0 0 1-4.25 4.25v0A4.25 4.25 0 0 1 8 12.25v0Z">
														</path>
														<path
															d="M12.25 3v1.5M21.5 12.25H20M18.791 18.791l-1.06-1.06M18.791 5.709l-1.06 1.06M12.25 20v1.5M4.5 12.25H3M6.77 6.77 5.709 5.709M6.77 17.73l-1.061 1.061"
															fill="none"></path>
													</svg>
													<svg viewBox="0 0 24 24" aria-hidden="true"
														class="hidden h-6 w-6 fill-zinc-700 stroke-zinc-500 transition dark:block [@media_not_(prefers-color-scheme:dark)]:fill-teal-400/10 [@media_not_(prefers-color-scheme:dark)]:stroke-teal-500 [@media(prefers-color-scheme:dark)]:group-hover:stroke-zinc-400">
														<path
															d="M17.25 16.22a6.937 6.937 0 0 1-9.47-9.47 7.451 7.451 0 1 0 9.47 9.47ZM12.75 7C17 7 17 2.75 17 2.75S17 7 21.25 7C17 7 17 11.25 17 11.25S17 7 12.75 7Z"
															stroke-width="1.5" stroke-linecap="round"
															stroke-linejoin="round"></path>
													</svg>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Mobile Menu Container -->
				<div id="mobile-menu"
					class="pointer-events-auto md:hidden hidden bg-white dark:bg-zinc-800 p-4 shadow-lg mt-4">
					<?php wp_nav_menu(array(
						'theme_location' => 'primary',
						'container' => 'nav',
						'menu_class' => 'flex flex-col space-y-2 text-sm font-medium text-zinc-800 dark:text-zinc-200',
						'add_li_class' => 'block px-3 py-2 transition hover:text-ej-teal dark:hover:text-ej-gold',
					)); ?>
				</div>
			</header>

			<!-- <header>
				<div>
					<nav>
					</nav>
				</div>
				<div>
					<div>
						<h1>
							<a href="<?php echo esc_url(home_url('/')); ?>"
								title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"
								rel="home"><?php bloginfo('name'); ?>
							</a>
						</h1>
						<h4>
							<?php bloginfo('description'); ?>
						</h4>
					</div>
				</div>
			</header> -->

			<main class="pt-12 md:pt-6">