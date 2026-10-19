<!-- Navbar -->
<?php
$navPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';
$navBlogActive = $navPath === '/blog' || $navPath === '/blog-details' || strpos($navPath, '/blog-details/') === 0;
$navBlogClass = $navBlogActive ? 'text-primary underline decoration-current' : '';
?>
<header class="sticky top-0 z-50 bg-body-bg transition-all duration-300">
    <div class="container">
        <div class="nav-sticky navbar md:py-6.5 py-5 flex items-center w-full justify-between relative">
            <a href="/" class="flex items-center">
                <img src="logo/logodophitam.webp" class="h-9.5 flex" alt="DOP logo" />
            </a>

            <div id="navbar" class="absolute left-[calc(50%+24px)] -translate-x-1/2 hidden lg:flex items-center justify-center transition-all duration-300">
                <a href="/" class="group flex items-center p-2.5 font-medium text-default-600 transition-all duration-300 hover:text-primary hover:decoration-current underline decoration-transparent underline-offset-3">
                    Home
                    <span class="iconify tabler--arrow-up-right ms-1.25 flex size-4 scale-0 bg-primary transition-all duration-300 group-hover:scale-100"></span>
                </a>

                <a href="about" class="group flex items-center p-2.5 font-medium text-default-600 transition-all duration-300 hover:text-primary hover:decoration-current underline decoration-transparent underline-offset-3">
                    About
                    <span class="iconify tabler--arrow-up-right ms-1.25 flex size-4 scale-0 bg-primary transition-all duration-300 group-hover:scale-100"></span>
                </a>

                <a href="case-studies" class="group flex items-center p-2.5 font-medium text-default-600 transition-all duration-300 hover:text-primary hover:decoration-current underline decoration-transparent underline-offset-3">
                    Case Studies
                    <span class="iconify tabler--arrow-up-right ms-1.25 flex size-4 scale-0 bg-primary transition-all duration-300 group-hover:scale-100"></span>
                </a>

                <a href="blog" class="group flex items-center p-2.5 font-medium text-default-600 transition-all duration-300 hover:text-primary hover:decoration-current underline decoration-transparent underline-offset-3 <?php echo $navBlogClass; ?>">
                    Blog
                    <span class="iconify tabler--arrow-up-right ms-1.25 flex size-4 scale-0 bg-primary transition-all duration-300 group-hover:scale-100"></span>
                </a>

                <!-- <div class="hs-dropdown relative inline-flex [--trigger:hover]">
                    <button type="button" class="hs-dropdown-toggle group flex items-center p-2.5 font-medium text-default-600 transition-all duration-300 hover:text-primary hover:decoration-current underline decoration-transparent underline-offset-3" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                        Pages
                        <i class="iconify tabler--chevron-down ms-3"></i>
                    </button>

                    <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 mt-2 top-2.5! hidden w-44 rounded-xl border border-default-100 bg-linear-to-b from-default-100/90 to-default-100 p-1 opacity-0 transition-[opacity,margin] duration-300 before:absolute before:inset-s-0 before:-top-6 before:h-6 before:w-full after:absolute after:inset-s-0 after:-bottom-6 after:h-6 after:w-full" role="menu" aria-orientation="vertical">
                        <div class="p-2.5 rounded-lg border border-default-200 bg-white">
                            <div class="space-y-1">
                                <a href="/" class="block rounded-sm px-3 py-2 text-sm font-semibold text-default-600 hover:bg-primary/6 hover:text-primary">Home </a>
                                <a href="about" class="block rounded-sm px-3 py-2 text-sm font-semibold text-default-600 hover:bg-primary/6 hover:text-primary">About</a>
                                <a href="service-detail" class="block rounded-sm px-3 py-2 text-sm font-semibold text-default-600 hover:bg-primary/6 hover:text-primary">Service Detail</a>
                                <a href="blog" class="block rounded-sm px-3 py-2 text-sm font-semibold text-default-600 hover:bg-primary/6 hover:text-primary">Blog</a>
                                <a href="blog-details" class="block rounded-sm px-3 py-2 text-sm font-semibold text-default-600 hover:bg-primary/6 hover:text-primary">Blog Details</a>
                                <a href="contact" class="block rounded-sm px-3 py-2 text-sm font-semibold text-default-600 hover:bg-primary/6 hover:text-primary">Contact</a>
                                <a href="error-404" class="block rounded-sm px-3 py-2 text-sm font-semibold text-default-600 hover:bg-primary/6 hover:text-primary">Error 404</a>
                                <a href="error-401" class="block rounded-sm px-3 py-2 text-sm font-semibold text-default-600 hover:bg-primary/6 hover:text-primary">Error 401</a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>

            <?php if (isset($title) && $title === 'Case Studies'): ?>
            <!-- Category Quick Jump Navigation on Navbar (Scrolled) -->
            <div id="navbar-case-studies" class="absolute left-[calc(50%+24px)] -translate-x-1/2 hidden lg:flex items-center justify-center opacity-0 pointer-events-none -translate-y-2 transition-all duration-300">
                <div class="inline-flex items-center gap-1.5 justify-center">
                    <a href="#lp" data-case-cat="lp" class="case-cat-btn py-1.5 px-3.5 text-xs font-medium text-default-700 hover:text-default-950 rounded-lg transition-all">
                        Landing Page
                    </a>
                    <a href="#company" data-case-cat="company" class="case-cat-btn py-1.5 px-3.5 text-xs font-medium text-default-700 hover:text-default-950 rounded-lg transition-all">
                        Website Company
                    </a>
                    <a href="#booking" data-case-cat="booking" class="case-cat-btn py-1.5 px-3.5 text-xs font-medium text-default-700 hover:text-default-950 rounded-lg transition-all">
                        Web Book System
                    </a>
                    <a href="#system" data-case-cat="system" class="case-cat-btn py-1.5 px-3.5 text-xs font-medium text-default-700 hover:text-default-950 rounded-lg transition-all">
                        Web System
                    </a>
                </div>
            </div>
            <?php endif; ?>

            <div class="flex items-center justify-end gap-4">
                <!-- <a href="tel:+1234567891" class="text-default-900 transition duration-300 hover:text-default-600 md:flex hidden">+123 456 7891</a> -->

                <div class="md:flex items-center hidden">
                    <a href="contact" class="group py-2.5 px-4.5 inline-flex items-center justify-center gap-5 rounded-lg bg-primary font-medium text-white transition-all">
                        <span class="relative block overflow-hidden">
                            <span class="block group-hover:-translate-y-7 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                Contact now
                            </span>
                            <span class="absolute top-7 inset-s-0 group-hover:top-0 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                Contact now
                            </span>
                        </span>
                    </a>
                </div>

                <div class="flex items-center lg:hidden">
                    <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="mobile-menu" data-hs-overlay="#mobile-menu" class="inline-flex size-10 items-center justify-center rounded-lg bg-primary text-white font-medium hover:bg-default-900 transition-all shadow-xs" aria-label="Toggle Navigation">
                        <i class="iconify tabler--menu-2 size-5.5"></i>
                    </button>
                </div>
            </div>
        </div>

        <?php if (isset($title) && $title === 'Case Studies'): ?>
        <!-- Mobile Adaptive Category Navigation -->
        <div id="navbar-case-studies-mobile" class="lg:hidden w-full overflow-hidden transition-all duration-300 max-h-0 opacity-0 -translate-y-2 pointer-events-none border-t border-transparent">
            <div class="py-2.5 overflow-x-auto no-scrollbar flex justify-start sm:justify-center">
                <div class="inline-flex items-center gap-1 whitespace-nowrap">
                    <a href="#lp" data-case-cat="lp" class="case-cat-btn py-1.5 px-3 text-xs font-medium text-default-700 hover:text-default-950 rounded-lg transition-all">
                        Landing Page
                    </a>
                    <a href="#company" data-case-cat="company" class="case-cat-btn py-1.5 px-3 text-xs font-medium text-default-700 hover:text-default-950 rounded-lg transition-all">
                        Website Company
                    </a>
                    <a href="#booking" data-case-cat="booking" class="case-cat-btn py-1.5 px-3 text-xs font-medium text-default-700 hover:text-default-950 rounded-lg transition-all">
                        Web Book System
                    </a>
                    <a href="#system" data-case-cat="system" class="case-cat-btn py-1.5 px-3 text-xs font-medium text-default-700 hover:text-default-950 rounded-lg transition-all">
                        Web System
                    </a>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</header>

