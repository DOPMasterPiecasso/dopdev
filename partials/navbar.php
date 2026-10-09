<!-- Navbar -->
<header class="sticky top-0 z-50 bg-body-bg transition-all duration-300">
    <div class="container">
        <div class="nav-sticky navbar md:py-6.5 py-5 flex items-center w-full justify-between">
            <a href="/" class="flex items-center">
                <img src="logo/logodophitam.webp" class="h-9.5 flex" alt="DOP logo" />
            </a>

            <div id="navbar" class="mx-auto hidden lg:flex items-center justify-center">
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

                <a href="blog" class="group flex items-center p-2.5 font-medium text-default-600 transition-all duration-300 hover:text-primary hover:decoration-current underline decoration-transparent underline-offset-3">
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
                    <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="mobile-menu" data-hs-overlay="#mobile-menu" class="inline-flex size-10 items-center justify-center rounded-md bg-primary text-white font-medium transition-all">
                        <i class="iconify tabler--align-right size-6"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="hs-overlay hs-overlay-open:translate-y-0 hs-overlay-open:opacity-100 opacity-0 hs-overlay-open:top-auto [--body-scroll:true] fixed inset-x-0 top-0 z-40 h-100 -translate-y-full transform transition-all duration-500 lg:hidden" role="dialog" tabindex="-1" aria-labelledby="mobile-menu-label">
        <div class="container">
            <div class="bg-body-bg shadow border border-default-200 rounded-lg mb-4">
                <div class="flex max-h-100 flex-col gap-1 divide-y divide-default-200 overflow-y-auto">
                    <a href="/" class="group flex items-center p-2.5 font-medium text-default-600 transition-all duration-300 hover:text-primary hover:decoration-current underline decoration-transparent underline-offset-3">
                        Home
                    </a>

                    <a href="about" class="group flex items-center p-2.5 font-medium text-default-600 transition-all duration-300 hover:text-primary hover:decoration-current underline decoration-transparent underline-offset-3">
                        About
                        <span class="iconify tabler--arrow-up-right ms-1.25 flex size-4 scale-0 bg-primary transition-all duration-300 group-hover:scale-100"></span>
                    </a>

                    <a href="case-studies" class="group flex items-center p-2.5 font-medium text-default-600 transition-all duration-300 hover:text-primary hover:decoration-current underline decoration-transparent underline-offset-3">
                        Case Studies
                        <span class="iconify tabler--arrow-up-right ms-1.25 flex size-4 scale-0 bg-primary transition-all duration-300 group-hover:scale-100"></span>
                    </a>

                    <a href="blog" class="group flex items-center p-2.5 font-medium text-default-600 transition-all duration-300 hover:text-primary hover:decoration-current underline decoration-transparent underline-offset-3">
                        Blog
                        <span class="iconify tabler--arrow-up-right ms-1.25 flex size-4 scale-0 bg-primary transition-all duration-300 group-hover:scale-100"></span>
                    </a>

                    <!-- <div class="hs-accordion">
                        <button type="button" class="hs-accordion-toggle group flex items-center p-2.5 font-medium text-default-600 transition-all duration-300 hover:text-primary hover:decoration-current underline decoration-transparent underline-offset-3" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            Pages
                            <i class="iconify tabler--chevron-down transition-all hs-accordion-active:rotate-180 ms-4"></i>
                        </button>

                        <div class="hs-accordion-content hidden w-full overflow-hidden ps-5 pb-4 transition-[height]">
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
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</header>