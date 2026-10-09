<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = 'Contact Us'; include('partials/title-meta.php'); ?>

    <?php include('partials/head-css.php'); ?>
</head>

<body>

    <?php include('partials/navbar.php'); ?>

    <section class="relative size-full overflow-hidden md:py-14.5 py-10">

        <div class="container">
            <h1 class="mb-15 lg:text-[56px] md:text-5xl text-4xl text-default-950">Have a business challenge? We're ready to help</h1>

            <div class="grid lg:grid-cols-5 lg:gap-17.5 md:gap-12.5 gap-7.5">
                <div class="lg:col-span-3">

                    <div class="mb-10">Whether you’re ready to scale, solve a business challenge, or explore a partnership - we're here to help.</div>

                    <div class="grid md:grid-cols-2 gap-7.5 mb-7.5">
                        <div>
                            <label for="name" class="mb-1.5 text-sm block">Your name*</label>
                            <input type="text" id="name" class="rounded-lg bg-default-100 h-11.25 py-2 px-5 w-full flex items-center border-transparent focus:border-default-200">
                        </div>

                        <div>
                            <label for="email" class="mb-1.5 text-sm block">Email Address*</label>
                            <input type="email" id="email" class="rounded-lg bg-default-100 h-11.25 py-2 px-5 w-full flex items-center border-transparent focus:border-default-200">
                        </div>

                        <div>
                            <label for="phone-number" class="mb-1.5 text-sm block">Phone number</label>
                            <input type="tel" id="phone-number" class="rounded-lg bg-default-100 h-11.25 py-2 px-5 w-full flex items-center border-transparent focus:border-default-200">
                        </div>

                        <div>
                            <label for="select-field" class="mb-1.5 text-sm block">Services</label>
                            <select id="select-field" name="select-field" class="rounded-lg bg-default-100 h-11.25 py-2 px-5 w-full flex items-center border-transparent focus:border-default-200">
                                <option value="">Select one...</option>
                                <option value="Business Strategy">Business Strategy</option>
                                <option value="Process optimization">Process optimization</option>
                                <option value="Financial advisory">Financial advisory</option>
                                <option value="Market research">Market research</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-5">
                        <label for="message" class="mb-1.5 text-sm block">Message</label>
                        <textarea id="message" class="rounded-lg bg-default-100 py-2 px-5 w-full flex items-center border-transparent focus:border-default-200" rows="8"></textarea>
                    </div>

                    <div class="lg:-mb-14">
                        <button type="submit" class="group py-3.5 px-5 inline-flex items-center justify-center gap-5 rounded-lg bg-primary font-medium text-white transition-all">
                            <span class="relative block overflow-hidden">
                                <span class="block group-hover:-translate-y-7 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                    Submit
                                </span>
                                <span class="absolute top-7 inset-s-0 group-hover:top-0 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                    Submit
                                </span>
                            </span>
                        </button>
                    </div>

                </div>

                <div class="lg:col-span-2">
                    <div class="size-full rounded-lg overflow-hidden group">
                        <img class="size-full rounded-lg object-cover group-hover:scale-105 transition-all duration-300" src="images/other/contact-bg.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="lg:py-27.5 md:py-25 py-15">
        <div class="container">

            <div class="grid md:grid-cols-2 gap-5">
                <div>
                    <div class="relative rounded-xl overflow-hidden size-full">
                        <img src="images/other/contact-info.jpg" class="w-full h-full object-cover" alt="testimonial video">
                    </div>
                </div>

                <div>
                    <div class="border border-default-200 rounded-xl p-10 lg:py-20 h-full flex flex-col items-center text-center justify-center gap-12">

                        <h4 class="lg:text-3xl text-2xl lg:max-w-4/5">Business consulting agency Copora</h4>

                        <p class="lg:max-w-2/5">Chicago HQ Estica Cop. Macomb, MI 48042</p>

                        <a href="mailto:contact@copora.com" class="underline text-default-950 transition duration-300 hover:text-default-400">contact@copora.com</a>

                    </div>
                </div>
            </div>

            <div class="mt-5 bg-default-950 text-white rounded-xl lg:p-10 p-5">

                <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">

                    <!-- Contact -->
                    <div class="flex items-center gap-6 flex-wrap">

                        <h3 class="md:text-2xl text-xl text-white">Contact on:</h3>

                        <a href="mailto:contact@copora.com" class="text-white/80 hover:text-white transition">
                            contact@copora.com
                        </a>

                        <span class="hidden md:block w-px h-6 bg-white/30"></span>

                        <a href="tel:+1234567890" class="text-white/80 hover:text-white transition">
                            +123 456 7890
                        </a>

                    </div>


                    <!-- Social -->
                    <div class="flex items-center gap-5">

                        <h3 class="md:text-2xl text-xl text-white">Social media:</h3>

                        <div class="flex items-center gap-4">

                            <a href="#" class="text-default-400 transition duration-300 hover:-translate-y-1">
                                <i class="iconify lucide--facebook size-5"></i>
                            </a>

                            <a href="#" class="text-default-400 transition duration-300 hover:-translate-y-1">
                                <i class="iconify lucide--instagram size-5"></i>
                            </a>

                            <a href="#" class="text-default-400 transition duration-300 hover:-translate-y-1">
                                <i class="iconify lucide--linkedin size-5"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="lg:pb-27.5 md:pb-25 pb-20">
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
                            <a href="contact" class="group py-5 px-10 inline-flex items-center justify-center rounded-lg bg-white text-primary font-medium transition-all">
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