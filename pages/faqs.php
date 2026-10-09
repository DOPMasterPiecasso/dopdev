<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = 'FAQs'; include('partials/title-meta.php'); ?>

    <?php include('partials/head-css.php'); ?>
</head>

<body>

    <?php include('partials/navbar.php'); ?>

    <section class="relative size-full overflow-hidden lg:pt-50 md:pb-22.5 pb-12.5 md:pt-37.5 pt-32">
        <img class="absolute inset-0 size-full opacity-90 object-cover -z-1" src="images/bg/section-bg-1.png" alt="Decoration">
        <div class="absolute -z-1 lg:bottom-[-39%] bottom-[-43%] end-[-10%] start-[-10%] top-auto bg-white h-75 bg-[linear-gradient(180deg,transparent,#fff)] blur-2xl"></div>

        <div class="container">
            <div class="text-center">
                <h1 class="md:text-[64px] text-5xl leading-[1.2em] text-default-950 font-bold">
                    Frequently Asked Questions
                </h1>
            </div>
        </div>
    </section>

    <section class="overflow-hidden relative size-full lg:pb-50 pb-25">
        <div class="container max-w-245! relative z-10">
            <div class="md:space-y-7.5 space-y-5">

                <!-- FAQ 1 -->
                <div class="hs-accordion p-6 rounded-2xl border border-default-200 bg-white shadow-sm active">
                    <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
                        <h3 class="text-xl font-bold text-default-950">Is this only for barbershops and clinics?</h3>
                        <div class="relative size-4.5 flex items-center justify-center">
                            <i class="absolute h-4.5 w-0.5 bg-default-950 flex transition duration-500 hs-accordion-active:rotate-90"></i>
                            <i class="w-4.5 h-0.5 bg-default-950 flex"></i>
                        </div>
                    </button>

                    <div class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 text-start">
                        <p class="mt-4 text-default-600 leading-relaxed">
                            No. While we started with barbershops and clinics, the system works for any service business that takes appointments: salons, spas, gyms, studios, workshops, automotive services and more.
                        </p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="hs-accordion p-6 rounded-2xl border border-default-200 bg-white shadow-sm">
                    <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
                        <h3 class="text-xl font-bold text-default-950">Can it handle multiple branches and staff?</h3>
                        <div class="relative size-4.5 flex items-center justify-center">
                            <i class="absolute h-4.5 w-0.5 bg-default-950 flex transition duration-500 hs-accordion-active:rotate-90"></i>
                            <i class="w-4.5 h-0.5 bg-default-950 flex"></i>
                        </div>
                    </button>

                    <div class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 text-start">
                        <p class="mt-4 text-default-600 leading-relaxed">
                            Yes. You can manage multiple locations, each with their own services, staff rosters and schedules. Owners get a unified view across all branches.
                        </p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="hs-accordion p-6 rounded-2xl border border-default-200 bg-white shadow-sm">
                    <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
                        <h3 class="text-xl font-bold text-default-950">Do you support local payments in Singapore and Australia?</h3>
                        <div class="relative size-4.5 flex items-center justify-center">
                            <i class="absolute h-4.5 w-0.5 bg-default-950 flex transition duration-500 hs-accordion-active:rotate-90"></i>
                            <i class="w-4.5 h-0.5 bg-default-950 flex"></i>
                        </div>
                    </button>

                    <div class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 text-start">
                        <p class="mt-4 text-default-600 leading-relaxed">
                            Yes. We integrate with popular payment options in both markets, including cards and local e-wallets. Deposits or full payment at booking are both supported.
                        </p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="hs-accordion p-6 rounded-2xl border border-default-200 bg-white shadow-sm">
                    <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
                        <h3 class="text-xl font-bold text-default-950">How long does it take to get live?</h3>
                        <div class="relative size-4.5 flex items-center justify-center">
                            <i class="absolute h-4.5 w-0.5 bg-default-950 flex transition duration-500 hs-accordion-active:rotate-90"></i>
                            <i class="w-4.5 h-0.5 bg-default-950 flex"></i>
                        </div>
                    </button>

                    <div class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 text-start">
                        <p class="mt-4 text-default-600 leading-relaxed">
                            Most projects go live within a few weeks, depending on complexity, number of branches and integrations. We’ll give you a clear timeline after discovery.
                        </p>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="hs-accordion p-6 rounded-2xl border border-default-200 bg-white shadow-sm">
                    <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
                        <h3 class="text-xl font-bold text-default-950">Do you provide training for our team?</h3>
                        <div class="relative size-4.5 flex items-center justify-center">
                            <i class="absolute h-4.5 w-0.5 bg-default-950 flex transition duration-500 hs-accordion-active:rotate-90"></i>
                            <i class="w-4.5 h-0.5 bg-default-950 flex"></i>
                        </div>
                    </button>

                    <div class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 text-start">
                        <p class="mt-4 text-default-600 leading-relaxed">
                            Yes. We train your front desk, managers and owners on how to manage bookings, customers and reports. We also provide documentation and ongoing support.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include('partials/footer.php'); ?>

</body>

</html>