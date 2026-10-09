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
                <h1 class="md:text-[64px] text-5xl leading-[1.2em] text-default-950">
                    Frequently Asked Questions
                </h1>
            </div>
        </div>
    </section>

    <section class="overflow-hidden relative size-full lg:pb-50 pb-25">
        <div class="container max-w-245! relative z-10">
            <div class="md:space-y-7.5 space-y-5">

                <!-- FAQ 1 -->
                <div class="hs-accordion p-5 rounded-2xl border border-default-200 bg-linear-to-b from-default-100 to-transparent active">
                    <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
                        <h3 class="text-xl">Is my data secure on Copora?</h3>

                        <div class="relative size-4.5 flex items-center justify-center">
                            <i class="absolute h-4.5 w-0.5 bg-default-950 flex transition duration-500 hs-accordion-active:rotate-90"></i>
                            <i class="w-4.5 h-0.5 bg-default-950 flex"></i>
                        </div>
                    </button>

                    <div class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 text-start">
                        <p class="mt-5">
                            Yes, data security is a top priority. Copora uses advanced encryption technologies, secure servers, and regular security audits to protect your information.
                        </p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="hs-accordion p-5 rounded-2xl border border-default-200 bg-linear-to-b from-default-100 to-transparent">
                    <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
                        <h3 class="text-xl">What happens if I exceed my storage limit?</h3>

                        <div class="relative size-4.5 flex items-center justify-center">
                            <i class="absolute h-4.5 w-0.5 bg-default-950 flex transition duration-500 hs-accordion-active:rotate-90"></i>
                            <i class="w-4.5 h-0.5 bg-default-950 flex"></i>
                        </div>
                    </button>

                    <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300 text-start">
                        <p class="mt-5">
                            When your storage limit is reached, new uploads will be temporarily paused. To continue using Copora, you can free up space by deleting older files or upgrade your storage plan.
                        </p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="hs-accordion p-5 rounded-2xl border border-default-200 bg-linear-to-b from-default-100 to-transparent">
                    <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
                        <h3 class="text-xl">Can I collaborate with my team on files?</h3>

                        <div class="relative size-4.5 flex items-center justify-center">
                            <i class="absolute h-4.5 w-0.5 bg-default-950 flex transition duration-500 hs-accordion-active:rotate-90"></i>
                            <i class="w-4.5 h-0.5 bg-default-950 flex"></i>
                        </div>
                    </button>

                    <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300 text-start">
                        <p class="mt-5">
                            Copora is built for collaboration. You can share files with your team, assign access permissions, edit documents, and track changes in real time.
                        </p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="hs-accordion p-5 rounded-2xl border border-default-200 bg-linear-to-b from-default-100 to-transparent">
                    <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
                        <h3 class="text-xl">Can I integrate third-party tools with Copora?</h3>

                        <div class="relative size-4.5 flex items-center justify-center">
                            <i class="absolute h-4.5 w-0.5 bg-default-950 flex transition duration-500 hs-accordion-active:rotate-90"></i>
                            <i class="w-4.5 h-0.5 bg-default-950 flex"></i>
                        </div>
                    </button>

                    <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300 text-start">
                        <p class="mt-5">
                            Yes, Copora integrates with popular third-party tools like Slack, Google Drive, Trello, and more. These integrations help streamline your workflow and improve productivity.
                        </p>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="hs-accordion p-5 rounded-2xl border border-default-200 bg-linear-to-b from-default-100 to-transparent">
                    <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
                        <h3 class="text-xl">Is there a free trial available?</h3>

                        <div class="relative size-4.5 flex items-center justify-center">
                            <i class="absolute h-4.5 w-0.5 bg-default-950 flex transition duration-500 hs-accordion-active:rotate-90"></i>
                            <i class="w-4.5 h-0.5 bg-default-950 flex"></i>
                        </div>
                    </button>

                    <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300 text-start">
                        <p class="mt-5">
                            Yes, Copora offers a free trial period. During the trial, you’ll have full access to all features so you can explore the platform and evaluate its capabilities.
                        </p>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="hs-accordion p-5 rounded-2xl border border-default-200 bg-linear-to-b from-default-100 to-transparent">
                    <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
                        <h3 class="text-xl">How do I track my usage and storage?</h3>

                        <div class="relative size-4.5 flex items-center justify-center">
                            <i class="absolute h-4.5 w-0.5 bg-default-950 flex transition duration-500 hs-accordion-active:rotate-90"></i>
                            <i class="w-4.5 h-0.5 bg-default-950 flex"></i>
                        </div>
                    </button>

                    <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300 text-start">
                        <p class="mt-5">
                            You can monitor your usage and storage directly from your account dashboard. The dashboard provides a real-time overview of storage consumption, activity logs, and account insights.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </section>


    <?php include('partials/footer.php'); ?>

</body>

</html>