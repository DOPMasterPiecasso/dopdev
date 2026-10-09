<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = 'About';
    include('partials/title-meta.php'); ?>

    <?php include('partials/head-css.php'); ?>
</head>

<body>

    <?php include('partials/navbar.php'); ?>

    <!-- Hero Section -->
    <section class="relative size-full overflow-hidden md:py-14.5 py-10">

        <div class="container max-w-315!">
            <div class="mb-12.5 text-center">
                <h1 class="lg:text-[56px] md:text-5xl text-4xl text-default-950 mb-2.5">We Build Systems That Fill Your Calendar</h1>

                <p class="md:max-w-2/3 mx-auto text-lg text-default-600">DOP is a software house focused on service-based small and medium businesses. We combine a strong company profile website with a powerful booking engine and the right integrations, so your customers can find you, book you and pay you  without the back-and-forth messages.</p>
            </div>

            <div class="mb-2.5">
                <img src="images/other/about-image-1.jpg" class="size-full rounded-lg">
            </div>

            <div class="grid md:grid-cols-10 gap-4">

                <!-- Card 1 -->
                <div class="md:col-span-3">
                    <div class="h-full relative rounded-xl overflow-hidden p-6 text-white bg-[url('images/other/about-bg.jpg')] bg-cover bg-center">

                        <div class="absolute inset-0 bg-black/40"></div>

                        <div class="relative z-10 space-y-3">

                            <span class="text-xs inline-flex px-3 py-1 bg-white/20 rounded-md backdrop-blur">
                                Business transformed
                            </span>

                            <div>
                                <h2 class="text-4xl text-white mb-8">260+</h2>
                                <p class="text-white mt-2">Helping companies grow and perform better.</p>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- Card 2 -->
                <div class="md:col-span-4">
                    <div class="h-full bg-default-950 rounded-xl p-6 flex flex-col justify-between">

                        <h3 class="text-2xl leading-snug text-white">
                            24/7 support to keep your
                            <span class="text-default-400">business moving forward</span>
                        </h3>

                        <div class="mt-8">
                            <a href="contact" class="group py-3 px-4.5 inline-flex items-center justify-center gap-5 rounded-xl bg-white text-primary font-medium transition-all">
                                <span class="relative block overflow-hidden">
                                    <span class="block group-hover:-translate-y-7 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                        Get in touch
                                    </span>
                                    <span class="absolute top-7 inset-s-0 group-hover:top-0 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                        Get in touch
                                    </span>
                                </span>
                            </a>
                        </div>

                    </div>
                </div>


                <!-- Card 3 -->
                <div class="md:col-span-3">
                    <div class="h-full bg-default-100 rounded-xl p-6 flex flex-col justify-between">

                        <span class="text-xs px-3 py-1 bg-white rounded-md w-fit">
                            Years for experiences
                        </span>

                        <div class="mt-6">
                            <h3 class="text-4xl font-semibold text-default-900">6+</h3>
                            <p class="text-default-600 mt-2">
                                Years helping businesses thrive
                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="lg:py-27.5 md:py-25 py-15 bg-default-100">
        <div class="container mb-12.5">
            <div class="mb-12.5">
                <h5 class="lg:text-5xl md:text-4xl text-3xl">Built on expertise, driven by results - Get to know us</h5>
            </div>

            <div class="grid lg:grid-cols-2 grid-cols-2 lg:gap-30 gap-7.5">
                <div class="our-story-detail-item">
                    <p class="mb-7.5 text-xl text-default-800">We didn’t start with a big boardroom  just a big idea: to make business consulting more human, strategic, and impact-driven. Founded by professionals who’ve lived through both corporate complexity and startup chaos, we understand what it takes to scale smart, pivot fast, and stay competitive.</p>

                    <p>From helping early-stage ventures define their roadmap to guiding enterprises through digital transformation, our journey has always been about one thing  unlocking clarity and measurable growth for every client. Today, we’re proud to be the go-to partner for businesses ready to think bigger and move faster, backed by strategy that works.We follow a strategic four-step approach designed to drive measurable results. From deep discovery to ongoing optimization, every step is focused on moving your business forward with clarity, efficiency, and impact.</p>
                </div>

                <div>
                    <div class="grid grid-cols-2 gap-5">
                        <div class="our-story-image-wrap">
                            <img src="images/other/about-image-2.jpg" alt="Image" class="rounded-lg">
                        </div>

                        <div class="size-full relative overflow-hidden rounded-lg">
                            <video loop autoplay muted class="bg-[url('videos/video-poster.jpg')] bg-cover bg-center flex object-cover rounded-lg w-full h-full -z-10">
                                <source src="/videos/video.mp4" type="video/mp4">
                                <source src="/videos/video.webm" type="video/webm">
                            </video>

                            <a href="https://www.youtube.com/embed/elgqxmdVms8?si=yYfzbunShGP15tde" data-toggle="video" class="absolute inset-0 rounded-lg bg-default-950/50 size-full text-center flex items-center justify-center">
                                <div class="text-white">Play Reel</div>
                            </a>
                        </div>
                    </div>

                    <div class="mt-7.5">
                        <img src="images/other/sign.svg" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" data-w-id="2e19b734-5117-5347-782c-f7048aa4f02c" alt="Image" class="signature">

                        <div class="mt-2.5">
                            <h3 class="text-lg mb-2.5">Carlos Mendes</h3>
                            <div class="text-default-600">CEO</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="lg:py-27.5 md:py-25 py-15">
        <div class="container max-w-315!">

            <div class="grid md:grid-cols-2 gap-5">
                <div>
                    <div class="border border-default-200 rounded-xl lg:p-10 p-5 lg:pb-16 pb-12 h-full flex flex-col md:items-start items-center lg:text-start text-center justify-between gap-12">

                        <h2 class="mb-12.5 text-2xl">Our Mission</h2>
                        <p class="text-default-950">To empower businesses of all sizes to unlock their full potential through strategic insight, tailored consulting, and measurable results. We are committed to delivering innovative solutions that drive sustainable growth, operational excellence, and long-term success for our clients.</p>

                    </div>
                </div>

                <div>
                    <div class="relative rounded-xl overflow-hidden">

                        <img src="images/other/cta-bg.jpg" class="w-full h-full object-cover" alt="testimonial video">

                        <div class="absolute lg:inset-10 inset-5 p-5 bg-white rounded-lg">

                            <div class="space-y-7.5">
                                <h2 class="text-2xl">Our Vision</h2>

                                <p class="text-default-950">We aim to lead the way in reshaping how businesses grow, adapt, and lead in a changing world.</p>

                                <ul role="list" class="list-disc text-default-950 list-inside space-y-2.5 ps-2">
                                    <li>Global impact</li>
                                    <li>Innovative thinking</li>
                                    <li>Empowering growth</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- <section class="lg:py-27.5 md:py-25 py-15">
        <div class="container">

            <div class="mb-12.5 text-center">
                <div class="text-sm text-default-950 mb-2.5">Our team</div>

                <h1 class="lg:text-5xl md:text-4xl text-3xl mb-2.5">Our team of problem solvers</h1>

                <p class="text-default-600 max-w-1/3 mx-auto">Our diverse team of experienced consultants, analysts, and industry specialists work together to deliver real results.</p>
            </div>

            <div class="grid lg:grid-cols-5 md:grid-cols-3 gap-6">

                <div class="group relative rounded-lg flex flex-col items-center overflow-hidden">
                    <img src="images/team/1.jpg" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                    <div class="absolute bottom-5 bg-white px-4 py-2.5 rounded flex flex-col gap-1.5 items-center overflow-hidden">
                        <h3 class="text-lg">Rachel Kim</h3>
                        <div class="text-default-700 mb-2">Chief Strategy Officer</div>

                        <div class="flex gap-4 -mb-9 transition-all duration-500 group-hover:mb-0">
                            <i class="iconify lucide--facebook size-4.5"></i>
                            <i class="iconify lucide--instagram size-4.5"></i>
                            <i class="iconify lucide--linkedin size-4.5"></i>
                        </div>
                    </div>
                </div>

                <div class="group relative rounded-lg flex flex-col items-center overflow-hidden">
                    <img src="images/team/2.jpg" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                    <div class="absolute bottom-5 bg-white px-4 py-2.5 rounded flex flex-col gap-1.5 items-center overflow-hidden">
                        <h3 class="text-lg">Hannah Brooks</h3>
                        <div class="text-default-700 mb-2">Chief Strategy Officer</div>

                        <div class="flex gap-4 -mb-9 transition-all duration-500 group-hover:mb-0">
                            <i class="iconify lucide--facebook size-4.5"></i>
                            <i class="iconify lucide--instagram size-4.5"></i>
                        </div>
                    </div>
                </div>

                <div class="group relative rounded-lg flex flex-col items-center overflow-hidden">
                    <img src="images/team/3.jpg" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                    <div class="absolute bottom-5 bg-white px-4 py-2.5 rounded flex flex-col gap-1.5 items-center overflow-hidden">
                        <h3 class="text-lg">Amira Chen</h3>
                        <div class="text-default-700 mb-2">Operations Consultant</div>

                        <div class="flex gap-4 -mb-9 transition-all duration-500 group-hover:mb-0">
                            <i class="iconify lucide--facebook size-4.5"></i>
                            <i class="iconify lucide--linkedin size-4.5"></i>
                        </div>
                    </div>
                </div>

                <div class="group relative rounded-lg flex flex-col items-center overflow-hidden">
                    <img src="images/team/4.jpg" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                    <div class="absolute bottom-5 bg-white px-4 py-2.5 rounded flex flex-col gap-1.5 items-center overflow-hidden">
                        <h3 class="text-lg">David Hassan</h3>
                        <div class="text-default-700 mb-2">Business Analyst</div>

                        <div class="flex gap-4 -mb-9 transition-all duration-500 group-hover:mb-0">
                            <i class="iconify lucide--facebook size-4.5"></i>
                            <i class="iconify lucide--instagram size-4.5"></i>
                            <i class="iconify lucide--linkedin size-4.5"></i>
                        </div>
                    </div>
                </div>

                <div class="group relative rounded-lg flex flex-col items-center overflow-hidden">
                    <img src="images/team/5.jpg" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">

                    <div class="absolute bottom-5 bg-white px-4 py-2.5 rounded flex flex-col gap-1.5 items-center overflow-hidden">
                        <h3 class="text-lg">Elena Novak</h3>
                        <div class="text-default-700 mb-2">Market Research Lead</div>

                        <div class="flex gap-4 -mb-9 transition-all duration-500 group-hover:mb-0">
                            <i class="iconify lucide--instagram size-4.5"></i>
                            <i class="iconify lucide--linkedin size-4.5"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section> -->

    <section class="lg:py-27.5 md:py-25 py-15">
        <div class="container max-w-315!">
            <div class="mt-12.5">
                <div class="lg:py-17.5 lg:px-25 py-8 px-3 rounded-lg bg-default-100 text-center">
                    <h2 class="mb-2.5 lg:text-4xl md:text-3xl text-2xl">Let's build something that moves your business forward</h2>

                    <p class="mb-12.5 lg:w-3/5 mx-auto">Share a concise story of how the agency was founded, core motivations, and the evolution from inception to present.</p>

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
                </div>
            </div>
        </div>
    </section>

    <?php include('partials/footer.php'); ?>

</body>

</html>