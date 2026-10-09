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
            <div class="mb-12.5 text-center">
                <h1 class="lg:text-[56px] md:text-5xl text-4xl mb-2.5">Our case studies</h1>
            </div>

            <div class="grid lg:grid-cols-2 gap-7.5">
                <!-- Card 1 -->
                <div class="relative rounded-lg overflow-hidden group">
                    <a href="case-study" class="absolute inset-0 z-10"></a>

                    <img src="images/case-studies/1.webp" class="rounded-lg object-cover group-hover:scale-105 transition-all duration-300">

                    <div class="absolute bottom-0 m-5">
                        <div class="p-4 inline-flex rounded bg-white">
                            <div class="space-y-2.5">
                                <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                    Financial
                                </div>
                                <h2 class="text-xl">Market entry strategy for a fintech startup</h2>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Card 2 -->
                <div class="relative rounded-lg overflow-hidden group">
                    <a href="case-study" class="absolute inset-0 z-10"></a>

                    <img src="images/case-studies/2.webp" class="rounded-lg object-cover group-hover:scale-105 transition-all duration-300">

                    <div class="absolute bottom-0 m-5">
                        <div class="p-4 inline-flex rounded bg-white">
                            <div class="space-y-2.5">
                                <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                    Financial
                                </div>
                                <h2 class="text-xl">Digital transformation for a healthcare provider</h2>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Card 3 -->
                <div class="relative rounded-lg overflow-hidden group">
                    <a href="case-study" class="absolute inset-0 z-10"></a>

                    <img src="images/case-studies/3.webp" class="rounded-lg object-cover group-hover:scale-105 transition-all duration-300">

                    <div class="absolute bottom-0 m-5">
                        <div class="p-4 inline-flex rounded bg-white">
                            <div class="space-y-2.5">
                                <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                    Financial
                                </div>
                                <h2 class="text-xl">International expansion for a retail</h2>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Card 4 -->
                <div class="relative rounded-lg overflow-hidden group">
                    <a href="case-study" class="absolute inset-0 z-10"></a>

                    <img src="images/case-studies/4.webp" class="rounded-lg object-cover group-hover:scale-105 transition-all duration-300">

                    <div class="absolute bottom-0 m-5">
                        <div class="p-4 inline-flex rounded bg-white">
                            <div class="space-y-2.5">
                                <div class="py-1.5 px-2.5 text-sm/none font-medium inline-flex bg-default-100 border border-default-200 rounded">
                                    Website Design
                                </div>
                                <h2 class="text-xl">Website for a green energy consulting firm</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="mt-12.5 grid grid-cols-3 items-center md:gap-10 gap-5">
                <div>
                    <button disabled="" class="opacity-0 flex items-center justify-center gap-2 w-full text-center py-4.5 px-10 bg-primary rounded-lg text-white transition-all text-base font-medium">
                        <i class="iconify tabler--chevron-left"></i>
                        Previous
                    </button>
                </div>

                <div class="text-center">1 / 2</div>

                <div>
                    <button class="flex items-center justify-center gap-2 w-full text-center py-4.5 px-10 bg-primary rounded-lg text-white transition-all text-base font-medium">
                        Next
                        <i class="iconify tabler--chevron-right"></i>
                    </button>
                </div>
            </nav>
        </div>
    </section>


    <?php include('partials/footer.php'); ?>

</body>

</html>