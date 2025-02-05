<?php ?>
<!DOCTYPE html>
<html class="h-full antialiased dark" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title>
		<?php bloginfo('name'); ?> |
		<?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
	</title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>

</head>

<body <?php body_class("flex h-full bg-zinc-50 dark:bg-black");

?>>
	<div class="flex w-full">
		<div class="fixed inset-0 flex justify-center sm:px-8">
			<div class="flex w-full max-w-7xl lg:px-8">
				<div class="w-full bg-white ring-1 ring-zinc-100 dark:bg-zinc-900 dark:ring-zinc-300/20"></div>
			</div>
		</div>
		<div class="relative flex w-full flex-col">

			<header class="pointer-events-none relative z-50 flex flex-none flex-col"
				style="height:var(--header-height);margin-bottom:var(--header-mb)">
				<div class="order-last mt-[calc(--spacing(16)-(--spacing(3)))]"></div>
				<div class="sm:px-8 top-0 order-last -mb-3 pt-3" style="position: var(--header-position);">
					<div class="mx-auto w-full max-w-7xl lg:px-8">
						<div class="relative px-4 sm:px-8 lg:px-12">
							<div class="mx-auto max-w-2xl lg:max-w-5xl">
								<div class="top-(--avatar-top,--spacing(3)) w-full"
									style="position: var(--header-inner-position);">
									<div class="relative">
										<div class="absolute top-3 left-0 origin-left transition-opacity h-10 w-10 rounded-full bg-white/90 p-0.5 ring-1 shadow-lg shadow-zinc-800/5 ring-zinc-900/5 backdrop-blur-sm dark:bg-zinc-800/90 dark:ring-white/10"
											style="opacity: var(--avatar-border-opacity, 0); transform: var(--avatar-border-transform);">
										</div><a aria-label="Home"
											class="block h-16 w-16 origin-left pointer-events-auto" href="/"
											style="transform: var(--avatar-image-transform);"><img alt=""
												fetchpriority="high" width="512" height="512" decoding="async"
												data-nimg="1"
												class="rounded-full bg-zinc-100 object-cover dark:bg-zinc-800 h-16 w-16"
												sizes="4rem"
												srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar.51a13c67.jpg&amp;w=16&amp;q=75 16w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar.51a13c67.jpg&amp;w=32&amp;q=75 32w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar.51a13c67.jpg&amp;w=48&amp;q=75 48w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar.51a13c67.jpg&amp;w=64&amp;q=75 64w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar.51a13c67.jpg&amp;w=96&amp;q=75 96w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar.51a13c67.jpg&amp;w=128&amp;q=75 128w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar.51a13c67.jpg&amp;w=256&amp;q=75 256w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar.51a13c67.jpg&amp;w=384&amp;q=75 384w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar.51a13c67.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar.51a13c67.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar.51a13c67.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar.51a13c67.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar.51a13c67.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar.51a13c67.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar.51a13c67.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar.51a13c67.jpg&amp;w=3840&amp;q=75 3840w"
												src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar.51a13c67.jpg&amp;w=3840&amp;q=75"
												style="color: transparent;"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="top-0 z-10 h-16 pt-6" style="position:var(--header-position)">
					<div class="sm:px-8 top-(--header-top,--spacing(6)) w-full"
						style="position:var(--header-inner-position)">
						<div class="mx-auto w-full max-w-7xl lg:px-8">
							<div class="relative px-4 sm:px-8 lg:px-12">
								<div class="mx-auto max-w-2xl lg:max-w-5xl">
									<div class="relative flex gap-4">
										<div class="flex flex-1"></div>
										<div class="flex flex-1 justify-end md:justify-center">
											<div class="pointer-events-auto md:hidden" data-headlessui-state=""><button
													class="group flex items-center rounded-full bg-white/90 px-4 py-2 text-sm font-medium text-zinc-800 ring-1 shadow-lg shadow-zinc-800/5 ring-zinc-900/5 backdrop-blur-sm dark:bg-zinc-800/90 dark:text-zinc-200 dark:ring-white/10 dark:hover:ring-white/20"
													type="button" aria-expanded="false" data-headlessui-state=""
													id="headlessui-popover-button-:Rbmiqja:">Menu<svg viewBox="0 0 8 6"
														aria-hidden="true"
														class="ml-3 h-auto w-2 stroke-zinc-500 group-hover:stroke-zinc-700 dark:group-hover:stroke-zinc-400">
														<path d="M1.75 1.75 4 4.25l2.25-2.5" fill="none"
															stroke-width="1.5" stroke-linecap="round"
															stroke-linejoin="round"></path>
													</svg></button></div>
											<div hidden=""
												style="position:fixed;top:1px;left:1px;width:1px;height:0;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border-width:0;display:none">
											</div>
											<nav class="pointer-events-auto hidden md:block">
												<?php wp_nav_menu(array(
													'theme_location' => 'primary',
													'container' => 'ul',
													'menu_class' => 'flex rounded-full bg-white/90 px-3 text-sm font-medium text-zinc-800 ring-1 shadow-lg shadow-zinc-800/5 ring-zinc-900/5 backdrop-blur-sm dark:bg-zinc-800/90 dark:text-zinc-200 dark:ring-white/10',
													'add_li_class'=> 'relative block px-3 py-2 transition hover:text-teal-500 dark:hover:text-teal-400',
												)); ?>
												<ul
													class="flex rounded-full bg-white/90 px-3 text-sm font-medium text-zinc-800 ring-1 shadow-lg shadow-zinc-800/5 ring-zinc-900/5 backdrop-blur-sm dark:bg-zinc-800/90 dark:text-zinc-200 dark:ring-white/10">
													<li><a class="relative block px-3 py-2 transition hover:text-teal-500 dark:hover:text-teal-400"
															href="/about">About</a></li>
													<li><a class="relative block px-3 py-2 transition hover:text-teal-500 dark:hover:text-teal-400"
															href="/articles">Articles</a></li>
													<li><a class="relative block px-3 py-2 transition hover:text-teal-500 dark:hover:text-teal-400"
															href="/projects">Projects</a></li>
													<li><a class="relative block px-3 py-2 transition hover:text-teal-500 dark:hover:text-teal-400"
															href="/speaking">Speaking</a></li>
													<li><a class="relative block px-3 py-2 transition hover:text-teal-500 dark:hover:text-teal-400"
															href="/uses">Uses</a></li>
												</ul>
											</nav>
										</div>
										<div class="flex justify-end md:flex-1">
											<div class="pointer-events-auto"><button type="button"
													aria-label="Switch to light theme"
													class="group rounded-full bg-white/90 px-3 py-2 ring-1 shadow-lg shadow-zinc-800/5 ring-zinc-900/5 backdrop-blur-sm transition dark:bg-zinc-800/90 dark:ring-white/10 dark:hover:ring-white/20"><svg
														viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round"
														stroke-linejoin="round" aria-hidden="true"
														class="h-6 w-6 fill-zinc-100 stroke-zinc-500 transition group-hover:fill-zinc-200 group-hover:stroke-zinc-700 dark:hidden [@media(prefers-color-scheme:dark)]:fill-teal-50 [@media(prefers-color-scheme:dark)]:stroke-teal-500 [@media(prefers-color-scheme:dark)]:group-hover:fill-teal-50 [@media(prefers-color-scheme:dark)]:group-hover:stroke-teal-600">
														<path
															d="M8 12.25A4.25 4.25 0 0 1 12.25 8v0a4.25 4.25 0 0 1 4.25 4.25v0a4.25 4.25 0 0 1-4.25 4.25v0A4.25 4.25 0 0 1 8 12.25v0Z">
														</path>
														<path
															d="M12.25 3v1.5M21.5 12.25H20M18.791 18.791l-1.06-1.06M18.791 5.709l-1.06 1.06M12.25 20v1.5M4.5 12.25H3M6.77 6.77 5.709 5.709M6.77 17.73l-1.061 1.061"
															fill="none"></path>
													</svg><svg viewBox="0 0 24 24" aria-hidden="true"
														class="hidden h-6 w-6 fill-zinc-700 stroke-zinc-500 transition dark:block [@media_not_(prefers-color-scheme:dark)]:fill-teal-400/10 [@media_not_(prefers-color-scheme:dark)]:stroke-teal-500 [@media(prefers-color-scheme:dark)]:group-hover:stroke-zinc-400">
														<path
															d="M17.25 16.22a6.937 6.937 0 0 1-9.47-9.47 7.451 7.451 0 1 0 9.47 9.47ZM12.75 7C17 7 17 2.75 17 2.75S17 7 21.25 7C17 7 17 11.25 17 11.25S17 7 12.75 7Z"
															stroke-width="1.5" stroke-linecap="round"
															stroke-linejoin="round"></path>
													</svg></button></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<header id="masthead" class="site-header">
				<div class="container center">

					<nav class="site-navigation main-navigation">
					</nav>
				</div>
				<div class="center">

					<div id="brand">
						<h1 class="site-title">
							<a href="<?php echo esc_url(home_url('/')); // Link to the home page ?>"
								title="<?php echo esc_attr(get_bloginfo('name', 'display')); // Title it with the blog name ?>"
								rel="home"><?php bloginfo('name'); // Display the blog name ?></a>
						</h1>
						<h4 class="site-description">
							<?php bloginfo('description'); // Display the blog description, found in General Settings ?>
						</h4>
					</div><!-- /brand -->

					<div class="clear"></div>
				</div><!--/container -->

			</header><!-- #masthead .site-header -->

			<main class="main-fluid"><!-- start the page containter -->