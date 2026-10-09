<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = 'Case Study Detail'; include('partials/title-meta.php'); ?>

    <?php include('partials/head-css.php'); ?>
</head>

<body>

    <?php include('partials/navbar.php'); ?>

    <!-- Hero Section -->
    <section class="relative size-full overflow-hidden md:py-14.5 py-10">
        <div class="container max-w-245!">
            <div class="mb-7.5 space-y-4 text-center">
                <div class="py-1.5 px-3 text-sm font-medium inline-flex bg-primary/10 text-primary border border-primary/20 rounded">
                    Financial Services
                </div>

                <h1 class="md:text-[56px] text-4xl leading-[1.2em] text-default-950 font-semibold">
                    Market entry strategy for a fintech startup
                </h1>

                <p class="md:max-w-3/4 mx-auto text-default-600">
                    How we helped an emerging financial technology company navigate regulatory landscapes, define value proposition, and successfully scale across Southeast Asia.
                </p>
            </div>

            <div class="lg:-mx-15 my-10">
                <img src="images/case-studies/1.webp" alt="Case Study Detail Image" class="rounded-lg size-full object-cover max-h-[500px]">
            </div>

            <!-- Meta Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 p-6 bg-default-100 rounded-xl mb-12.5">
                <div>
                    <span class="text-xs uppercase tracking-wider text-default-500 block mb-1">Client</span>
                    <span class="font-medium text-default-900">FinTech Asia Corp</span>
                </div>
                <div>
                    <span class="text-xs uppercase tracking-wider text-default-500 block mb-1">Category</span>
                    <span class="font-medium text-default-900">Financial Services</span>
                </div>
                <div>
                    <span class="text-xs uppercase tracking-wider text-default-500 block mb-1">Duration</span>
                    <span class="font-medium text-default-900">6 Months</span>
                </div>
                <div>
                    <span class="text-xs uppercase tracking-wider text-default-500 block mb-1">Location</span>
                    <span class="font-medium text-default-900">Jakarta, Indonesia</span>
                </div>
            </div>

            <!-- Content Overview -->
            <h2 class="text-[32px] mb-4 font-medium">Project Overview & Challenge</h2>
            <p class="mb-8 text-default-600 leading-relaxed">
                Entering a highly regulated market requires more than just innovative technology; it demands a deep understanding of local compliance, user behavior, and competitive positioning. Our client sought to expand their digital payment infrastructure across new regional markets while establishing trust with institutional partners.
            </p>

            <h2 class="text-[32px] mb-4 font-medium">Our Strategic Approach</h2>
            <p class="mb-6 text-default-600 leading-relaxed">
                We conducted an extensive market analysis, regulatory audit, and customer persona mapping to build a customized go-to-market strategy:
            </p>

            <ul class="list-disc list-inside space-y-3 mb-10 text-default-700" role="list">
                <li>Comprehensive regulatory compliance framework alignment.</li>
                <li>Strategic partnership acquisition strategy with tier-1 financial institutions.</li>
                <li>Localized UX positioning tailored to consumer payment preferences.</li>
                <li>Scalable unit-economics model and risk management playbook.</li>
            </ul>

            <blockquote class="bg-default-950 text-white rounded-lg p-10 mb-10 lg:-mx-15">
                <em class="italic text-lg block mb-4">
                    "DOP's strategic clarity and execution speed transformed our expansion plan from concept to a thriving market presence in under six months."
                </em>
                <span class="text-sm font-semibold text-primary">— CEO, FinTech Asia Corp</span>
            </blockquote>

            <h2 class="text-[32px] mb-4 font-medium">Key Results & Impact</h2>
            <div class="grid md:grid-cols-3 gap-6 mb-12.5">
                <div class="p-6 border border-default-200 rounded-lg text-center">
                    <h3 class="text-4xl font-bold text-primary mb-2">+250%</h3>
                    <p class="text-sm text-default-600">User Acquisition Growth</p>
                </div>
                <div class="p-6 border border-default-200 rounded-lg text-center">
                    <h3 class="text-4xl font-bold text-primary mb-2">$12M</h3>
                    <p class="text-sm text-default-600">Series A Capital Raised</p>
                </div>
                <div class="p-6 border border-default-200 rounded-lg text-center">
                    <h3 class="text-4xl font-bold text-primary mb-2">99.9%</h3>
                    <p class="text-sm text-default-600">Regulatory Compliance Score</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Case Studies -->
    <section class="lg:py-20 md:py-16 py-10 bg-default-100">
        <div class="container">
            <div class="flex items-center justify-between mb-10">
                <h2 class="lg:text-4xl text-3xl font-medium">Related Case Studies</h2>
                <a href="case-studies" class="text-primary hover:underline font-medium inline-flex items-center gap-1">
                    View all
                    <i class="iconify tabler--arrow-right"></i>
                </a>
            </div>

            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-7.5">
                <!-- Card 1 -->
                <div class="relative rounded-lg overflow-hidden group bg-white shadow-sm">
                    <a href="case-study" class="absolute inset-0 z-10"></a>
                    <img src="images/case-studies/2.webp" class="rounded-t-lg object-cover w-full h-52 group-hover:scale-105 transition-all duration-300">
                    <div class="p-5">
                        <div class="py-1 px-2.5 text-xs font-medium inline-flex bg-default-100 border border-default-200 rounded mb-2.5">
                            Financial
                        </div>
                        <h3 class="text-lg font-medium">Digital transformation for a healthcare provider</h3>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="relative rounded-lg overflow-hidden group bg-white shadow-sm">
                    <a href="case-study" class="absolute inset-0 z-10"></a>
                    <img src="images/case-studies/3.webp" class="rounded-t-lg object-cover w-full h-52 group-hover:scale-105 transition-all duration-300">
                    <div class="p-5">
                        <div class="py-1 px-2.5 text-xs font-medium inline-flex bg-default-100 border border-default-200 rounded mb-2.5">
                            Financial
                        </div>
                        <h3 class="text-lg font-medium">International expansion for a retail</h3>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="relative rounded-lg overflow-hidden group bg-white shadow-sm">
                    <a href="case-study" class="absolute inset-0 z-10"></a>
                    <img src="images/case-studies/4.webp" class="rounded-t-lg object-cover w-full h-52 group-hover:scale-105 transition-all duration-300">
                    <div class="p-5">
                        <div class="py-1 px-2.5 text-xs font-medium inline-flex bg-default-100 border border-default-200 rounded mb-2.5">
                            Website Design
                        </div>
                        <h3 class="text-lg font-medium">Website for a green energy consulting firm</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('partials/footer.php'); ?>

</body>

</html>
