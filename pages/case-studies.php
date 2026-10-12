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
                        <div class="relative rounded-xl overflow-hidden group border border-default-200 bg-white shadow-xs hover:shadow-md transition-all flex flex-col justify-between">
                            <a href="case-study?case=barbershop" class="absolute inset-0 z-10"></a>
                            <div class="overflow-hidden h-64">
                                <img src="images/case-studies/1.webp" class="object-cover size-full group-hover:scale-105 transition-all duration-300" alt="The Heritage Barber Co.">
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="py-1 px-2.5 text-xs font-semibold rounded bg-default-100 text-default-700">LP</span>
                                    <span class="text-xs font-semibold text-primary">🇸🇬 The Heritage Barber Co.</span>
                                </div>
                                <h3 class="text-xl font-semibold text-default-950 mb-2 leading-snug">Express booking landing page for barbershop</h3>
                                <p class="text-xs text-default-500 mb-4">Central Singapore • High-converting mobile landing page with instant WhatsApp reminders.</p>
                                <div class="pt-3 border-t border-default-100 flex items-center justify-between text-xs">
                                    <span class="font-bold text-primary">+185% Online Bookings</span>
                                    <span class="font-medium text-default-700 group-hover:text-primary transition-colors flex items-center gap-1">
                                        View Case <i class="iconify tabler--arrow-right size-3.5"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="relative rounded-xl overflow-hidden group border border-default-200 bg-white shadow-xs hover:shadow-md transition-all flex flex-col justify-between">
                            <a href="case-study?case=clinic" class="absolute inset-0 z-10"></a>
                            <div class="overflow-hidden h-64">
                                <img src="images/examples/clinic-1.png" class="object-cover size-full group-hover:scale-105 transition-all duration-300" alt="Lumina Aesthetic">
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="py-1 px-2.5 text-xs font-semibold rounded bg-default-100 text-default-700">LP</span>
                                    <span class="text-xs font-semibold text-primary">🇦🇺 Lumina Aesthetic Clinic</span>
                                </div>
                                <h3 class="text-xl font-semibold text-default-950 mb-2 leading-snug">Aesthetic clinic promotional campaign LP</h3>
                                <p class="text-xs text-default-500 mb-4">Melbourne & Sydney • Targeted treatment lead capture page with pre-consultation booking.</p>
                                <div class="pt-3 border-t border-default-100 flex items-center justify-between text-xs">
                                    <span class="font-bold text-primary">+240% Inquiries</span>
                                    <span class="font-medium text-default-700 group-hover:text-primary transition-colors flex items-center gap-1">
                                        View Case <i class="iconify tabler--arrow-right size-3.5"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="relative rounded-xl overflow-hidden group border border-default-200 bg-white shadow-xs hover:shadow-md transition-all flex flex-col justify-between">
                            <a href="case-study?case=salon" class="absolute inset-0 z-10"></a>
                            <div class="overflow-hidden h-64">
                                <img src="images/examples/salon-1.png" class="object-cover size-full group-hover:scale-105 transition-all duration-300" alt="Maison Privée">
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="py-1 px-2.5 text-xs font-semibold rounded bg-default-100 text-default-700">LP</span>
                                    <span class="text-xs font-semibold text-primary">🇸🇬 Maison Privée Salon</span>
                                </div>
                                <h3 class="text-xl font-semibold text-default-950 mb-2 leading-snug">High-converting lead page for wellness studio</h3>
                                <p class="text-xs text-default-500 mb-4">Orchard Road, SG • Promotional package funnel with deposit collection & stylist selection.</p>
                                <div class="pt-3 border-t border-default-100 flex items-center justify-between text-xs">
                                    <span class="font-bold text-primary">3.2x Rebookings</span>
                                    <span class="font-medium text-default-700 group-hover:text-primary transition-colors flex items-center gap-1">
                                        View Case <i class="iconify tabler--arrow-right size-3.5"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Collapsible Additional Projects -->
                    <div id="collapse-lp" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300">
                        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-7.5 pt-7.5">
                            <div class="relative rounded-xl overflow-hidden group border border-default-200 bg-white shadow-xs hover:shadow-md transition-all flex flex-col justify-between">
                                <a href="case-study?case=clinic" class="absolute inset-0 z-10"></a>
                                <div class="overflow-hidden h-64">
                                    <img src="images/examples/clinic-2.png" class="object-cover size-full group-hover:scale-105 transition-all duration-300" alt="Dental Care LP">
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center gap-2 mb-3">
                                        <span class="py-1 px-2.5 text-xs font-semibold rounded bg-default-100 text-default-700">LP</span>
                                        <span class="text-xs font-semibold text-primary">🇦🇺 Dental Care & Implants</span>
                                    </div>
                                    <h3 class="text-xl font-semibold text-default-950 mb-2 leading-snug">Dental care promotional offer landing page</h3>
                                    <p class="text-xs text-default-500 mb-4">Sydney, Australia • Direct dental assessment offer with instant calendar booking.</p>
                                    <div class="pt-3 border-t border-default-100 flex items-center justify-between text-xs">
                                        <span class="font-bold text-primary">+190% Leads</span>
                                        <span class="font-medium text-default-700 group-hover:text-primary transition-colors flex items-center gap-1">
                                            View Case <i class="iconify tabler--arrow-right size-3.5"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="relative rounded-xl overflow-hidden group border border-default-200 bg-white shadow-xs hover:shadow-md transition-all flex flex-col justify-between">
                                <a href="case-study?case=salon" class="absolute inset-0 z-10"></a>
                                <div class="overflow-hidden h-64">
                                    <img src="images/examples/salon-2.png" class="object-cover size-full group-hover:scale-105 transition-all duration-300" alt="Seasonal Spa LP">
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center gap-2 mb-3">
                                        <span class="py-1 px-2.5 text-xs font-semibold rounded bg-default-100 text-default-700">LP</span>
                                        <span class="text-xs font-semibold text-primary">🇸🇬 Botanical Spa Studio</span>
                                    </div>
                                    <h3 class="text-xl font-semibold text-default-950 mb-2 leading-snug">Seasonal spa package introductory landing page</h3>
                                    <p class="text-xs text-default-500 mb-4">Marina Bay, SG • Seasonal wellness treatment funnel with PayNow deposit collection.</p>
                                    <div class="pt-3 border-t border-default-100 flex items-center justify-between text-xs">
                                        <span class="font-bold text-primary">2.8x Conversions</span>
                                        <span class="font-medium text-default-700 group-hover:text-primary transition-colors flex items-center gap-1">
                                            View Case <i class="iconify tabler--arrow-right size-3.5"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="relative rounded-xl overflow-hidden group border border-default-200 bg-white shadow-xs hover:shadow-md transition-all flex flex-col justify-between">
                                <a href="case-study?case=fitness" class="absolute inset-0 z-10"></a>
                                <div class="overflow-hidden h-64">
                                    <img src="images/examples/fitness-1.png" class="object-cover size-full group-hover:scale-105 transition-all duration-300" alt="Physiotherapy & Fitness LP">
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center gap-2 mb-3">
                                        <span class="py-1 px-2.5 text-xs font-semibold rounded bg-default-100 text-default-700">LP</span>
                                        <span class="text-xs font-semibold text-primary">🇦🇺 Apex Fitness Studio</span>
                                    </div>
                                    <h3 class="text-xl font-semibold text-default-950 mb-2 leading-snug">Physiotherapy direct consultation lead page</h3>
                                    <p class="text-xs text-default-500 mb-4">Brisbane, AU • 2-step assessment trial booking funnel with automated SMS confirm.</p>
                                    <div class="pt-3 border-t border-default-100 flex items-center justify-between text-xs">
                                        <span class="font-bold text-primary">+140% Trial Pack</span>
                                        <span class="font-medium text-default-700 group-hover:text-primary transition-colors flex items-center gap-1">
                                            View Case <i class="iconify tabler--arrow-right size-3.5"></i>
                                        </span>
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
                        <div class="relative rounded-xl overflow-hidden group border border-default-200 bg-white shadow-xs hover:shadow-md transition-all flex flex-col justify-between">
                            <a href="case-study?case=clinic" class="absolute inset-0 z-10"></a>
                            <div class="overflow-hidden h-64">
                                <img src="images/case-studies/2.webp" class="object-cover size-full group-hover:scale-105 transition-all duration-300" alt="Lumina Aesthetic">
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="py-1 px-2.5 text-xs font-semibold rounded bg-default-100 text-default-700">Company</span>
                                    <span class="text-xs font-semibold text-primary">🇦🇺 Lumina Aesthetic Clinic</span>
                                </div>
                                <h3 class="text-xl font-semibold text-default-950 mb-2 leading-snug">Corporate website for dental & aesthetic group</h3>
                                <p class="text-xs text-default-500 mb-4">Melbourne & Sydney • Brand presence showcasing doctor credentials & treatment options.</p>
                                <div class="pt-3 border-t border-default-100 flex items-center justify-between text-xs">
                                    <span class="font-bold text-primary">100% Bespoke Design</span>
                                    <span class="font-medium text-default-700 group-hover:text-primary transition-colors flex items-center gap-1">
                                        View Case <i class="iconify tabler--arrow-right size-3.5"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="relative rounded-xl overflow-hidden group border border-default-200 bg-white shadow-xs hover:shadow-md transition-all flex flex-col justify-between">
                            <a href="case-study?case=barbershop" class="absolute inset-0 z-10"></a>
                            <div class="overflow-hidden h-64">
                                <img src="images/examples/barber-2.png" class="object-cover size-full group-hover:scale-105 transition-all duration-300" alt="The Heritage Barber Co.">
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="py-1 px-2.5 text-xs font-semibold rounded bg-default-100 text-default-700">Company</span>
                                    <span class="text-xs font-semibold text-primary">🇸🇬 The Heritage Barber Co.</span>
                                </div>
                                <h3 class="text-xl font-semibold text-default-950 mb-2 leading-snug">Multi-branch barbershop brand identity website</h3>
                                <p class="text-xs text-default-500 mb-4">Central Singapore • Multi-branch location maps, barber bios, and service pricing.</p>
                                <div class="pt-3 border-t border-default-100 flex items-center justify-between text-xs">
                                    <span class="font-bold text-primary">2 Central Branches</span>
                                    <span class="font-medium text-default-700 group-hover:text-primary transition-colors flex items-center gap-1">
                                        View Case <i class="iconify tabler--arrow-right size-3.5"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="relative rounded-xl overflow-hidden group border border-default-200 bg-white shadow-xs hover:shadow-md transition-all flex flex-col justify-between">
                            <a href="case-study?case=salon" class="absolute inset-0 z-10"></a>
                            <div class="overflow-hidden h-64">
                                <img src="images/examples/salon-2.png" class="object-cover size-full group-hover:scale-105 transition-all duration-300" alt="Maison Privée">
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="py-1 px-2.5 text-xs font-semibold rounded bg-default-100 text-default-700">Company</span>
                                    <span class="text-xs font-semibold text-primary">🇸🇬 Maison Privée Studio</span>
                                </div>
                                <h3 class="text-xl font-semibold text-default-950 mb-2 leading-snug">Medical aesthetics & salon corporate portal</h3>
                                <p class="text-xs text-default-500 mb-4">Orchard Road, SG • Luxury treatment galleries, stylist portfolios, and press mentions.</p>
                                <div class="pt-3 border-t border-default-100 flex items-center justify-between text-xs">
                                    <span class="font-bold text-primary">+62% Avg Ticket</span>
                                    <span class="font-medium text-default-700 group-hover:text-primary transition-colors flex items-center gap-1">
                                        View Case <i class="iconify tabler--arrow-right size-3.5"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Collapsible Additional Projects -->
                    <div id="collapse-company" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300">
                        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-7.5 pt-7.5">
                            <div class="relative rounded-lg overflow-hidden group">
                                <a href="case-study" class="absolute inset-0 z-10"></a>
                                <img src="images/examples/salon-3.png" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="Website Company Case Study">
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
                                <img src="images/examples/clinic-3.png" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="Website Company Case Study">
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
                                <img src="images/examples/personal-trainer-1.png" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="Website Company Case Study">
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
                        <div class="relative rounded-xl overflow-hidden group border border-default-200 bg-white shadow-xs hover:shadow-md transition-all flex flex-col justify-between">
                            <a href="case-study?case=barbershop" class="absolute inset-0 z-10"></a>
                            <div class="overflow-hidden h-64">
                                <img src="images/case-studies/3.webp" class="object-cover size-full group-hover:scale-105 transition-all duration-300" alt="The Heritage Barber Co.">
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="py-1 px-2.5 text-xs font-semibold rounded bg-default-100 text-default-700">Booking</span>
                                    <span class="text-xs font-semibold text-primary">🇸🇬 The Heritage Barber Co.</span>
                                </div>
                                <h3 class="text-xl font-semibold text-default-950 mb-2 leading-snug">24/7 barbershop chain appointment engine</h3>
                                <p class="text-xs text-default-500 mb-4">Central Singapore • Automated multi-barber calendar, WhatsApp reminders, PayNow deposit.</p>
                                <div class="pt-3 border-t border-default-100 flex items-center justify-between text-xs">
                                    <span class="font-bold text-primary">-45% No-Shows</span>
                                    <span class="font-medium text-default-700 group-hover:text-primary transition-colors flex items-center gap-1">
                                        View Case <i class="iconify tabler--arrow-right size-3.5"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="relative rounded-xl overflow-hidden group border border-default-200 bg-white shadow-xs hover:shadow-md transition-all flex flex-col justify-between">
                            <a href="case-study?case=clinic" class="absolute inset-0 z-10"></a>
                            <div class="overflow-hidden h-64">
                                <img src="images/examples/clinic-1.png" class="object-cover size-full group-hover:scale-105 transition-all duration-300" alt="Lumina Aesthetic">
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="py-1 px-2.5 text-xs font-semibold rounded bg-default-100 text-default-700">Booking</span>
                                    <span class="text-xs font-semibold text-primary">🇦🇺 Lumina Aesthetic</span>
                                </div>
                                <h3 class="text-xl font-semibold text-default-950 mb-2 leading-snug">Multi-doctor clinic booking & reminder system</h3>
                                <p class="text-xs text-default-500 mb-4">Melbourne & Sydney • Treatment-aware room logic, medical consent form, deposit hold.</p>
                                <div class="pt-3 border-t border-default-100 flex items-center justify-between text-xs">
                                    <span class="font-bold text-primary">98.8% Show-Up Rate</span>
                                    <span class="font-medium text-default-700 group-hover:text-primary transition-colors flex items-center gap-1">
                                        View Case <i class="iconify tabler--arrow-right size-3.5"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="relative rounded-xl overflow-hidden group border border-default-200 bg-white shadow-xs hover:shadow-md transition-all flex flex-col justify-between">
                            <a href="case-study?case=salon" class="absolute inset-0 z-10"></a>
                            <div class="overflow-hidden h-64">
                                <img src="images/examples/salon-1.png" class="object-cover size-full group-hover:scale-105 transition-all duration-300" alt="Maison Privée">
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="py-1 px-2.5 text-xs font-semibold rounded bg-default-100 text-default-700">Booking</span>
                                    <span class="text-xs font-semibold text-primary">🇸🇬 Maison Privée Studio</span>
                                </div>
                                <h3 class="text-xl font-semibold text-default-950 mb-2 leading-snug">Spa & salon deposit booking integration</h3>
                                <p class="text-xs text-default-500 mb-4">Orchard Road, SG • Split-interval processing time booking, tiered stylist pricing.</p>
                                <div class="pt-3 border-t border-default-100 flex items-center justify-between text-xs">
                                    <span class="font-bold text-primary">Zero Double-Bookings</span>
                                    <span class="font-medium text-default-700 group-hover:text-primary transition-colors flex items-center gap-1">
                                        View Case <i class="iconify tabler--arrow-right size-3.5"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Collapsible Additional Projects -->
                    <div id="collapse-booking" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300">
                        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-7.5 pt-7.5">
                            <div class="relative rounded-lg overflow-hidden group">
                                <a href="case-study" class="absolute inset-0 z-10"></a>
                                <img src="images/examples/barber-2.png" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="Web Book System Case Study">
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
                                <img src="images/examples/personal-trainer-2.png" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="Web Book System Case Study">
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
                                <img src="images/examples/fitness-2.png" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="Web Book System Case Study">
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
                        <div class="relative rounded-xl overflow-hidden group border border-default-200 bg-white shadow-xs hover:shadow-md transition-all flex flex-col justify-between">
                            <a href="case-study?case=barbershop" class="absolute inset-0 z-10"></a>
                            <div class="overflow-hidden h-64">
                                <img src="images/case-studies/4.webp" class="object-cover size-full group-hover:scale-105 transition-all duration-300" alt="The Heritage Barber Co.">
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="py-1 px-2.5 text-xs font-semibold rounded bg-default-100 text-default-700">System</span>
                                    <span class="text-xs font-semibold text-primary">🇸🇬 The Heritage Barber Co.</span>
                                </div>
                                <h3 class="text-xl font-semibold text-default-950 mb-2 leading-snug">Multi-branch staff roster & commission hub</h3>
                                <p class="text-xs text-default-500 mb-4">Central Singapore • Multi-chair management, automated staff commission calculation & shifts.</p>
                                <div class="pt-3 border-t border-default-100 flex items-center justify-between text-xs">
                                    <span class="font-bold text-primary">10+ hrs/wk Saved</span>
                                    <span class="font-medium text-default-700 group-hover:text-primary transition-colors flex items-center gap-1">
                                        View Case <i class="iconify tabler--arrow-right size-3.5"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="relative rounded-xl overflow-hidden group border border-default-200 bg-white shadow-xs hover:shadow-md transition-all flex flex-col justify-between">
                            <a href="case-study?case=clinic" class="absolute inset-0 z-10"></a>
                            <div class="overflow-hidden h-64">
                                <img src="images/examples/clinic-2.png" class="object-cover size-full group-hover:scale-105 transition-all duration-300" alt="Lumina Aesthetic">
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="py-1 px-2.5 text-xs font-semibold rounded bg-default-100 text-default-700">System</span>
                                    <span class="text-xs font-semibold text-primary">🇦🇺 Lumina Aesthetic Clinic</span>
                                </div>
                                <h3 class="text-xl font-semibold text-default-950 mb-2 leading-snug">Centralised clinic management & workflow platform</h3>
                                <p class="text-xs text-default-500 mb-4">Melbourne & Sydney • Treatment room capacity locking, digital medical records & consent forms.</p>
                                <div class="pt-3 border-t border-default-100 flex items-center justify-between text-xs">
                                    <span class="font-bold text-primary">12 hrs/wk Saved</span>
                                    <span class="font-medium text-default-700 group-hover:text-primary transition-colors flex items-center gap-1">
                                        View Case <i class="iconify tabler--arrow-right size-3.5"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="relative rounded-xl overflow-hidden group border border-default-200 bg-white shadow-xs hover:shadow-md transition-all flex flex-col justify-between">
                            <a href="case-study?case=fitness" class="absolute inset-0 z-10"></a>
                            <div class="overflow-hidden h-64">
                                <img src="images/examples/fitness-1.png" class="object-cover size-full group-hover:scale-105 transition-all duration-300" alt="Apex Performance">
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="py-1 px-2.5 text-xs font-semibold rounded bg-default-100 text-default-700">System</span>
                                    <span class="text-xs font-semibold text-primary">🇦🇺 Apex Performance Studio</span>
                                </div>
                                <h3 class="text-xl font-semibold text-default-950 mb-2 leading-snug">Trainer roster & session credit portal for fitness</h3>
                                <p class="text-xs text-default-500 mb-4">Brisbane • Private bay capacity lock, session pack deduction, automated trainer payouts.</p>
                                <div class="pt-3 border-t border-default-100 flex items-center justify-between text-xs">
                                    <span class="font-bold text-primary">15+ hrs/wk Saved</span>
                                    <span class="font-medium text-default-700 group-hover:text-primary transition-colors flex items-center gap-1">
                                        View Case <i class="iconify tabler--arrow-right size-3.5"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Collapsible Additional Projects -->
                    <div id="collapse-system" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300">
                        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-7.5 pt-7.5">
                            <div class="relative rounded-lg overflow-hidden group">
                                <a href="case-study" class="absolute inset-0 z-10"></a>
                                <img src="images/examples/barber-3.png" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="Web System Case Study">
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
                                <img src="images/examples/personal-trainer-3.png" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="Web System Case Study">
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
                                <img src="images/examples/fitness-3.png" class="rounded-lg object-cover w-full h-80 group-hover:scale-105 transition-all duration-300" alt="Web System Case Study">
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