<!-- Mobile Menu Offcanvas Drawer -->
<div id="mobile-menu" class="hs-overlay hs-overlay-open:translate-x-0 hidden translate-x-full fixed top-0 end-0 z-[80] h-full w-[85%] max-w-xs sm:max-w-sm bg-body-bg border-s border-default-200 shadow-2xl transition-all duration-300 transform flex flex-col" role="dialog" tabindex="-1" aria-labelledby="mobile-menu-label">
    <!-- Header with logo and close button -->
    <div class="flex items-center justify-between px-5 py-4 border-b border-default-200">
        <a href="/" class="flex items-center">
            <img src="logo/logodophitam.webp" class="h-8 flex" alt="DOP logo" />
        </a>
        <button type="button" class="inline-flex size-8 items-center justify-center rounded-lg border border-default-200 bg-default-50 text-default-600 hover:text-default-950 hover:bg-default-100 transition-colors" data-hs-overlay="#mobile-menu" aria-label="Close">
            <i class="iconify tabler--x size-4.5"></i>
        </button>
    </div>

    <!-- Scrollable Navigation -->
    <div class="flex-1 overflow-y-auto px-4 py-5 space-y-1">
        <div class="text-[11px] font-bold uppercase tracking-wider text-default-400 px-3 py-1 mb-1">
            Navigation
        </div>

        <a href="/" class="mobile-nav-link group flex items-center justify-between px-3.5 py-3 rounded-xl font-medium text-default-700 hover:bg-default-100 hover:text-default-950 transition-all">
            <span class="flex items-center gap-3">
                <span class="size-8.5 rounded-lg bg-default-100 text-default-700 group-hover:bg-primary/10 group-hover:text-primary flex items-center justify-center transition-colors">
                    <i class="iconify tabler--home size-4.5"></i>
                </span>
                <span class="text-sm">Home</span>
            </span>
            <i class="iconify tabler--chevron-right size-4 text-default-400 group-hover:text-default-950 transition-all"></i>
        </a>

        <a href="about" class="mobile-nav-link group flex items-center justify-between px-3.5 py-3 rounded-xl font-medium text-default-700 hover:bg-default-100 hover:text-default-950 transition-all">
            <span class="flex items-center gap-3">
                <span class="size-8.5 rounded-lg bg-default-100 text-default-700 group-hover:bg-primary/10 group-hover:text-primary flex items-center justify-center transition-colors">
                    <i class="iconify tabler--user-star size-4.5"></i>
                </span>
                <span class="text-sm">About</span>
            </span>
            <i class="iconify tabler--chevron-right size-4 text-default-400 group-hover:text-default-950 transition-all"></i>
        </a>

        <a href="case-studies" class="mobile-nav-link group flex items-center justify-between px-3.5 py-3 rounded-xl font-medium text-default-700 hover:bg-default-100 hover:text-default-950 transition-all">
            <span class="flex items-center gap-3">
                <span class="size-8.5 rounded-lg bg-default-100 text-default-700 group-hover:bg-primary/10 group-hover:text-primary flex items-center justify-center transition-colors">
                    <i class="iconify tabler--briefcase size-4.5"></i>
                </span>
                <span class="text-sm">Case Studies</span>
            </span>
            <i class="iconify tabler--chevron-right size-4 text-default-400 group-hover:text-default-950 transition-all"></i>
        </a>

        <a href="blog" class="mobile-nav-link group flex items-center justify-between px-3.5 py-3 rounded-xl font-medium text-default-700 hover:bg-default-100 hover:text-default-950 transition-all <?php echo $navBlogActive ? 'active' : ''; ?>">
            <span class="flex items-center gap-3">
                <span class="size-8.5 rounded-lg bg-default-100 text-default-700 group-hover:bg-primary/10 group-hover:text-primary flex items-center justify-center transition-colors">
                    <i class="iconify tabler--article size-4.5"></i>
                </span>
                <span class="text-sm">Blog</span>
            </span>
            <i class="iconify tabler--chevron-right size-4 text-default-400 group-hover:text-default-950 transition-all"></i>
        </a>

        <!-- Quick Live Demos -->
        <div class="pt-5 mt-4 border-t border-default-200">
            <div class="text-[11px] font-bold uppercase tracking-wider text-default-400 px-3 py-1 mb-2.5">
                Live Platform Demos
            </div>
            <div class="grid grid-cols-3 gap-2">
                <a href="https://barber.dopdev.com/" target="_blank" rel="noopener noreferrer" class="flex flex-col items-center justify-center p-2.5 rounded-xl border border-default-200 bg-white hover:border-primary hover:text-primary text-default-700 text-xs font-medium transition-all text-center group">
                    <i class="iconify tabler--cut size-4.5 mb-1.5 text-primary group-hover:scale-110 transition-transform"></i>
                    <span>Barber</span>
                </a>
                <a href="https://www.salon.dopdev.com/" target="_blank" rel="noopener noreferrer" class="flex flex-col items-center justify-center p-2.5 rounded-xl border border-default-200 bg-white hover:border-primary hover:text-primary text-default-700 text-xs font-medium transition-all text-center group">
                    <i class="iconify tabler--sparkles size-4.5 mb-1.5 text-primary group-hover:scale-110 transition-transform"></i>
                    <span>Salon</span>
                </a>
                <a href="https://clinic.dopdev.com/" target="_blank" rel="noopener noreferrer" class="flex flex-col items-center justify-center p-2.5 rounded-xl border border-default-200 bg-white hover:border-primary hover:text-primary text-default-700 text-xs font-medium transition-all text-center group">
                    <i class="iconify tabler--stethoscope size-4.5 mb-1.5 text-primary group-hover:scale-110 transition-transform"></i>
                    <span>Clinic</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Footer / Contact CTA -->
    <div class="p-5 border-t border-default-200 bg-default-50/70 space-y-3">
        <a href="contact" class="w-full py-3 px-4 inline-flex items-center justify-center gap-2 rounded-xl bg-primary text-white font-medium hover:bg-default-900 transition-all shadow-sm">
            <span>Contact Now</span>
            <i class="iconify tabler--arrow-up-right size-4.5"></i>
        </a>

        <div class="flex items-center justify-between text-xs text-default-500 pt-1">
            <a href="mailto:hello@dopdev.com" class="hover:text-primary transition-colors inline-flex items-center gap-1.5">
                <i class="iconify tabler--mail size-4"></i>
                <span>hello@dopdev.com</span>
            </a>
            <span class="text-[11px] text-default-400">Singapore • Global</span>
        </div>
    </div>
</div>