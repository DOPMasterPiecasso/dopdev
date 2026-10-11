<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = 'Case Studies'; include('partials/title-meta.php'); ?>

    <?php include('partials/head-css.php'); ?>
</head>

<body>

    <?php include('partials/navbar.php'); ?>

    <section class="relative size-full overflow-hidden md:py-14.5 py-10">
        <div class="container">
            <div class="mb-10 text-center">
                <h1 class="lg:text-[56px] md:text-5xl text-4xl mb-2.5">Our Case Studies</h1>
                <p class="text-default-600 max-w-2xl mx-auto text-base">Explore our portfolio of proven systems and real client results across Landing Pages, Company Websites, Booking Systems, and Custom Web Platforms.</p>
            </div>

            <!-- Category Quick Jump Navigation -->
            <div class="flex justify-center mb-16">
                <div class="bg-default-100 p-1.5 rounded-xl inline-flex flex-wrap gap-2 justify-center">
                    <a href="#lp" class="py-2 px-4 text-sm font-medium text-default-700 hover:bg-white hover:text-default-950 hover:shadow-sm rounded-lg transition-all">
                        Landing Page
                    </a>
                    <a href="#company" class="py-2 px-4 text-sm font-medium text-default-700 hover:bg-white hover:text-default-950 hover:shadow-sm rounded-lg transition-all">
                        Website Company
                    </a>
                    <a href="#booking" class="py-2 px-4 text-sm font-medium text-default-700 hover:bg-white hover:text-default-950 hover:shadow-sm rounded-lg transition-all">
                        Web Book System
                    </a>
                    <a href="#system" class="py-2 px-4 text-sm font-medium text-default-700 hover:bg-white hover:text-default-950 hover:shadow-sm rounded-lg transition-all">
                        Web System
                    </a>
                </div>
            </div>

            <!-- All 4 Category Sections -->
            <div class="space-y-20">

                <!-- Category 1: LP -->
                <div id="lp" class="scroll-mt-24">
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8 pb-5 border-b border-default-200">
                        <div class="max-w-2xl">
                            <h2 class="text-2xl md:text-3xl font-semibold text-default-950 mb-2">Landing Page</h2>
                            <p class="text-default-600 text-base leading-relaxed">
                                High-converting single-page websites engineered for marketing campaigns, direct customer acquisition, and service promotions with fast load speeds and frictionless calls to action.
                            </p>
                        </div>
                        <!-- <div class="shrink-0">
                            <button type="button" class="hs-collapse-toggle group py-2.5 px-5 inline-flex items-center gap-2 rounded-lg border border-default-200 hover:bg-default-100 text-default-800 text-sm font-medium transition-all" id="btn-lp" data-hs-collapse="#collapse-lp">
                                <span class="hs-collapse-open:hidden">Show Details</span>
                                <span class="hidden hs-collapse-open:inline-block">Show Less</span>
                                <i class="iconify tabler--chevron-down size-4 hs-collapse-open:rotate-180 transition-transform"></i>
                            </button>
                        </div> -->
                    </div>

                    <!-- Initial 3 Cards -->
                    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-7.5">
                        <div class="relative rounded-lg overflow-hidden group">
                            <a href="case-study" class="absolute inset-0 z-10"></a>
                            <img src="images/case-studies/1.webp" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="LP Case Study">
                            <div class="absolute bottom-0 m-5">
                                <div class="p-4 inline-flex rounded bg-white shadow-sm">
                                    <div class="space-y-2.5">
                                        <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                            LP
                                        </div>
                                        <h3 class="text-xl font-medium">Express booking landing page for barbershop</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="relative rounded-lg overflow-hidden group">
                            <a href="case-study" class="absolute inset-0 z-10"></a>
                            <img src="images/service/1.jpg" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="LP Case Study">
                            <div class="absolute bottom-0 m-5">
                                <div class="p-4 inline-flex rounded bg-white shadow-sm">
                                    <div class="space-y-2.5">
                                        <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                            LP
                                        </div>
                                        <h3 class="text-xl font-medium">Aesthetic clinic promotional campaign LP</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="relative rounded-lg overflow-hidden group">
                            <a href="case-study" class="absolute inset-0 z-10"></a>
                            <img src="images/other/case-study.webp" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="LP Case Study">
                            <div class="absolute bottom-0 m-5">
                                <div class="p-4 inline-flex rounded bg-white shadow-sm">
                                    <div class="space-y-2.5">
                                        <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                            LP
                                        </div>
                                        <h3 class="text-xl font-medium">High-converting lead page for wellness studio</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Collapsible Additional Projects -->
                    <div id="collapse-lp" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300">
                        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-7.5 pt-7.5">
                            <div class="relative rounded-lg overflow-hidden group">
                                <a href="case-study" class="absolute inset-0 z-10"></a>
                                <img src="images/service/6.jpg" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="LP Case Study">
                                <div class="absolute bottom-0 m-5">
                                    <div class="p-4 inline-flex rounded bg-white shadow-sm">
                                        <div class="space-y-2.5">
                                            <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                                LP
                                            </div>
                                            <h3 class="text-xl font-medium">Dental care promotional offer landing page</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="relative rounded-lg overflow-hidden group">
                                <a href="case-study" class="absolute inset-0 z-10"></a>
                                <img src="images/other/hero-image-1.jpg" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="LP Case Study">
                                <div class="absolute bottom-0 m-5">
                                    <div class="p-4 inline-flex rounded bg-white shadow-sm">
                                        <div class="space-y-2.5">
                                            <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                                LP
                                            </div>
                                            <h3 class="text-xl font-medium">Seasonal spa package introductory landing page</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="relative rounded-lg overflow-hidden group">
                                <a href="case-study" class="absolute inset-0 z-10"></a>
                                <img src="images/other/about-image-2.jpg" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="LP Case Study">
                                <div class="absolute bottom-0 m-5">
                                    <div class="p-4 inline-flex rounded bg-white shadow-sm">
                                        <div class="space-y-2.5">
                                            <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                                LP
                                            </div>
                                            <h3 class="text-xl font-medium">Physiotherapy direct consultation lead page</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 text-center">
                        <button type="button" class="hs-collapse-toggle group py-3 px-6 inline-flex items-center gap-2 rounded-lg bg-default-100 hover:bg-default-200 text-default-900 text-sm font-medium transition-all" data-hs-collapse="#collapse-lp">
                            <span class="hs-collapse-open:hidden">View All Landing Page Projects</span>
                            <span class="hidden hs-collapse-open:inline-block">Show Less</span>
                            <i class="iconify tabler--chevron-down size-4 hs-collapse-open:rotate-180 transition-transform"></i>
                        </button>
                    </div>
                </div>

                <!-- Category 2: Website Company -->
                <div id="company" class="scroll-mt-24">
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8 pb-5 border-b border-default-200">
                        <div class="max-w-2xl">
                            <h2 class="text-2xl md:text-3xl font-semibold text-default-950 mb-2">Website Company</h2>
                            <p class="text-default-600 text-base leading-relaxed">
                                Elegant, credible corporate company profile websites crafted to showcase brand identity, doctor and therapist teams, treatment catalogs, and multi-branch locations.
                            </p>
                        </div>
                        <!-- <div class="shrink-0">
                            <button type="button" class="hs-collapse-toggle group py-2.5 px-5 inline-flex items-center gap-2 rounded-lg border border-default-200 hover:bg-default-100 text-default-800 text-sm font-medium transition-all" id="btn-company" data-hs-collapse="#collapse-company">
                                <span class="hs-collapse-open:hidden">Show Details</span>
                                <span class="hidden hs-collapse-open:inline-block">Show Less</span>
                                <i class="iconify tabler--chevron-down size-4 hs-collapse-open:rotate-180 transition-transform"></i>
                            </button>
                        </div> -->
                    </div>

                    <!-- Initial 3 Cards -->
                    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-7.5">
                        <div class="relative rounded-lg overflow-hidden group">
                            <a href="case-study" class="absolute inset-0 z-10"></a>
                            <img src="images/case-studies/2.webp" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="Website Company Case Study">
                            <div class="absolute bottom-0 m-5">
                                <div class="p-4 inline-flex rounded bg-white shadow-sm">
                                    <div class="space-y-2.5">
                                        <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                            Website Company
                                        </div>
                                        <h3 class="text-xl font-medium">Corporate website for dental healthcare group</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="relative rounded-lg overflow-hidden group">
                            <a href="case-study" class="absolute inset-0 z-10"></a>
                            <img src="images/service/2.jpg" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="Website Company Case Study">
                            <div class="absolute bottom-0 m-5">
                                <div class="p-4 inline-flex rounded bg-white shadow-sm">
                                    <div class="space-y-2.5">
                                        <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                            Website Company
                                        </div>
                                        <h3 class="text-xl font-medium">Multi-branch barbershop brand identity website</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="relative rounded-lg overflow-hidden group">
                            <a href="case-study" class="absolute inset-0 z-10"></a>
                            <img src="images/other/about-image-1.jpg" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="Website Company Case Study">
                            <div class="absolute bottom-0 m-5">
                                <div class="p-4 inline-flex rounded bg-white shadow-sm">
                                    <div class="space-y-2.5">
                                        <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                            Website Company
                                        </div>
                                        <h3 class="text-xl font-medium">Medical aesthetics chain corporate portal</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Collapsible Additional Projects -->
                    <div id="collapse-company" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300">
                        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-7.5 pt-7.5">
                            <div class="relative rounded-lg overflow-hidden group">
                                <a href="case-study" class="absolute inset-0 z-10"></a>
                                <img src="images/other/hero-image-2.jpg" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="Website Company Case Study">
                                <div class="absolute bottom-0 m-5">
                                    <div class="p-4 inline-flex rounded bg-white shadow-sm">
                                        <div class="space-y-2.5">
                                            <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                                Website Company
                                            </div>
                                            <h3 class="text-xl font-medium">Premium salon group corporate identity website</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="relative rounded-lg overflow-hidden group">
                                <a href="case-study" class="absolute inset-0 z-10"></a>
                                <img src="images/other/about-image.jpg" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="Website Company Case Study">
                                <div class="absolute bottom-0 m-5">
                                    <div class="p-4 inline-flex rounded bg-white shadow-sm">
                                        <div class="space-y-2.5">
                                            <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                                Website Company
                                            </div>
                                            <h3 class="text-xl font-medium">Multi-specialist wellness clinic official portal</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="relative rounded-lg overflow-hidden group">
                                <a href="case-study" class="absolute inset-0 z-10"></a>
                                <img src="images/service/5.jpg" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="Website Company Case Study">
                                <div class="absolute bottom-0 m-5">
                                    <div class="p-4 inline-flex rounded bg-white shadow-sm">
                                        <div class="space-y-2.5">
                                            <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                                Website Company
                                            </div>
                                            <h3 class="text-xl font-medium">Health & beauty enterprise corporate showcase</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 text-center">
                        <button type="button" class="hs-collapse-toggle group py-3 px-6 inline-flex items-center gap-2 rounded-lg bg-default-100 hover:bg-default-200 text-default-900 text-sm font-medium transition-all" data-hs-collapse="#collapse-company">
                            <span class="hs-collapse-open:hidden">View All Website Company Projects</span>
                            <span class="hidden hs-collapse-open:inline-block">Show Less</span>
                            <i class="iconify tabler--chevron-down size-4 hs-collapse-open:rotate-180 transition-transform"></i>
                        </button>
                    </div>
                </div>

                <!-- Category 3: Web Book System -->
                <div id="booking" class="scroll-mt-24">
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8 pb-5 border-b border-default-200">
                        <div class="max-w-2xl">
                            <h2 class="text-2xl md:text-3xl font-semibold text-default-950 mb-2">Web Book System</h2>
                            <p class="text-default-600 text-base leading-relaxed">
                                Intelligent 24/7 online booking engines that allow clients to choose staff, branch, and services in real-time, backed by automated WhatsApp/SMS reminders and instant deposit payments.
                            </p>
                        </div>
                        <!-- <div class="shrink-0">
                            <button type="button" class="hs-collapse-toggle group py-2.5 px-5 inline-flex items-center gap-2 rounded-lg border border-default-200 hover:bg-default-100 text-default-800 text-sm font-medium transition-all" id="btn-booking" data-hs-collapse="#collapse-booking">
                                <span class="hs-collapse-open:hidden">Show Details</span>
                                <span class="hidden hs-collapse-open:inline-block">Show Less</span>
                                <i class="iconify tabler--chevron-down size-4 hs-collapse-open:rotate-180 transition-transform"></i>
                            </button>
                        </div> -->
                    </div>

                    <!-- Initial 3 Cards -->
                    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-7.5">
                        <div class="relative rounded-lg overflow-hidden group">
                            <a href="case-study" class="absolute inset-0 z-10"></a>
                            <img src="images/case-studies/3.webp" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="Web Book System Case Study">
                            <div class="absolute bottom-0 m-5">
                                <div class="p-4 inline-flex rounded bg-white shadow-sm">
                                    <div class="space-y-2.5">
                                        <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                            Web Book System
                                        </div>
                                        <h3 class="text-xl font-medium">24/7 barbershop chain appointment engine</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="relative rounded-lg overflow-hidden group">
                            <a href="case-study" class="absolute inset-0 z-10"></a>
                            <img src="images/service/3.jpg" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="Web Book System Case Study">
                            <div class="absolute bottom-0 m-5">
                                <div class="p-4 inline-flex rounded bg-white shadow-sm">
                                    <div class="space-y-2.5">
                                        <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                            Web Book System
                                        </div>
                                        <h3 class="text-xl font-medium">Multi-doctor clinic booking & reminder system</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="relative rounded-lg overflow-hidden group">
                            <a href="case-study" class="absolute inset-0 z-10"></a>
                            <img src="images/service/5.jpg" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="Web Book System Case Study">
                            <div class="absolute bottom-0 m-5">
                                <div class="p-4 inline-flex rounded bg-white shadow-sm">
                                    <div class="space-y-2.5">
                                        <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                            Web Book System
                                        </div>
                                        <h3 class="text-xl font-medium">Spa & salon deposit booking integration</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Collapsible Additional Projects -->
                    <div id="collapse-booking" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300">
                        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-7.5 pt-7.5">
                            <div class="relative rounded-lg overflow-hidden group">
                                <a href="case-study" class="absolute inset-0 z-10"></a>
                                <img src="images/service/1.jpg" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="Web Book System Case Study">
                                <div class="absolute bottom-0 m-5">
                                    <div class="p-4 inline-flex rounded bg-white shadow-sm">
                                        <div class="space-y-2.5">
                                            <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                                Web Book System
                                            </div>
                                            <h3 class="text-xl font-medium">Real-time calendar & therapist selection system</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="relative rounded-lg overflow-hidden group">
                                <a href="case-study" class="absolute inset-0 z-10"></a>
                                <img src="images/service/7.jpg" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="Web Book System Case Study">
                                <div class="absolute bottom-0 m-5">
                                    <div class="p-4 inline-flex rounded bg-white shadow-sm">
                                        <div class="space-y-2.5">
                                            <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                                Web Book System
                                            </div>
                                            <h3 class="text-xl font-medium">Automated WhatsApp slot confirmation platform</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="relative rounded-lg overflow-hidden group">
                                <a href="case-study" class="absolute inset-0 z-10"></a>
                                <img src="images/service/6.jpg" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="Web Book System Case Study">
                                <div class="absolute bottom-0 m-5">
                                    <div class="p-4 inline-flex rounded bg-white shadow-sm">
                                        <div class="space-y-2.5">
                                            <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                                Web Book System
                                            </div>
                                            <h3 class="text-xl font-medium">Integrated prepayment & cancellation protection engine</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 text-center">
                        <button type="button" class="hs-collapse-toggle group py-3 px-6 inline-flex items-center gap-2 rounded-lg bg-default-100 hover:bg-default-200 text-default-900 text-sm font-medium transition-all" data-hs-collapse="#collapse-booking">
                            <span class="hs-collapse-open:hidden">View All Web Book System Projects</span>
                            <span class="hidden hs-collapse-open:inline-block">Show Less</span>
                            <i class="iconify tabler--chevron-down size-4 hs-collapse-open:rotate-180 transition-transform"></i>
                        </button>
                    </div>
                </div>

                <!-- Category 4: Web System -->
                <div id="system" class="scroll-mt-24">
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8 pb-5 border-b border-default-200">
                        <div class="max-w-2xl">
                            <h2 class="text-2xl md:text-3xl font-semibold text-default-950 mb-2">Web System</h2>
                            <p class="text-default-600 text-base leading-relaxed">
                                Robust internal dashboards and management platforms for multi-branch operations, therapist commission calculating, staff rostering, and executive business analytics.
                            </p>
                        </div>
                        <!-- <div class="shrink-0">
                            <button type="button" class="hs-collapse-toggle group py-2.5 px-5 inline-flex items-center gap-2 rounded-lg border border-default-200 hover:bg-default-100 text-default-800 text-sm font-medium transition-all" id="btn-system" data-hs-collapse="#collapse-system">
                                <span class="hs-collapse-open:hidden">Show Details</span>
                                <span class="hidden hs-collapse-open:inline-block">Show Less</span>
                                <i class="iconify tabler--chevron-down size-4 hs-collapse-open:rotate-180 transition-transform"></i>
                            </button>
                        </div> -->
                    </div>

                    <!-- Initial 3 Cards -->
                    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-7.5">
                        <div class="relative rounded-lg overflow-hidden group">
                            <a href="case-study" class="absolute inset-0 z-10"></a>
                            <img src="images/case-studies/4.webp" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="Web System Case Study">
                            <div class="absolute bottom-0 m-5">
                                <div class="p-4 inline-flex rounded bg-white shadow-sm">
                                    <div class="space-y-2.5">
                                        <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                            Web System
                                        </div>
                                        <h3 class="text-xl font-medium">Multi-branch staff roster & commission hub</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="relative rounded-lg overflow-hidden group">
                            <a href="case-study" class="absolute inset-0 z-10"></a>
                            <img src="images/service/4.jpg" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="Web System Case Study">
                            <div class="absolute bottom-0 m-5">
                                <div class="p-4 inline-flex rounded bg-white shadow-sm">
                                    <div class="space-y-2.5">
                                        <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                            Web System
                                        </div>
                                        <h3 class="text-xl font-medium">Centralised clinic management & workflow platform</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="relative rounded-lg overflow-hidden group">
                            <a href="case-study" class="absolute inset-0 z-10"></a>
                            <img src="images/service/7.jpg" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="Web System Case Study">
                            <div class="absolute bottom-0 m-5">
                                <div class="p-4 inline-flex rounded bg-white shadow-sm">
                                    <div class="space-y-2.5">
                                        <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                            Web System
                                        </div>
                                        <h3 class="text-xl font-medium">Automated operations & owner analytics dashboard</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Collapsible Additional Projects -->
                    <div id="collapse-system" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300">
                        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-7.5 pt-7.5">
                            <div class="relative rounded-lg overflow-hidden group">
                                <a href="case-study" class="absolute inset-0 z-10"></a>
                                <img src="images/service/8.jpg" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="Web System Case Study">
                                <div class="absolute bottom-0 m-5">
                                    <div class="p-4 inline-flex rounded bg-white shadow-sm">
                                        <div class="space-y-2.5">
                                            <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                                Web System
                                            </div>
                                            <h3 class="text-xl font-medium">Real-time therapist commission & payout calculator</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="relative rounded-lg overflow-hidden group">
                                <a href="case-study" class="absolute inset-0 z-10"></a>
                                <img src="images/service/2.jpg" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="Web System Case Study">
                                <div class="absolute bottom-0 m-5">
                                    <div class="p-4 inline-flex rounded bg-white shadow-sm">
                                        <div class="space-y-2.5">
                                            <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                                Web System
                                            </div>
                                            <h3 class="text-xl font-medium">Multi-outlet customer CRM & membership balance tracker</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="relative rounded-lg overflow-hidden group">
                                <a href="case-study" class="absolute inset-0 z-10"></a>
                                <img src="images/case-studies/2.webp" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="Web System Case Study">
                                <div class="absolute bottom-0 m-5">
                                    <div class="p-4 inline-flex rounded bg-white shadow-sm">
                                        <div class="space-y-2.5">
                                            <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                                Web System
                                            </div>
                                            <h3 class="text-xl font-medium">Multi-branch KPI & revenue performance dashboard</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 text-center">
                        <button type="button" class="hs-collapse-toggle group py-3 px-6 inline-flex items-center gap-2 rounded-lg bg-default-100 hover:bg-default-200 text-default-900 text-sm font-medium transition-all" data-hs-collapse="#collapse-system">
                            <span class="hs-collapse-open:hidden">View All Web System Projects</span>
                            <span class="hidden hs-collapse-open:inline-block">Show Less</span>
                            <i class="iconify tabler--chevron-down size-4 hs-collapse-open:rotate-180 transition-transform"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <?php include('partials/footer.php'); ?>

</body>

</html>