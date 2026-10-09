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
            <div class="grid lg:grid-cols-2 lg:gap-25 md:gap-16 gap-7.5">
                <div class="flex flex-col lg:gap-15 gap-7.5 h-full">
                    <div>
                        <h1 class="lg:text-[56px] md:text-5xl text-4xl text-default-950 mb-2.5">Driving business growth through expert strategy</h1>

                        <p>Unlock your company's full potential with expert guidance, tailored solutions, and proven results from our seasoned consultants.</p>

                        <div class="mt-11 inline-flex items-center lg:gap-7.5 md:gap-20 gap-4">
                            <a href="contact" class="group py-5 px-10 inline-flex items-center justify-center gap-5 rounded-lg bg-primary text-white font-medium transition-all">
                                <span class="relative block overflow-hidden">
                                    <span class="block group-hover:-translate-y-7 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                        See all case studies
                                    </span>
                                    <span class="absolute top-7 inset-s-0 group-hover:top-0 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                        See all case studies
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="mt-auto flex items-end justify-between gap-2.5">
                        <div class="lg:w-3/4">
                            <div class="mb-2.5 text-default-700">Firm of the Year 2025</div>
                            <p class="text-primary">Helping businesses thrive by providing expert guidance in business planning.</p>
                        </div>

                        <div>
                            <div class="mb-1.5 text-default-950">Based in</div>

                            <div class="flex gap-2.5">
                                <div class="relative group">
                                    <img src="images/other/office-dubai.jpg" alt="Image" class="rounded">
                                    <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 absolute -bottom-2 inset-s-0 translate-y-full w-full text-center text-xs font-medium py-1 px-2.5 bg-default-100 rounded">Dubai</div>
                                </div>
                                <div class="relative group">
                                    <img src="images/other/office-paris.jpg" alt="Image" class="rounded">
                                    <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 absolute -bottom-2 inset-s-0 translate-y-full w-full text-center text-xs font-medium py-1 px-2.5 bg-default-100 rounded">Paris</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-2.5">
                    <div class="hero-image-one-wrap">
                        <img class="size-full object-cover rounded-lg" src="images/other/hero-image-1.jpg" alt="Image">
                    </div>

                    <div class="space-y-2.5">
                        <div class="bg-primary rounded-lg p-6">
                            <p class="mb-25 text-white">The consultants helped us shape a sustainable HR strategy that emphasized performance, retention, and employee well-being.</p>

                            <div class="flex items-center gap-4">
                                <img src="images/users/5.jpg" loading="lazy" alt="Image" class="size-11.5 rounded-full">

                                <div class="space-y-1.5">
                                    <div class="text-lg text-white">Sofia Grant</div>
                                    <div class="text-sm text-default-400">Director of Strategy</div>
                                </div>
                            </div>
                        </div>

                        <div class="relative overflow-hidden">
                            <img src="images/other/about-bg.jpg" alt="Image" class="rounded-lg object-cover">


                            <div class="absolute inset-0  m-7.5 text-center">
                                <div class="mb-2.5 text-default-950 py-3 px-4 rounded bg-white/50">Build a business growth</div>

                                <img src="images/other/hero-image-2.jpg" alt="Image" class="rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About company -->
    <section class="lg:py-27.5 md:py-25 py-15 bg-default-100">
        <div class="container lg:max-w-[70%]! mb-12.5">
            <p class="mb-12.5 md:text-xl text-lg text-center text-default-950 font-medium">Companies who rely on our expertise</p>

            <div class="flex flex-nowrap md:gap-16 gap-5 w-full overflow-hidden relative">
                <div class="w-25 z-10 absolute inset-0 end-auto bg-linear-to-tr from-default-100 from-18% to-transparent lg:flex hidden"></div>

                <div class="infinite-scroll-inverse inline-flex md:gap-16 gap-5">
                    <div class="inline-flex max-w-full md:min-w-32 min-w-20">
                        <img src="images/client/1.svg" alt="Logo" class="h-5 max-w-full">
                    </div>
                    <div class="inline-flex max-w-full md:min-w-32 min-w-20">
                        <img src="images/client/2.svg" alt="Logo" class="h-5 max-w-full">
                    </div>
                    <div class="inline-flex max-w-full md:min-w-32 min-w-20">
                        <img src="images/client/3.svg" alt="Logo" class="h-5 max-w-full">
                    </div>
                    <div class="inline-flex max-w-full md:min-w-32 min-w-20">
                        <img src="images/client/4.svg" alt="Logo" class="h-5 max-w-full">
                    </div>
                    <div class="inline-flex max-w-full md:min-w-32 min-w-20">
                        <img src="images/client/5.svg" alt="Logo" class="h-5 max-w-full">
                    </div>
                    <div class="inline-flex max-w-full md:min-w-32 min-w-20">
                        <img src="images/client/6.svg" alt="Logo" class="h-5 max-w-full">
                    </div>
                    <div class="inline-flex max-w-full md:min-w-32 min-w-20">
                        <img src="images/client/1.svg" alt="Logo" class="h-5 max-w-full">
                    </div>
                    <div class="inline-flex max-w-full md:min-w-32 min-w-20">
                        <img src="images/client/2.svg" alt="Logo" class="h-5 max-w-full">
                    </div>
                    <div class="inline-flex max-w-full md:min-w-32 min-w-20">
                        <img src="images/client/3.svg" alt="Logo" class="h-5 max-w-full">
                    </div>
                    <div class="inline-flex max-w-full md:min-w-32 min-w-20">
                        <img src="images/client/4.svg" alt="Logo" class="h-5 max-w-full">
                    </div>
                    <div class="inline-flex max-w-full md:min-w-32 min-w-20">
                        <img src="images/client/5.svg" alt="Logo" class="h-5 max-w-full">
                    </div>
                    <div class="inline-flex max-w-full md:min-w-32 min-w-20">
                        <img src="images/client/6.svg" alt="Logo" class="h-5 max-w-full">
                    </div>
                </div>

                <div class="infinite-scroll-inverse inline-flex md:gap-16 gap-5">
                    <div class="inline-flex max-w-full md:min-w-32 min-w-20">
                        <img src="images/client/1.svg" alt="Logo" class="h-5 max-w-full">
                    </div>
                    <div class="inline-flex max-w-full md:min-w-32 min-w-20">
                        <img src="images/client/2.svg" alt="Logo" class="h-5 max-w-full">
                    </div>
                    <div class="inline-flex max-w-full md:min-w-32 min-w-20">
                        <img src="images/client/3.svg" alt="Logo" class="h-5 max-w-full">
                    </div>
                    <div class="inline-flex max-w-full md:min-w-32 min-w-20">
                        <img src="images/client/4.svg" alt="Logo" class="h-5 max-w-full">
                    </div>
                    <div class="inline-flex max-w-full md:min-w-32 min-w-20">
                        <img src="images/client/5.svg" alt="Logo" class="h-5 max-w-full">
                    </div>
                    <div class="inline-flex max-w-full md:min-w-32 min-w-20">
                        <img src="images/client/6.svg" alt="Logo" class="h-5 max-w-full">
                    </div>
                    <div class="inline-flex max-w-full md:min-w-32 min-w-20">
                        <img src="images/client/1.svg" alt="Logo" class="h-5 max-w-full">
                    </div>
                    <div class="inline-flex max-w-full md:min-w-32 min-w-20">
                        <img src="images/client/2.svg" alt="Logo" class="h-5 max-w-full">
                    </div>
                    <div class="inline-flex max-w-full md:min-w-32 min-w-20">
                        <img src="images/client/3.svg" alt="Logo" class="h-5 max-w-full">
                    </div>
                    <div class="inline-flex max-w-full md:min-w-32 min-w-20">
                        <img src="images/client/4.svg" alt="Logo" class="h-5 max-w-full">
                    </div>
                    <div class="inline-flex max-w-full md:min-w-32 min-w-20">
                        <img src="images/client/5.svg" alt="Logo" class="h-5 max-w-full">
                    </div>
                    <div class="inline-flex max-w-full md:min-w-32 min-w-20">
                        <img src="images/client/6.svg" alt="Logo" class="h-5 max-w-full">
                    </div>
                </div>

                <div class="w-25 z-10 absolute inset-0 start-auto bg-linear-to-l from-default-100 from-18% to-transparent lg:flex hidden"></div>
            </div>
        </div>

        <div class="container">
            <div class="text-center">
                <div class="lg:mb-25 mb-15">
                    <div class="inline-flex flex-wrap md:gap-2.5 gap-1 justify-center md:py-1.25 md:px-4 p-2 bg-white text-default-950 md:rounded-full rounded md:text-sm text-xs shadow">
                        <span>Strategy</span>

                        <img src="images/other/emoji-1.svg" alt="Icon" class="decorative-icon">

                        <span>We help businesses grow, adapt, and lead.</span>

                        <img src="images/other/emoji-2.svg" alt="Icon" class="decorative-icon">

                        <span>Growth</span>
                    </div>
                </div>

                <div class="lg:mb-12.5 mb-15">
                    <div class="mb-2 text-sm text-default-950">What we offer</div>

                    <h2 class="mb-2.5 lg:text-5xl md:text-4xl text-3xl">Our core consulting services</h2>

                    <p class="mx-auto lg:max-w-2/5">We provide tailored consulting solutions to help businesses overcome challenges, seize opportunities, and achieve sustainable growth.</p>
                </div>

                <div class="grid lg:grid-cols-4 md:grid-cols-2 md:gap-7.5 gap-2.5">
                    <div class="relative rounded-lg overflow-hidden group">
                        <a href="service-detail" class="absolute inset-0 z-1"></a>
                        <img src="images/service/1.jpg" alt="Image" class="rounded-lg object-cover group-hover:scale-105 transition-all duration-300">

                        <div class="absolute bottom-5 inset-x-0 text-center">
                            <div class="text-default-950 py-2 px-4 inline-flex rounded bg-white">Business strategy</div>
                        </div>
                    </div>

                    <div class="relative rounded-lg overflow-hidden group">
                        <a href="service-detail" class="absolute inset-0 z-1"></a>
                        <img src="images/service/2.jpg" alt="Image" class="rounded-lg object-cover group-hover:scale-105 transition-all duration-300">

                        <div class="absolute bottom-5 inset-x-0 text-center">
                            <div class="text-default-950 py-2 px-4 inline-flex rounded bg-white">Process optimization</div>
                        </div>
                    </div>

                    <div class="relative rounded-lg overflow-hidden group">
                        <a href="service-detail" class="absolute inset-0 z-1"></a>
                        <img src="images/service/3.jpg" alt="Image" class="rounded-lg object-cover group-hover:scale-105 transition-all duration-300">

                        <div class="absolute bottom-5 inset-x-0 text-center">
                            <div class="text-default-950 py-2 px-4 inline-flex rounded bg-white">Financial advisory</div>
                        </div>
                    </div>

                    <div class="relative rounded-lg overflow-hidden group">
                        <a href="service-detail" class="absolute inset-0 z-1"></a>
                        <img src="images/service/4.jpg" alt="Image" class="rounded-lg object-cover group-hover:scale-105 transition-all duration-300">

                        <div class="absolute bottom-5 inset-x-0 text-center">
                            <div class="text-default-950 py-2 px-4 inline-flex rounded bg-white">Marketing Research</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="lg:py-27.5 md:py-25 py-15">
        <div class="container">

            <div class="grid lg:grid-cols-3 md:grid-cols-2 lg:gap-50 gap-7.5">

                <!-- Item -->
                <div>
                    <span class="inline-block px-2.5 py-1 text-sm bg-default-100 rounded-md">
                        Business transformed
                    </span>

                    <div class="mt-4 flex items-start gap-4">
                        <h3 class="text-3xl">260+</h3>
                        <p>
                            Helping companies grow and perform better.
                        </p>
                    </div>
                </div>

                <!-- Item -->
                <div>
                    <span class="inline-block px-2.5 py-1 text-sm bg-default-100 rounded-md">
                        Client satisfaction rate
                    </span>

                    <div class="mt-4 flex items-start gap-4">
                        <h3 class="text-3xl">95%</h3>
                        <p>
                            Trusted and recommended by our clients.
                        </p>
                    </div>
                </div>

                <!-- Item -->
                <div>
                    <span class="inline-block px-2.5 py-1 text-sm bg-default-100 rounded-md">
                        Revenue growth generated
                    </span>

                    <div class="mt-4 flex items-start gap-4">
                        <h3 class="text-3xl">$150M</h3>
                        <p>
                            Delivering measurable financial impact.
                        </p>
                    </div>
                </div>

            </div>

            <hr class="lg:my-17.5 md:my-12.5 my-5 border-default-200">

            <div class="grid lg:grid-cols-2 gap-7.5">
                <div class="flex flex-col lg:gap-50 md:gap-25 gap-10 h-full">
                    <div>
                        <div class="text-sm text-default-950 mb-2.5">About Copora</div>

                        <h1 class="lg:text-5xl md:text-4xl text-3xl mb-2.5">Driven by insight. <br> Focused on results</h1>

                        <p class="text-default-600">We provide tailored consulting solutions to help businesses overcome challenges, seize opportunities, and achieve sustainable growth.</p>

                        <div class="mt-11 inline-flex items-center lg:gap-7.5 md:gap-20 gap-4">
                            <a href="contact" class="group py-5 px-10 inline-flex items-center justify-center gap-5 rounded-lg bg-primary text-white font-medium transition-all">
                                <span class="relative block overflow-hidden">
                                    <span class="block group-hover:-translate-y-7 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                        More about us
                                    </span>
                                    <span class="absolute top-7 inset-s-0 group-hover:top-0 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                        More about us
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="mt-auto">
                        <div class="relative w-[215px] h-[116px] overflow-hidden rounded-lg">
                            <video loop autoplay muted class="bg-[url('/videos/video-poster.jpg')] bg-cover bg-center flex object-cover rounded-lg w-full h-full absolute -inset-full m-auto -z-10">
                                <source src="/videos/video.mp4" type="video/mp4">
                                <source src="/videos/video.webm" type="video/webm">
                            </video>

                            <a href="https://www.youtube.com/embed/elgqxmdVms8?si=yYfzbunShGP15tde" data-toggle="video" class="absolute inset-0 bg-default-950/20 size-full text-center flex items-center justify-center">
                                <div class="text-white">Play Reel</div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="lg:h-full md:h-100 w-full">
                    <img src="images/other/about-image.jpg" alt="About image" class="size-full object-cover rounded-xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Process / How we work -->
    <section class="lg:py-27.5 md:py-25 py-15 bg-default-950">
        <div class="container max-w-315!">

            <div class="grid lg:grid-cols-7 gap-25">
                <div class="lg:col-span-3">
                    <div class="relative rounded-lg overflow-hidden lg:h-full md:h-100 size-full">

                        <a href="service-detail" class="absolute inset-0 z-1"></a>

                        <img src="images/other/work-step.jpg" alt="Image" class="rounded-lg size-full object-cover">

                        <div class="absolute bottom-5 inset-x-5 text-center">
                            <div class="text-default-950 py-2 px-4 inline-block rounded bg-white">Want to know what's possible? <a href="/contact-us" class="underline text-body-color">Get in touch now</a></div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4">
                    <div class="flex flex-col lg:gap-37.5 md:gap-25 gap-10">
                        <div>
                            <div class="text-sm text-white mb-2.5">How we work</div>

                            <h1 class="text-white lg:text-5xl md:text-4xl text-3xl mb-5">Smart steps to business growth</h1>

                            <p class="text-default-400">We follow a strategic four-step approach designed to drive measurable results. From deep discovery to ongoing optimization, every step is focused on moving your business forward with clarity, efficiency, and impact.</p>
                        </div>

                        <div class="mt-auto">
                            <!-- Tab Nav -->
                            <div class="Fborder-b border-default-800">
                                <nav class="flex flex-wrap justify-between md:gap-x-6 gap-3" role="tablist">

                                    <button type="button" class="hs-tab-active:text-white group relative md:py-5 py-2 px-1 inline-flex items-center gap-2 text-lg text-default-400 active" id="tab-understand" data-hs-tab="#tab-pane-understand" aria-controls="tab-pane-understand" role="tab">
                                        <span class="hs-tab-active:scale-100 mb-0.5 flex size-1.75 scale-0 bg-white rounded-full transition-all duration-300 group-hover:scale-100"></span>
                                        Understand
                                    </button>

                                    <button type="button" class="hs-tab-active:text-white group relative md:py-5 py-2 px-1 inline-flex items-center gap-2 text-lg text-default-400" id="tab-strategize" data-hs-tab="#tab-pane-strategize" aria-controls="tab-pane-strategize" role="tab">
                                        <span class="hs-tab-active:scale-100 mb-0.5 flex size-1.75 scale-0 bg-white rounded-full transition-all duration-300 group-hover:scale-100"></span>
                                        Strategize
                                    </button>

                                    <button type="button" class="hs-tab-active:text-white group relative md:py-5 py-2 px-1 inline-flex items-center gap-2 text-lg text-default-400" id="tab-execute" data-hs-tab="#tab-pane-execute" aria-controls="tab-pane-execute" role="tab">
                                        <span class="hs-tab-active:scale-100 mb-0.5 flex size-1.75 scale-0 bg-white rounded-full transition-all duration-300 group-hover:scale-100"></span>
                                        Execute
                                    </button>

                                    <button type="button" class="hs-tab-active:text-white group relative md:py-5 py-2 px-1 inline-flex items-center gap-2 text-lg text-default-400" id="tab-optimize" data-hs-tab="#tab-pane-optimize" aria-controls="tab-pane-optimize" role="tab">
                                        <span class="hs-tab-active:scale-100 mb-0.5 flex size-1.75 scale-0 bg-white rounded-full transition-all duration-300 group-hover:scale-100"></span>
                                        Optimize
                                    </button>
                                </nav>
                            </div>
                            <!-- End Tab Nav -->


                            <!-- Tab Content -->
                            <div class="mt-12.5">

                                <div id="tab-pane-understand" role="tabpanel" aria-labelledby="tab-understand">
                                    <p class="text-default-400">
                                        We begin by listening closely to your challenges and goals. Through research and deep business analysis, we uncover insights. This foundation shapes every strategy we build moving forward.
                                    </p>
                                </div>

                                <div id="tab-pane-strategize" class="hidden" role="tabpanel" aria-labelledby="tab-strategize">
                                    <p class="text-default-400">
                                        Strategize helps teams turn ideas into action with smart planning tools, real-time collaboration, and data-driven insights. Empowers growing businesses with tailored strategies to scale, compete, and thrive in fast-moving markets.
                                    </p>
                                </div>

                                <div id="tab-pane-execute" class="hidden" role="tabpanel" aria-labelledby="tab-execute">
                                    <p class="text-default-400">
                                        Execute streamlines team workflows so you can focus less on planning and more on progress. Execute helps dev teams ship code faster, safer, and smarter with streamlined CI/CD pipelines.
                                    </p>
                                </div>

                                <div id="tab-pane-optimize" class="hidden" role="tabpanel" aria-labelledby="tab-optimize">
                                    <p class="text-default-400">
                                        We're a results-driven agency helping brands grow through strategy, design, and digital innovation. A full-service marketing agency delivering bold ideas, data-backed strategies, and measurable growth.
                                    </p>
                                </div>

                            </div>
                            <!-- End Tab Content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case studies -->
    <section class="lg:py-27.5 md:py-25 py-15">
        <div class="container">

            <div class="mb-12.5">
                <div class="text-sm text-default-950 mb-2.5">Our case studies</div>

                <h1 class="lg:text-5xl md:text-4xl text-3xl mb-2.5">Futured case study</h1>

                <p class="text-default-600">Explore a selection of our featured case study to see how we've helped businesses overcome challenges and reach their full potential.</p>
            </div>

            <div class="relative rounded-lg overflow-hidden group">
                <a href="service-detail" class="absolute inset-0 z-1"></a>
                <img src="images/other/case-study.webp" alt="Image" class="rounded-lg object-cover group-hover:scale-105 transition-all duration-300">


                <div class="md:absolute bottom-7.5 inset-x-7.5 flex rounded bg-white p-4">
                    <div class="space-y-2.5">
                        <div class="py-1 px-1.5 inline-flex text-xs/none font-medium bg-default-100 rounded-md">Financial</div>
                        <h2 class="md:text-2xl text-xl">Market entry strategy for a fintech startup</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics -->
    <section>
        <div class="container">

            <div class="flex flex-wrap items-center justify-between gap-7.5">
                <div>
                    <div class="text-sm text-default-950">Recent case studies</div>
                </div>

                <div>
                    <a href="contact" class="flex items-center gap-1 text-default-950 underline">
                        <div>Let's work together</div>
                        <i class="iconify tabler--arrow-up-right"></i>
                    </a>
                </div>

            </div>

            <hr class="lg:my-12.5 md:my-10 my-4 border-default-200">

            <!-- 1 -->
            <div class="hs-accordion rounded-2xl">
                <button class="hs-accordion-toggle lg:py-12.5 md:py-10 py-4 w-full flex justify-between items-center gap-2.5 text-start">
                    <div class="space-y-2.5">
                        <div class="py-1.5 px-2.5 inline-flex text-sm/none font-medium border border-default-200 rounded-md">Healthcare</div>
                        <h3 class="md:text-3xl text-base">Digital transformation for a healthcare provider</h3>
                    </div>

                    <div class="relative size-4.5 flex items-center justify-center">
                        <i class="absolute h-4.5 w-0.5 bg-default-950 flex transition duration-500 hs-accordion-active:rotate-90"></i>
                        <i class="w-4.5 h-0.5 bg-default-950 flex"></i>
                    </div>
                </button>

                <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 text-start">
                    <div class="grid lg:grid-cols-7 gap-25 mb-12.5">
                        <div class="lg:col-span-3">
                            <div class="flex flex-col justify-between lg:gap-50 md:gap-25 gap-10">
                                <p class="text-default-600">
                                    A large healthcare network partnered with our team to digitize patient management systems, streamline appointment scheduling, and improve internal workflows.
                                </p>

                                <div class="mt-auto">
                                    <div class="flex items-center justify-between gap-2.5 p-2 ps-4 rounded-lg bg-default-100">
                                        <div class="flex gap-1.25">
                                            <div class="text-sm">Less time spent on manual tasks</div>
                                            <div class="font-medium text-default-950">50%</div>
                                        </div>

                                        <a href="contact" class="group py-3 px-4.5 inline-flex items-center justify-center rounded-lg bg-primary text-white font-medium transition-all">
                                            <span class="relative block overflow-hidden">
                                                <span class="block group-hover:-translate-y-7 duration-[1.125s]">See details</span>
                                                <span class="absolute top-7 inset-s-0 group-hover:top-0 duration-[1.125s]">See details</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-4">
                            <img src="images/case-studies/1.webp" class="size-full object-cover rounded-xl">
                        </div>
                    </div>
                </div>
            </div>

            <hr class="border-default-200">

            <!-- 2 -->
            <div class="hs-accordion rounded-2xl">
                <button class="hs-accordion-toggle lg:py-12.5 md:py-10 py-4 w-full flex justify-between items-center gap-2.5 text-start">
                    <div class="space-y-2.5">
                        <div class="py-1.5 px-2.5 inline-flex text-sm/none font-medium border border-default-200 rounded-md">Retail</div>
                        <h3 class="md:text-3xl text-base">International expansion strategy for a retail brand</h3>
                    </div>

                    <div class="relative size-4.5 flex items-center justify-center">
                        <i class="absolute h-4.5 w-0.5 bg-default-950 flex transition duration-500 hs-accordion-active:rotate-90"></i>
                        <i class="w-4.5 h-0.5 bg-default-950 flex"></i>
                    </div>
                </button>

                <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 text-start">
                    <div class="grid lg:grid-cols-7 gap-25 mb-12.5">
                        <div class="lg:col-span-3">
                            <div class="flex flex-col justify-between lg:gap-50 md:gap-25 gap-10">
                                <p class="text-default-600">
                                    A European retail brand collaborated with our consultants to expand into Middle Eastern and Southeast Asian markets using localized marketing strategies.
                                </p>

                                <div class="flex items-center justify-between p-2 ps-4 rounded-lg bg-default-100">
                                    <div class="flex gap-1.25">
                                        <div class="text-sm">Cut in operational admin load</div>
                                        <div class="font-medium text-default-950">30%</div>
                                    </div>

                                    <a href="contact" class="group py-3 px-4.5 rounded-lg bg-primary text-white font-medium">
                                        <span class="relative block overflow-hidden">
                                            <span class="block group-hover:-translate-y-7 duration-[1.125s]">See details</span>
                                            <span class="absolute top-7 inset-s-0 group-hover:top-0 duration-[1.125s]">See details</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-4">
                            <img src="images/case-studies/2.webp" class="size-full object-cover rounded-xl">
                        </div>
                    </div>
                </div>
            </div>

            <hr class="border-default-200">

            <!-- 3 -->
            <div class="hs-accordion rounded-2xl">
                <button class="hs-accordion-toggle lg:py-12.5 md:py-10 py-4 w-full flex justify-between items-center gap-2.5 text-start">
                    <div class="space-y-2.5">
                        <div class="py-1.5 px-2.5 inline-flex text-sm/none font-medium border border-default-200 rounded-md">Website Design</div>
                        <h3 class="md:text-3xl text-base">Corporate website for a green energy company</h3>
                    </div>

                    <div class="relative size-4.5 flex items-center justify-center">
                        <i class="absolute h-4.5 w-0.5 bg-default-950 flex transition duration-500 hs-accordion-active:rotate-90"></i>
                        <i class="w-4.5 h-0.5 bg-default-950 flex"></i>
                    </div>
                </button>

                <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 text-start">
                    <div class="grid lg:grid-cols-7 gap-25 mb-12.5">
                        <div class="lg:col-span-3">
                            <div class="flex flex-col justify-between lg:gap-50 md:gap-25 gap-10">
                                <p class="text-default-600">
                                    We designed and developed a modern website for a renewable energy consulting firm to showcase sustainability initiatives and global projects.
                                </p>

                                <div class="flex items-center justify-between p-2 ps-4 rounded-lg bg-default-100">
                                    <div class="flex gap-1.25">
                                        <div class="text-sm">Decrease in backend workload</div>
                                        <div class="font-medium text-default-950">37%</div>
                                    </div>

                                    <a href="contact" class="group py-3 px-4.5 rounded-lg bg-primary text-white font-medium">
                                        <span class="relative block overflow-hidden">
                                            <span class="block group-hover:-translate-y-7 duration-[1.125s]">See details</span>
                                            <span class="absolute top-7 inset-s-0 group-hover:top-0 duration-[1.125s]">See details</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-4">
                            <img src="images/case-studies/3.webp" class="size-full object-cover rounded-xl">
                        </div>
                    </div>
                </div>
            </div>

            <hr class="border-default-200">

            <!-- 4 -->
            <div class="hs-accordion rounded-2xl">
                <button class="hs-accordion-toggle lg:py-12.5 md:py-10 py-4 w-full flex justify-between items-center gap-2.5 text-start">
                    <div class="space-y-2.5">
                        <div class="py-1.5 px-2.5 inline-flex text-sm/none font-medium border border-default-200 rounded-md">SaaS Product</div>
                        <h3 class="md:text-3xl text-base">Product redesign for a SaaS analytics platform</h3>
                    </div>

                    <div class="relative size-4.5 flex items-center justify-center">
                        <i class="absolute h-4.5 w-0.5 bg-default-950 flex transition duration-500 hs-accordion-active:rotate-90"></i>
                        <i class="w-4.5 h-0.5 bg-default-950 flex"></i>
                    </div>
                </button>

                <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 text-start">
                    <div class="grid lg:grid-cols-7 gap-25 mb-12.5">
                        <div class="lg:col-span-3">
                            <div class="flex flex-col justify-between lg:gap-50 md:gap-25 gap-10">
                                <p class="text-default-600">
                                    Our team redesigned the user interface of a SaaS analytics platform to improve usability, performance, and real-time reporting capabilities.
                                </p>

                                <div class="flex items-center justify-between p-2 ps-4 rounded-lg bg-default-100">
                                    <div class="flex gap-1.25">
                                        <div class="text-sm">Increase in user engagement</div>
                                        <div class="font-medium text-default-950">42%</div>
                                    </div>

                                    <a href="contact" class="group py-3 px-4.5 rounded-lg bg-primary text-white font-medium">
                                        <span class="relative block overflow-hidden">
                                            <span class="block group-hover:-translate-y-7 duration-[1.125s]">See details</span>
                                            <span class="absolute top-7 inset-s-0 group-hover:top-0 duration-[1.125s]">See details</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-4">
                            <img src="images/case-studies/4.webp" class="size-full object-cover rounded-xl">
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid mt-7.5">
                <a href="case-studies" class="group py-5 px-10 inline-flex items-center justify-center gap-5 rounded-lg bg-primary text-white font-medium transition-all">
                    <span class="relative block overflow-hidden">
                        <span class="block group-hover:-translate-y-7 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                            View all case studies
                        </span>
                        <span class="absolute top-7 inset-s-0 group-hover:top-0 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                            View all case studies
                        </span>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="lg:py-27.5 md:py-25 py-15">
        <div class="container">

            <div class="mb-12.5 text-center">
                <div class="text-sm text-default-950 mb-2.5">Testimonials</div>

                <h1 class="lg:text-5xl md:text-4xl text-3xl mb-2.5">Proven impact, shared experiences</h1>

                <p class="text-default-600 lg:max-w-1/3 mx-auto mb-7.5">From startups to enterprises, our clients share how our strategic consulting helped them achieve lasting success.</p>

                <div class="inline-flex items-center gap-2">
                    <i class="iconify tabler--star-filled text-yellow-300 size-6"></i>
                    <i class="iconify tabler--star-filled text-yellow-300 size-6"></i>
                    <i class="iconify tabler--star-filled text-yellow-300 size-6"></i>
                    <i class="iconify tabler--star-filled text-yellow-300 size-6"></i>
                    <i class="iconify tabler--star-filled text-yellow-300 size-6"></i>
                    <div class="ms-2">450+ reviews</div>
                </div>
            </div>

            <div class="grid lg:grid-cols-10 md:grid-cols-2 gap-6">

                <!-- Left Card -->
                <div class="lg:col-span-3">
                    <div class="bg-default-950 rounded-xl p-8 h-full flex flex-col justify-between">

                        <div class="space-y-6">
                            <div>
                                <h4 class="mb-1.5 text-lg text-white">Amanda Lewis</h4>
                                <p class="text-sm text-default-400">Director of Strategy</p>
                            </div>

                            <p class="text-white">
                                Our company was growing fast, but our culture couldn’t keep pace.
                            </p>
                        </div>

                        <div class="flex flex-wrap justify-between gap-12 mt-10">
                            <div>
                                <h3 class="text-4xl text-white font-semibold">18%</h3>
                                <p class="text-default-100">Reduced costs</p>
                            </div>

                            <div>
                                <h3 class="text-4xl text-white font-semibold">50%</h3>
                                <p class="text-default-100">Boosting productivity</p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Center Video -->
                <div class="lg:col-span-4">
                    <div class="relative rounded-xl overflow-hidden">

                        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d" class="w-full h-full object-cover" alt="testimonial video">

                        <a href="https://www.youtube.com/embed/elgqxmdVms8?si=yYfzbunShGP15tde" data-toggle="video" class="absolute bottom-6 inset-s-1/2 -translate-x-1/2 bg-white px-4 py-2 rounded flex items-center gap-2 shadow">
                            <span class="font-medium">Watch a review</span>
                            <i class="iconify tabler--player-play-filled"></i>
                        </a>
                    </div>
                </div>


                <!-- Right Card -->
                <div class="lg:col-span-3 md:col-span-2">
                    <div class="border border-default-200 rounded-xl p-6 h-full flex flex-col justify-between">

                        <div class="flex items-center gap-3 mb-6">
                            <img src="images/users/4.jpg" class="size-12 rounded-full object-cover" alt="author">

                            <div>
                                <h4 class="font-medium mb-1">Amanda Lewis</h4>
                                <p class="text-sm text-default-500">Director of Strategy</p>
                            </div>
                        </div>

                        <p class="text-default-600 leading-relaxed">
                            Within the first three months, we saw a 35% boost in our sales
                            performance and streamlined several underperforming areas of our
                            operation.
                        </p>
                    </div>
                </div>

            </div>

            <div class="mt-12.5">
                <div class="flex items-center justify-between gap-2.5 p-2 md:ps-6 rounded-lg bg-default-100">
                    <div class="font-medium">Let's discuss your business goals - schedule your 20-minute consultation now.</div>

                    <a href="contact" class="group py-5 px-10 inline-flex text-nowrap items-center justify-center rounded-lg bg-white text-primary font-medium transition-all">
                        <span class="relative block overflow-hidden">
                            <span class="block group-hover:-translate-y-7 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                Let's talk
                            </span>
                            <span class="absolute top-7 inset-s-0 group-hover:top-0 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                Let's talk
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog / Insights -->
    <section class="lg:py-27.5 md:py-25 py-15 bg-default-100">
        <div class="container">
            <div class="flex flex-wrap justify-between gap-7.5 lg:mb-12.5 mb-15">
                <div>
                    <div class="mb-2 text-sm text-default-950">Our blog</div>

                    <h2 class="mb-2.5 lg:text-5xl md:text-4xl text-3xl">Insights & Ideas</h2>

                    <p class="lg:max-w-3/4">Our blog delivers fresh perspectives on business growth, innovation, leadership, and operational efficiency</p>
                </div>

                <div class="text-end place-content-end">
                    <a href="blog" class="group py-5 px-10 inline-flex items-center justify-center rounded-lg bg-primary text-white font-medium transition-all">
                        <span class="relative block overflow-hidden">
                            <span class="block group-hover:-translate-y-7 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                See all blog
                            </span>
                            <span class="absolute top-7 inset-s-0 group-hover:top-0 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                See all blog
                            </span>
                        </span>
                    </a>
                </div>
            </div>

            <div class="grid md:grid-cols-2 lg:gap-6 gap-2.5">

                <!-- Blog Item -->
                <a href="blog-details" class="grid lg:grid-cols-4 items-center lg:gap-4 gap-2.5 bg-white transition rounded-xl p-2 lg:pe-6 group">

                    <div class="overflow-hidden rounded-lg lg:h-full md:h-75 w-full">
                        <img src="images/blog/1.webp" class="size-full rounded-lg object-cover group-hover:scale-105 transition-all duration-300" alt="blog">
                    </div>

                    <div class="lg:col-span-3">
                        <div class="flex items-end justify-between gap-5 p-4">
                            <div>
                                <div class="flex items-center gap-3 text-default-500 mb-3">
                                    <span class="px-2 py-1 bg-default-100 rounded-md text-xs font-medium">Strategy</span>
                                    <span class="text-sm">June 20, 2025</span>
                                </div>

                                <h3 class="text-xl">Why your company needs a strategic roadmap in 2025</h3>
                            </div>

                            <div class="grow">
                                <i class="iconify tabler--arrow-narrow-right size-6 -rotate-45 group-hover:rotate-0 transition duration-300"></i>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Blog Item -->
                <a href="blog-details" class="grid lg:grid-cols-4 items-center lg:gap-4 gap-2.5 bg-white transition rounded-xl p-2 lg:pe-6 group">

                    <div class="overflow-hidden rounded-lg lg:h-full md:h-75 w-full">
                        <img src="images/blog/2.webp" class="size-full rounded-lg object-cover group-hover:scale-105 transition-all duration-300" alt="blog">
                    </div>

                    <div class="lg:col-span-3">
                        <div class="flex items-end justify-between gap-5 p-4">
                            <div>
                                <div class="flex items-center gap-3 text-default-500 mb-3">
                                    <span class="px-2 py-1 bg-default-100 rounded-md text-xs font-medium">Planning</span>
                                    <span class="text-sm">June 20, 2025</span>
                                </div>

                                <h3 class="text-xl">From goals to KPIs: Turning vision into measurable success</h3>
                            </div>

                            <div class="grow">
                                <i class="iconify tabler--arrow-narrow-right size-6 -rotate-45 group-hover:rotate-0 transition duration-300"></i>
                            </div>
                        </div>
                    </div>
                </a>


                <!-- Blog Item -->
                <a href="blog-details" class="grid lg:grid-cols-4 items-center lg:gap-4 gap-2.5 bg-white transition rounded-xl p-2 lg:pe-6 group">

                    <div class="overflow-hidden rounded-lg lg:h-full md:h-75 w-full">
                        <img src="images/blog/3.webp" class="size-full rounded-lg object-cover group-hover:scale-105 transition-all duration-300" alt="blog">
                    </div>

                    <div class="lg:col-span-3">
                        <div class="flex items-end justify-between gap-5 p-4">
                            <div>
                                <div class="flex items-center gap-3 text-default-500 mb-3">
                                    <span class="px-2 py-1 bg-default-100 rounded-md text-xs font-medium">Marketing</span>
                                    <span class="text-sm">June 20, 2025</span>
                                </div>

                                <h3 class="text-xl">5 growth strategies every modern business should know</h3>
                            </div>

                            <div class="grow">
                                <i class="iconify tabler--arrow-narrow-right size-6 -rotate-45 group-hover:rotate-0 transition duration-300"></i>
                            </div>
                        </div>
                    </div>
                </a>


                <!-- Blog Item -->
                <a href="blog-details" class="grid lg:grid-cols-4 items-center lg:gap-4 gap-2.5 bg-white transition rounded-xl p-2 lg:pe-6 group">

                    <div class="overflow-hidden rounded-lg lg:h-full md:h-75 w-full">
                        <img src="images/blog/4.webp" class="size-full rounded-lg object-cover group-hover:scale-105 transition-all duration-300" alt="blog">
                    </div>

                    <div class="lg:col-span-3">
                        <div class="flex items-end justify-between gap-5 p-4">
                            <div>
                                <div class="flex items-center gap-3 text-default-500 mb-3">
                                    <span class="px-2 py-1 bg-default-100 rounded-md text-xs font-medium">Growth</span>
                                    <span class="text-sm">June 20, 2025</span>
                                </div>

                                <h3 class="text-xl">Digital transformation for service-based businesses</h3>
                            </div>

                            <div class="grow">
                                <i class="iconify tabler--arrow-narrow-right size-6 -rotate-45 group-hover:rotate-0 transition duration-300"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact details -->
    <section class="lg:py-27.5 md:py-25 py-15">
        <div class="container max-w-315!">

            <div class="grid md:grid-cols-2 gap-5">
                <div>
                    <div class="border border-default-200 rounded-xl lg:p-10 p-5 lg:pb-16 pb-12 h-full flex flex-col md:items-start items-center lg:text-start text-center justify-between gap-12">

                        <h4 class="lg:text-3xl text-2xl">Let’s build something that moves your business forward</h4>

                        <div class="inline-flex items-center gap-3">
                            <div class="text-sm">Talk to our experts</div>
                            <i class="iconify tabler--circle-plus size-5"></i>
                            <div class="flex -space-x-2">
                                <div class="relative inline-block group">

                                    <img src="images/users/1.jpg" alt="avatar" class="size-9 rounded-full object-cover hover:scale-110 transition duration-300">

                                    <!-- Tooltip -->
                                    <div class="pointer-events-none absolute left-1/2 -translate-x-1/2 top-full mt-4 opacity-0 group-hover:opacity-100 transition duration-200 whitespace-nowrap text-xs font-medium px-2.5 py-1 rounded bg-default-100 shadow-sm">
                                        Alex Carry
                                    </div>

                                </div>

                                <div class="relative inline-block group">
                                    <img src="images/users/2.jpg" alt="avatar-1" class="size-9 rounded-full object-cover hover:scale-110 transition duration-300">

                                    <!-- Tooltip -->
                                    <div class="pointer-events-none absolute left-1/2 -translate-x-1/2 top-full mt-4 opacity-0 group-hover:opacity-100 transition duration-200 whitespace-nowrap text-xs font-medium px-2.5 py-1 rounded bg-default-100 shadow-sm">
                                        Amanda Lewis
                                    </div>
                                </div>

                                <div class="relative inline-block group">
                                    <img src="images/users/3.jpg" alt="avatar-1" class="size-9 rounded-full object-cover hover:scale-110 transition duration-300">

                                    <!-- Tooltip -->
                                    <div class="pointer-events-none absolute left-1/2 -translate-x-1/2 top-full mt-4 opacity-0 group-hover:opacity-100 transition duration-200 whitespace-nowrap text-xs font-medium px-2.5 py-1 rounded bg-default-100 shadow-sm">
                                        David Hassan
                                    </div>
                                </div>

                                <div class="relative inline-block group">
                                    <img src="images/users/4.jpg" alt="avatar-1" class="size-9 rounded-full object-cover hover:scale-110 transition duration-300">

                                    <!-- Tooltip -->
                                    <div class="pointer-events-none absolute left-1/2 -translate-x-1/2 top-full mt-4 opacity-0 group-hover:opacity-100 transition duration-200 whitespace-nowrap text-xs font-medium px-2.5 py-1 rounded bg-default-100 shadow-sm">
                                        Elena Novak
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="relative rounded-xl overflow-hidden">

                        <img src="images/other/cta-bg.jpg" class="w-full h-full object-cover" alt="testimonial video">

                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                            <a href="contact" class="group py-5 px-10 inline-flex items-center text-nowrap justify-center rounded-lg bg-white text-primary font-medium transition-all">
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
                </div>
            </div>
        </div>
    </section>

    <?php include('partials/footer.php'); ?>

</body>

</html>