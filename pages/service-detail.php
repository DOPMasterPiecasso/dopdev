<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = 'Home'; include('partials/title-meta.php'); ?>

    <?php include('partials/head-css.php'); ?>
</head>

<body>

    <?php include('partials/navbar.php'); ?>

    <!-- Hero Section -->
    <section class="relative size-full overflow-hidden md:py-14.5 py-10">

        <div class="container">
            <div class="grid lg:grid-cols-5 gap-25">
                <div class="lg:col-span-3">
                    <div class="flex flex-col lg:gap-15 gap-7.5 h-full">
                        <div>
                            <h1 class="lg:text-[56px] md:text-5xl text-4xl text-default-950 mb-2.5">Business Strategy</h1>

                            <p>We help you define a clear strategic direction, align your goals, and build a resilient business model that's ready for tomorrow. Our business strategy services are designed to give you the foresight to anticipate change, the frameworks to manage complexity, and the confidence to act decisively.</p>

                            <div class="mt-11 inline-flex items-center lg:gap-7.5 md:gap-20 gap-4">
                                <a href="contact" class="group py-5 px-10 inline-flex items-center justify-center gap-5 rounded-lg bg-primary text-white font-medium transition-all">
                                    <span class="relative block overflow-hidden">
                                        <span class="block group-hover:-translate-y-7 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                            Get started now
                                        </span>
                                        <span class="absolute top-7 inset-s-0 group-hover:top-0 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                            Get started now
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="mt-auto">
                            <h2 class="mb-2.5 text-xl">What we offer</h2>

                            <div class="flex flex-wrap items-center gap-4">
                                <div class="py-2.5 px-4 rounded bg-default-100 text-default-950">Strategic planning</div>
                                <div class="py-2.5 px-4 rounded bg-default-100 text-default-950">Goal alignment</div>
                                <div class="py-2.5 px-4 rounded bg-default-100 text-default-950">Customized solutions</div>
                                <div class="py-2.5 px-4 rounded bg-default-100 text-default-950">Industry analysis</div>
                                <div class="py-2.5 px-4 rounded bg-default-100 text-default-950">Competitive landscape</div>
                                <div class="py-2.5 px-4 rounded bg-default-100 text-default-950">Business model innovation</div>
                                <div class="py-2.5 px-4 rounded bg-default-100 text-default-950">Long-term vision</div>
                                <div class="py-2.5 px-4 rounded bg-default-100 text-default-950">Risk and scenario planning</div>
                                <div class="py-2.5 px-4 rounded bg-default-100 text-default-950">Diversification strategy</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2">
                    <div class="hero-image-one-wrap">
                        <img class="size-full object-cover rounded-lg" src="images/service/1.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lg:py-27.5 md:py-25 py-15 bg-default-100">
        <div class="container">
            <div class="grid md:grid-cols-3 lg:gap-25 gap-7.5">
                <div>
                    <div class="size-full">
                        <img src="images/service/details-image.jpg" alt="Image" class="size-full object-cover rounded-lg">
                    </div>
                </div>

                <div class="md:col-span-2">
                    <div class="mb-10">
                        <h2 class="lg:text-5xl md:text-4xl text-3xl">Strategy isn't just a plan - it's the foundation of sustainable success.</h2>
                        <p>In a world of rapid disruption, shifting consumer behavior, and global competition, businesses that operate without a strategic compass risk falling behind. A well-crafted strategy provides clarity in chaos, focus in complexity, and direction in moments of uncertainty.</p>
                    </div>

                    <ul role="list" class="mb-10 list-disc list-inside space-y-2.5">
                        <li>Prioritize what matters most</li>
                        <li>Make smarter, data-driven decisions</li>
                        <li>Allocate resources efficiently and intentionally</li>
                        <li>Define a long-term vision grounded in reality</li>
                    </ul>

                    <a href="contact" class="group py-5 px-10 inline-flex items-center justify-center gap-5 rounded-lg bg-primary text-white font-medium transition-all">
                        <span class="relative block overflow-hidden">
                            <span class="block group-hover:-translate-y-7 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                Get started now
                            </span>
                            <span class="absolute top-7 inset-s-0 group-hover:top-0 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                Get started now
                            </span>
                        </span>
                    </a>
                </div>
            </div>

            <div class="lg:mt-15 md:mt-12.5 mt-7.5">
                <div class="grid lg:grid-cols-4 md:grid-cols-2 lg:gap-37.5 gap-10">
                    <div>
                        <h3 class="mb-2.5 text-xl">Discovery &amp; Audit</h3>
                        <p class="text-sm">Understand your business, culture, and current state</p>
                    </div>

                    <div>
                        <h3 class="mb-2.5 text-xl">Insight &amp; Analysis</h3>
                        <p class="text-sm">Market trends, internal diagnostics, and opportunity mapping</p>
                    </div>

                    <div>
                        <h3 class="mb-2.5 text-xl">Strategic Direction</h3>
                        <p class="text-sm">Define goals, value proposition, and differentiation</p>
                    </div>

                    <div>
                        <h3 class="mb-2.5 text-xl">Roadmap Creation</h3>
                        <p class="text-sm">Step-by-step execution plan with measurable milestones</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lg:py-27.5 md:py-25 py-15">
        <div class="container">

            <div class="flex flex-wrap justify-between gap-7.5 lg:mb-12.5 mb-7.5">
                <div>
                    <div class="mb-2 text-sm text-default-950">Pricing</div>

                    <h2 class="mb-2.5 lg:text-5xl md:text-4xl text-3xl">Choose your growth plan</h2>

                    <p class="lg:max-w-3/5">We offer flexible pricing models to fit businesses of all sizes - from startups to enterprises.</p>
                </div>

                <div class="text-end place-content-end">
                    <a href="contact" class="flex items-center gap-1 text-default-950 underline">
                        <div>Explore pricing</div>
                        <i class="iconify tabler--arrow-up-right"></i>
                    </a>
                </div>
            </div>

            <div class="grid lg:grid-cols-3 gap-7.5">
                <div>
                    <div class="border border-default-200 rounded-xl p-6 h-full flex flex-col gap-7.5">

                        <h2 class="mb-2.5 text-3xl">Start your free discovery call</h2>

                        <p class="mb-7.5">Ready to explore how our consulting solutions can help your business thrive?</p>

                        <div>
                            <a href="contact" class="group py-3 px-4.5 inline-flex items-center justify-center gap-5 rounded-lg bg-primary text-white font-medium transition-all">
                                <span class="relative block overflow-hidden">
                                    <span class="block group-hover:-translate-y-7 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                        Get started now
                                    </span>
                                    <span class="absolute top-7 inset-s-0 group-hover:top-0 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                        Get started now
                                    </span>
                                </span>
                            </a>
                        </div>

                        <div class="mt-auto flex items-center gap-4">
                            <div class="size-12.5 bg-default-100 rounded-full flex items-center justify-center">
                                <i class="iconify tabler--mail size-7"></i>
                            </div>

                            <div>
                                <h4 class="mb-1">Want to email us directly?</h4>
                                <a href="mailto:hello@example.com" class="text-sm text-default-500">hello@example.com</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2">
                    <div class="bg-default-100 p-5 rounded-lg">
                        <div class="flex mb-5">
                            <div class="bg-white rounded-lg transition p-1">
                                <div id="toggle-count" class="flex flex-wrap gap-1 justify-center" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                                    <label for="toggle-count-monthly" class="hs-tab-active:bg-default-100 cursor-pointer py-1.5 px-2.5 text-sm bg-white flex items-center rounded-md" aria-selected="true" data-hs-tab="#segment-1" aria-controls="monthly" role="tab">
                                        Monthly
                                        <input id="toggle-count-monthly" name="toggle-count" type="radio" class="hidden">
                                    </label>

                                    <label for="toggle-count-yearly" class="active hs-tab-active:bg-default-100 cursor-pointer py-1.5 px-2.5 text-sm bg-white flex items-center rounded-md" aria-selected="false" data-hs-tab="#segment-2" aria-controls="segment-2" role="tab">
                                        Yearly
                                        <input id="toggle-count-yearly" name="toggle-count" type="radio" class="hidden" checked>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="grid lg:grid-cols-2 gap-7.5">
                            <div class="p-6 rounded-lg bg-white flex flex-col">
                                <h3 class="text-xl mb-4">Pro plan</h3>

                                <hr class="my-6 border-default-200">

                                <div class="flex items-end mb-7.5">
                                    <h2 class="text-[26px] leading-none">
                                        <span>$</span>
                                        <span data-hs-toggle-count='{ "target": "#toggle-count", "min": 499, "max": 449 }'>449</span>
                                    </h2>
                                    <div>/month</div>
                                </div>

                                <a href="contact" class="group py-2.5 px-4.5 w-full inline-flex items-center justify-center gap-5 rounded-lg bg-primary font-medium text-white transition-all">
                                    <span class="relative block overflow-hidden">
                                        <span class="block group-hover:-translate-y-7 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                            Get Started
                                        </span>
                                        <span class="absolute top-7 inset-s-0 group-hover:top-0 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                            Get Started
                                        </span>
                                    </span>
                                </a>

                                <ul role="list" class="my-7.5 list-disc list-inside space-y-2.5">
                                    <li>Initial business assessment</li>
                                    <li>2 strategy sessions (1 hour each)</li>
                                    <li>Competitor &amp; Market overview</li>
                                    <li>Email support (up to 7 days post-session)</li>
                                </ul>

                                <p class="mt-auto py-1.5 px-2.5 rounded bg-default-100">Best for: Market entry and early scaling</p>
                            </div>

                            <div class="p-6 rounded-lg bg-white flex flex-col">
                                <h3 class="text-xl mb-4">Business plan</h3>

                                <hr class="my-6 border-default-200">

                                <div class="flex items-end mb-7.5">
                                    <h2 class="text-[26px] leading-none">
                                        <span>$</span>
                                        <span data-hs-toggle-count='{ "target": "#toggle-count", "min": 1499, "max": 1304 }'>1304</span>
                                    </h2>
                                    <div>/month</div>
                                </div>

                                <a href="contact" class="group py-2.5 px-4.5 w-full inline-flex items-center justify-center gap-5 rounded-lg bg-primary font-medium text-white transition-all">
                                    <span class="relative block overflow-hidden">
                                        <span class="block group-hover:-translate-y-7 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                            Schedule a free consultation
                                        </span>
                                        <span class="absolute top-7 inset-s-0 group-hover:top-0 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                            Schedule a free consultation
                                        </span>
                                    </span>
                                </a>

                                <ul role="list" class="my-7.5 list-disc list-inside space-y-2.5">
                                    <li>Everything in starter plan</li>
                                    <li>Monthly consulting (4 sessions/month)</li>
                                    <li>Dedicated business strategist</li>
                                    <li>Priority support via email &amp; chat</li>
                                    <li>Quarterly progress review</li>
                                </ul>

                                <p class="mt-auto py-1.5 px-2.5 rounded bg-default-100">Best for: Market entry and early scaling</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="lg:py-27.5 md:py-25 py-15">
        <div class="container max-w-315!">

            <div class="relative rounded-lg lg:p-17.5 p-10 bg-default-950">
                <div class="grid md:grid-cols-3 gap-10 items-center">

                    <!-- Left Author -->
                    <div class="flex flex-col items-start gap-5">

                        <img src="images/users/4.jpg" class="size-17.5 rounded-full object-cover" alt="avatar">

                        <div>
                            <h3 class="mb-1.5 text-2xl text-white">Amanda Lewis</h3>
                            <p class="text-default-400">Director of Strategy</p>
                        </div>

                        <img src="images/client/2-light.svg" class="h-6 opacity-80" alt="logo">
                    </div>


                    <!-- Review Text -->
                    <div class="md:col-span-2">

                        <p class="text-2xl text-white">
                            Within the first three months, we saw a 35% boost in our sales performance
                            and streamlined several underperforming areas of our operation.
                            Our company was growing fast, but our internal culture
                        </p>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="lg:py-27.5 md:py-25 py-15">
        <div class="container max-w-250!">

            <div class="mb-12.5 text-center">
                <div class="mb-2 text-sm text-default-950">FAQs</div>

                <h2 class="mb-2.5 lg:text-5xl md:text-4xl text-3xl">Frequently Asked Questions</h2>

                <p class="lg:max-w-3/4 mx-auto">We've compiled answers to the most common questions clients ask about our business strategy consulting.</p>
            </div>


            <div>

                <!-- FAQ 1 -->
                <div class="hs-accordion p-5 active">
                    <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
                        <h3 class="text-xl font-semibold">What types of businesses do you offer strategy consulting for?</h3>

                        <div class="relative size-4.5 flex items-center justify-center">
                            <i class="absolute h-4.5 w-0.5 bg-default-950 flex transition duration-500 hs-accordion-active:rotate-90"></i>
                            <i class="w-4.5 h-0.5 bg-default-950 flex"></i>
                        </div>
                    </button>

                    <div class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 text-start">
                        <p class="mt-5">
                            We provide strategy consulting for startups, small to mid-sized businesses, and large enterprises across various industriesincluding technology, healthcare, manufacturing, retail, and professional services. Whether you're scaling, pivoting, or entering new markets, we tailor solutions to your unique goals.
                        </p>
                    </div>
                </div>

                <hr class="my-5 border-default-200">


                <!-- FAQ 2 -->
                <div class="hs-accordion p-5">
                    <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
                        <h3 class="text-xl font-semibold">How long does a typical strategy engagement take?</h3>

                        <div class="relative size-4.5 flex items-center justify-center">
                            <i class="absolute h-4.5 w-0.5 bg-default-950 flex transition duration-500 hs-accordion-active:rotate-90"></i>
                            <i class="w-4.5 h-0.5 bg-default-950 flex"></i>
                        </div>
                    </button>

                    <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300 text-start">
                        <p class="mt-5">
                            Most of our strategy projects range between 4 to 12 weeks, depending on the scope and depth required. For long-term support, we also offer ongoing advisory retainers and quarterly planning sessions.
                        </p>
                    </div>
                </div>

                <hr class="my-5 border-default-200">

                <!-- FAQ 3 -->
                <div class="hs-accordion p-5">
                    <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
                        <h3 class="text-xl font-semibold">Do you help with implementation or just strategy planning?</h3>

                        <div class="relative size-4.5 flex items-center justify-center">
                            <i class="absolute h-4.5 w-0.5 bg-default-950 flex transition duration-500 hs-accordion-active:rotate-90"></i>
                            <i class="w-4.5 h-0.5 bg-default-950 flex"></i>
                        </div>
                    </button>

                    <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300 text-start">
                        <p class="mt-5">
                            We do both. While we specialize in strategy planning, we also support implementation to ensure your vision turns into results. From execution roadmaps to hands-on project support, we're with you every step of the way.
                        </p>
                    </div>
                </div>

                <hr class="my-5 border-default-200">

                <!-- FAQ 4 -->
                <div class="hs-accordion p-5">
                    <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
                        <h3 class="text-xl font-semibold">What's included in your strategic consulting package?</h3>

                        <div class="relative size-4.5 flex items-center justify-center">
                            <i class="absolute h-4.5 w-0.5 bg-default-950 flex transition duration-500 hs-accordion-active:rotate-90"></i>
                            <i class="w-4.5 h-0.5 bg-default-950 flex"></i>
                        </div>
                    </button>

                    <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300 text-start">
                        <p class="mt-5">
                            Our package includes business analysis, market research, goal setting, tailored growth strategies, and implementation supportall customized to your needs.
                        </p>
                    </div>
                </div>

            </div>


        </div>

    </section>


    <section class="lg:py-27.5 md:py-25 py-15">
        <div class="container">
            <h2 class="mb-12.5 lg:text-5xl md:text-4xl text-3xl">Other services</h2>

            <div class="grid lg:grid-cols-3 grid-cols-2 gap-7.5">
                <div class="relative rounded-lg overflow-hidden h-100 w-full group">
                    <a href="service-detail" class="absolute inset-0 z-1"></a>

                    <img src="images/service/2.jpg" alt="Image" class="size-full rounded-lg object-cover group-hover:scale-105 transition-all duration-300">

                    <div class="absolute bottom-5 inset-x-0 text-center">
                        <div class="text-default-950 py-2 px-4 inline-flex rounded bg-white">Process Optimization</div>
                    </div>
                </div>

                <div class="relative rounded-lg overflow-hidden h-100 w-full group">
                    <a href="service-detail" class="absolute inset-0 z-1"></a>
                    <img src="images/service/3.jpg" alt="Image" class="size-full rounded-lg object-cover group-hover:scale-105 transition-all duration-300">


                    <div class="absolute bottom-5 inset-x-0 text-center">
                        <div class="text-default-950 py-2 px-4 inline-flex rounded bg-white">Financial Advisory</div>
                    </div>
                </div>

                <div class="relative rounded-lg overflow-hidden h-100 w-full group">
                    <a href="service-detail" class="absolute inset-0 z-1"></a>
                    <img src="images/service/4.jpg" alt="Image" class="size-full rounded-lg object-cover group-hover:scale-105 transition-all duration-300">


                    <div class="absolute bottom-5 inset-x-0 text-center">
                        <div class="text-default-950 py-2 px-4 inline-flex rounded bg-white">Market Research</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="lg:py-27.5 md:py-25 py-15">
        <div class="container">
            <div class="text-center">

                <div class="mb-12.5 lg:w-3/5 mx-auto">
                    <h2 class="mb-2.5 lg:text-5xl md:text-4xl text-2xl">Take the first step toward smarter business decisions today</h2>
                    <p>Reach out and let's start a conversation that moves your business forward.</p>
                </div>

                <div class="inline-flex items-center gap-7.5">
                    <a href="contact" class="group py-5 px-10 inline-flex items-center justify-center rounded-lg bg-primary text-white font-medium transition-all">
                        <span class="relative block overflow-hidden">
                            <span class="block group-hover:-translate-y-7 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                Get started now
                            </span>
                            <span class="absolute top-7 inset-s-0 group-hover:top-0 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                Get started now
                            </span>
                        </span>
                    </a>

                    <a href="contact" class="flex items-center gap-1 text-default-950 underline">
                        <div>Contact sales</div>
                        <i class="iconify tabler--arrow-up-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php include('partials/footer.php'); ?>

</body>

</html>