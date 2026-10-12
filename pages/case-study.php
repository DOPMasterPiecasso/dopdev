<?php
$case_studies = [
    'barbershop' => [
        'id' => 'barbershop',
        'badge' => 'Barbershop & Grooming',
        'badge_color' => 'primary',
        'title' => '24/7 Online Booking & Express Landing Page for The Heritage Barber Co.',
        'subtitle' => 'How an established Singapore barbershop cut no-shows by 45% and automated 1,400+ monthly appointments with WhatsApp reminder integration.',
        'client' => 'The Heritage Barber Co.',
        'category' => 'Barbershop • Booking System & LP',
        'location' => 'Singapore (Tanjong Pagar & Orchard)',
        'flag' => '🇸🇬',
        'duration' => '3 Weeks',
        'hero_image' => 'images/case-studies/barber.png',
        'alt' => 'The Heritage Barber Co. Booking Preview',
        'results' => [
            [
                'metric' => '+185%',
                'label' => 'Online Appointments',
                'desc' => 'Over 45% of total bookings now occur outside store operating hours.',
            ],
            [
                'metric' => '-45%',
                'label' => 'Reduction in No-Shows',
                'desc' => 'Powered by automated WhatsApp confirmation and 2-hour reminder sequences.',
            ],
            [
                'metric' => 'S$18.4K',
                'label' => 'Monthly Deposits Secured',
                'desc' => 'Pre-authorizations and PayNow deposits eliminate phantom appointments.',
            ],
        ],
        'challenge' => 'The Heritage Barber Co. operated with 6 chairs across 2 locations in central Singapore. Their receptionists spent over 3.5 hours every single day answering manual WhatsApp inquiries, coordinating barber schedules, and dealing with last-minute cancellations and no-shows on peak weekends. They lacked a centralized view of stylist capacity and regularly lost potential clients who wanted to book late at night when the shop was closed.',
        'solution' => 'DOP engineered a high-converting, mobile-first booking landing page paired with an automated multi-chair booking engine. We implemented real-time barber chair availability, automated PayNow and Stripe deposit collection, and two-way WhatsApp notifications that deliver instant booking confirmations, location directions, and reminder alerts 2 hours prior to appointments.',
        'features' => [
            'Real-time multi-barber calendar sync accounting for individual breaks and shifts',
            'Automated WhatsApp Business reminders sent 24h and 2h before haircuts',
            'Non-refundable S$15 weekend deposit gateway integration via PayNow and credit card',
            'Mobile-first client rebooking portal enabling 1-click repeat appointments',
            'Centralized management dashboard for store managers to monitor daily chair utilization',
        ],
        'quote' => 'DOP completely eliminated our booking chaos. Our chairs are now fully booked on weekends without our staff touching the phone, and our no-show rate dropped to virtually zero.',
        'author' => 'Marcus Tan',
        'role' => 'Managing Partner, The Heritage Barber Co.',
        'gallery' => [
            'images/examples/barber-1.png',
            'images/examples/barber-2.png',
            'images/examples/barber-3.png',
        ],
    ],

    'clinic' => [
        'id' => 'clinic',
        'badge' => 'Medical & Aesthetic Clinic',
        'badge_color' => 'primary',
        'title' => 'Patient Intake & Multi-Practitioner Booking System for Lumina Aesthetic',
        'subtitle' => 'Transforming patient consultations, deposit collection, and practitioner room allocation across Melbourne & Sydney clinics.',
        'client' => 'Lumina Aesthetic & Wellness',
        'category' => 'Medical & Aesthetic Clinic • Web System',
        'location' => 'Melbourne & Sydney, Australia',
        'flag' => '🇦🇺',
        'duration' => '6 Weeks',
        'hero_image' => 'images/case-studies/2.webp',
        'alt' => 'Lumina Aesthetic Web System Preview',
        'results' => [
            [
                'metric' => '+240%',
                'label' => 'Consultation Inquiries',
                'desc' => 'Conversion-optimized service pages and frictionless medical intake flow.',
            ],
            [
                'metric' => '12 hrs',
                'label' => 'Saved Per Week on Admin',
                'desc' => 'Automated intake questionnaires and digital patient record synchronization.',
            ],
            [
                'metric' => '98.8%',
                'label' => 'Patient Attendance Rate',
                'desc' => 'Pre-appointment SMS/Email preparation reminders and A$50 deposit hold.',
            ],
        ],
        'challenge' => 'With expanding clinics in Melbourne and Sydney, Lumina Aesthetic struggled to manage practitioner room schedules and specialized treatment durations. Front-desk staff were overloaded with phone bookings and manually emailing pre-treatment medical consent forms, leading to double-booked treatment rooms and costly cancellations for high-ticket cosmetic procedures.',
        'solution' => 'We designed a comprehensive company profile and specialized clinical booking platform. It features treatment-specific scheduling, doctor and aesthetician selection, digital medical intake questionnaires, and deposit pre-authorizations fully compliant with Australian privacy standards.',
        'features' => [
            'Treatment-aware booking logic enforcing room and laser equipment availability',
            'Digital pre-treatment consent and medical history forms sent automatically upon booking',
            'Integrated Stripe payment gateway for consultation deposit authorization',
            'Multi-location practitioner scheduling with distinct Victoria and NSW time rules',
            'Executive dashboard tracking treatment profitability, rebooking rate, and room ROI',
        ],
        'quote' => 'The operational relief has been enormous. Our doctors are fully scheduled, pre-consultation paperwork is completed before arrival, and our patients love the seamless booking experience.',
        'author' => 'Dr. Elena Voss',
        'role' => 'Clinical Director, Lumina Aesthetic Clinic',
        'gallery' => [
            'images/examples/clinic-1.png',
            'images/examples/clinic-2.png',
            'images/examples/clinic-3.png',
        ],
    ],

    'salon' => [
        'id' => 'salon',
        'badge' => 'Luxury Hair & Beauty Salon',
        'badge_color' => 'primary',
        'title' => 'Stylist Roster Scheduling & Digital Treatment Menu for Maison Privée',
        'subtitle' => 'Empowering luxury salon clients to browse hair treatment galleries, choose Senior Stylists, and book multi-service packages.',
        'client' => 'Maison Privée Hair Studio',
        'category' => 'Hair & Beauty Salon • Web Platform',
        'location' => 'Singapore (Orchard Road)',
        'flag' => '🇸🇬',
        'duration' => '4 Weeks',
        'hero_image' => 'images/case-studies/3.webp',
        'alt' => 'Maison Privée Booking Preview',
        'results' => [
            [
                'metric' => '3.2x',
                'label' => 'Weekend Rebooking Rate',
                'desc' => 'Automated follow-up reminders sent 6 weeks after coloring and cuts.',
            ],
            [
                'metric' => '+62%',
                'label' => 'Higher Average Order Value',
                'desc' => 'Intelligent service add-ons (scalp treatment, toner) suggested during checkout.',
            ],
            [
                'metric' => '100%',
                'label' => 'Zero Double-Bookings',
                'desc' => 'Smart timing calculation for processing vs active styling intervals.',
            ],
        ],
        'challenge' => 'Maison Privée faced a unique scheduling challenge: complex hair services (e.g. Balayage + Treatment + Cut) involve active stylist time followed by 45 minutes of color processing time where the stylist can attend to another quick cut. Standard booking software could not handle split processing times, causing severe under-utilization of chairs and stylist bottlenecks.',
        'solution' => 'DOP developed a custom salon booking engine featuring split-interval scheduling, tiered stylist pricing (Director vs Senior Stylist), dynamic add-on upsells at booking time, and automated retention WhatsApp reminders sent 6 weeks post-service.',
        'features' => [
            'Smart split-interval scheduling supporting processing time overlapping',
            'Tiered stylist hierarchy with customizable pricing and commission logic',
            'Visual inspiration gallery with direct "Book This Style" links',
            'Automated post-treatment care tips and scheduled rebooking triggers',
            'Integrated PayNow QR code deposits for peak weekend appointments',
        ],
        'quote' => 'DOP understood our exact workflow limitations that other generic salon booking apps simply couldn\'t solve. Our revenue per chair increased significantly within the first month.',
        'author' => 'Chloe Dupont',
        'role' => 'Creative Director, Maison Privée',
        'gallery' => [
            'images/examples/salon-1.png',
            'images/examples/salon-2.png',
            'images/examples/salon-3.png',
        ],
    ],

    'fitness' => [
        'id' => 'fitness',
        'badge' => 'Fitness & Personal Training',
        'badge_color' => 'primary',
        'title' => 'Trainer Scheduling & Session Credit Portal for Apex Performance',
        'subtitle' => 'Streamlining personal trainer calendars, private studio session bookings, and trial pass conversions in Brisbane.',
        'client' => 'Apex Performance Studio',
        'category' => 'Fitness & Personal Training • Web App',
        'location' => 'Brisbane, Australia',
        'flag' => '🇦🇺',
        'duration' => '4 Weeks',
        'hero_image' => 'images/case-studies/4.webp',
        'alt' => 'Apex Performance Portal Preview',
        'results' => [
            [
                'metric' => '+140%',
                'label' => 'Trial Pass Conversions',
                'desc' => 'Frictionless 2-step booking funnel for initial assessment workouts.',
            ],
            [
                'metric' => '85%',
                'label' => 'Client Self-Rescheduling',
                'desc' => 'Clients modify appointments within policy hours without contacting front desk.',
            ],
            [
                'metric' => '15+ hrs',
                'label' => 'Weekly Admin Time Saved',
                'desc' => 'Zero manual roster updating or session credit tallying on spreadsheets.',
            ],
        ],
        'challenge' => 'Apex Performance had 8 personal trainers working independent rosters across private gym bays. Trainers and clients were constantly rescheduling via text messages, resulting in bay collisions, untracked session credits, and confusion regarding trainer compensation.',
        'solution' => 'DOP built a unified booking web app and trainer portal. Clients purchase session packs, book available bays with their designated trainer, and receive instant calendar confirmations, while trainers can set availability and track their commission payouts.',
        'features' => [
            'Bay capacity locking ensuring no more than 6 private sessions simultaneously',
            'Pre-paid session pack credit deduction and renewal reminder prompts',
            'Trainer mobile web portal to manage available hours and view daily client rosters',
            'Automated 12-hour late cancellation policy enforcement and credit forfeiture',
            'Stripe recurring membership and trial pack checkout integration',
        ],
        'quote' => 'Before DOP, managing 8 trainers and hundreds of client sessions was an admin nightmare. Now everything runs automatically on autopilot, and our trainers can focus 100% on coaching.',
        'author' => 'Liam O\'Connor',
        'role' => 'Head Coach & Founder, Apex Performance',
        'gallery' => [
            'images/examples/personal-trainer-1.png',
            'images/examples/personal-trainer-2.png',
            'images/examples/personal-trainer-3.png',
        ],
    ],
];

// Determine active case study
$case_key = $_GET['case'] ?? 'barbershop';
$aliases = [
    'barber' => 'barbershop',
    'barbershop' => 'barbershop',
    'clinic' => 'clinic',
    'aesthetic' => 'clinic',
    'salon' => 'salon',
    'hair' => 'salon',
    'fitness' => 'fitness',
    'trainer' => 'fitness',
    'personal-trainer' => 'fitness',
];
if (!array_key_exists($case_key, $case_studies)) {
    $case_key = $aliases[$case_key] ?? 'barbershop';
}
$current_case = $case_studies[$case_key];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    $title = htmlspecialchars($current_case['client']) . ' - Case Study Detail'; 
    include('partials/title-meta.php'); 
    ?>

    <?php include('partials/head-css.php'); ?>
</head>

<body>

    <?php include('partials/navbar.php'); ?>

    <!-- Breadcrumb & Case Switcher -->
    <div class="bg-default-100/70 border-b border-default-200 py-4">
        <div class="container">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div class="flex items-center gap-2 text-sm text-default-600">
                    <a href="/" class="hover:text-primary transition-colors">Home</a>
                    <i class="iconify tabler--chevron-right size-4 text-default-400"></i>
                    <a href="case-studies" class="hover:text-primary transition-colors">Case Studies</a>
                    <i class="iconify tabler--chevron-right size-4 text-default-400"></i>
                    <span class="text-default-950 font-medium"><?= htmlspecialchars($current_case['client']) ?></span>
                </div>

                <!-- Case Studies Switcher -->
                <div class="flex items-center gap-1.5 flex-wrap">
                    <span class="text-xs uppercase tracking-wider font-semibold text-default-500 me-1 hidden lg:inline-block">Case Studies:</span>
                    <?php foreach ($case_studies as $k => $cs): ?>
                        <a href="case-study?case=<?= $k ?>" class="py-1.5 px-3 text-xs md:text-sm font-medium rounded-lg transition-all <?= $k === $case_key ? 'bg-primary text-white shadow-xs' : 'bg-white text-default-700 hover:text-default-950 hover:bg-default-50 border border-default-200' ?>">
                            <?= $cs['flag'] ?> <?= htmlspecialchars($cs['client']) ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="relative size-full overflow-hidden md:py-16 py-10 bg-white">
        <div class="container max-w-245!">
            <div class="mb-8 space-y-4 text-center">
                <div class="py-1.5 px-3.5 text-xs font-semibold inline-flex items-center gap-2 bg-primary/10 text-primary border border-primary/20 rounded-full uppercase tracking-wider">
                    <span><?= $current_case['flag'] ?> <?= htmlspecialchars($current_case['location']) ?></span>
                    <span>•</span>
                    <span><?= htmlspecialchars($current_case['badge']) ?></span>
                </div>

                <h1 class="md:text-[48px] text-3xl leading-[1.2em] text-default-950 font-semibold">
                    <?= htmlspecialchars($current_case['title']) ?>
                </h1>

                <p class="md:max-w-4/5 mx-auto text-default-600 text-base md:text-lg leading-relaxed">
                    <?= htmlspecialchars($current_case['subtitle']) ?>
                </p>
            </div>

            <div class="my-10 rounded-2xl overflow-hidden border border-default-200 shadow-md group" data-toggle="gallery">
                <a href="<?= htmlspecialchars($current_case['hero_image']) ?>" class="block overflow-hidden relative">
                    <img src="<?= htmlspecialchars($current_case['hero_image']) ?>" alt="<?= htmlspecialchars($current_case['alt']) ?>" class="size-full object-cover max-h-[520px] group-hover:scale-105 transition-all duration-300">
                    <div class="absolute inset-0 bg-default-950/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <span class="size-12 rounded-full bg-white/95 text-default-950 flex items-center justify-center shadow-md transform scale-90 group-hover:scale-100 transition-transform duration-300">
                            <i class="iconify tabler--zoom-in size-6"></i>
                        </span>
                    </div>
                </a>
            </div>

            <!-- Meta Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 p-6 bg-default-100 rounded-xl mb-12.5 border border-default-200">
                <div>
                    <span class="text-xs uppercase tracking-wider text-default-500 block mb-1">Client</span>
                    <span class="font-medium text-default-900"><?= htmlspecialchars($current_case['client']) ?></span>
                </div>
                <div>
                    <span class="text-xs uppercase tracking-wider text-default-500 block mb-1">Category</span>
                    <span class="font-medium text-default-900"><?= htmlspecialchars($current_case['category']) ?></span>
                </div>
                <div>
                    <span class="text-xs uppercase tracking-wider text-default-500 block mb-1">Duration</span>
                    <span class="font-medium text-default-900"><?= htmlspecialchars($current_case['duration']) ?></span>
                </div>
                <div>
                    <span class="text-xs uppercase tracking-wider text-default-500 block mb-1">Location</span>
                    <span class="font-medium text-default-900"><?= htmlspecialchars($current_case['location']) ?></span>
                </div>
            </div>

            <!-- Key Results & Impact Metrics -->
            <div class="mb-14">
                <span class="text-xs uppercase font-bold tracking-wider text-primary mb-2 block">Measurable Results</span>
                <h2 class="text-[30px] mb-6 font-semibold text-default-950">Key Results & Business Impact</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <?php foreach ($current_case['results'] as $res): ?>
                        <div class="p-6 border border-default-200 bg-white rounded-xl shadow-xs text-center flex flex-col justify-between">
                            <div>
                                <h3 class="text-4xl font-bold text-primary mb-1"><?= htmlspecialchars($res['metric']) ?></h3>
                                <p class="text-base font-semibold text-default-950 mb-2"><?= htmlspecialchars($res['label']) ?></p>
                            </div>
                            <p class="text-xs text-default-500 leading-relaxed"><?= htmlspecialchars($res['desc']) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Challenge Section -->
            <div class="mb-12">
                <span class="text-xs uppercase font-bold tracking-wider text-primary mb-2 block">The Starting Point</span>
                <h2 class="text-[30px] mb-4 font-semibold text-default-950">The Challenge & Operational Bottleneck</h2>
                <p class="text-default-600 text-base leading-relaxed">
                    <?= htmlspecialchars($current_case['challenge']) ?>
                </p>
            </div>

            <!-- Solution Section -->
            <div class="mb-12">
                <span class="text-xs uppercase font-bold tracking-wider text-primary mb-2 block">Our Approach</span>
                <h2 class="text-[30px] mb-4 font-semibold text-default-950">The DOP Custom Solution Implemented</h2>
                <p class="text-default-600 text-base leading-relaxed mb-6">
                    <?= htmlspecialchars($current_case['solution']) ?>
                </p>

                <div class="p-6 bg-default-50 border border-default-200 rounded-xl">
                    <h4 class="font-semibold text-default-950 text-base mb-4">Core Systems & Capabilities Deployed:</h4>
                    <ul class="space-y-3">
                        <?php foreach ($current_case['features'] as $feat): ?>
                            <li class="flex items-start gap-3 text-sm text-default-700">
                                <i class="iconify tabler--circle-check size-5 text-primary shrink-0 mt-0.5"></i>
                                <span><?= htmlspecialchars($feat) ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <!-- Live Interface Gallery -->
            <div class="mb-14">
                <span class="text-xs uppercase font-bold tracking-wider text-primary mb-2 block">UI / UX Design</span>
                <h2 class="text-[30px] mb-6 font-semibold text-default-950">Live Platform Interface Preview</h2>
                <div class="grid md:grid-cols-3 gap-6" data-toggle="gallery">
                    <?php foreach ($current_case['gallery'] as $gal_img): ?>
                        <div class="relative rounded-xl overflow-hidden group border border-default-200 bg-white shadow-xs hover:shadow-md transition-all">
                            <a href="<?= htmlspecialchars($gal_img) ?>" class="block overflow-hidden relative">
                                <img src="<?= htmlspecialchars($gal_img) ?>" alt="Interface Preview" class="w-full h-auto object-cover group-hover:scale-105 transition-all duration-300">
                                <div class="absolute inset-0 bg-default-950/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                    <span class="size-10 rounded-full bg-white/95 text-default-950 flex items-center justify-center shadow-md">
                                        <i class="iconify tabler--zoom-in size-5"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Client Testimonial Quote -->
            <blockquote class="bg-default-950 text-white rounded-2xl p-8 md:p-10 mb-14 relative overflow-hidden">
                <div class="flex items-center gap-1 text-primary mb-4">
                    <i class="iconify tabler--star-filled size-5"></i>
                    <i class="iconify tabler--star-filled size-5"></i>
                    <i class="iconify tabler--star-filled size-5"></i>
                    <i class="iconify tabler--star-filled size-5"></i>
                    <i class="iconify tabler--star-filled size-5"></i>
                </div>
                <em class="italic text-lg md:text-xl block mb-6 text-white leading-relaxed">
                    "<?= htmlspecialchars($current_case['quote']) ?>"
                </em>
                <div>
                    <span class="font-semibold text-white block text-base"><?= htmlspecialchars($current_case['author']) ?></span>
                    <span class="text-xs text-default-400"><?= htmlspecialchars($current_case['role']) ?></span>
                </div>
            </blockquote>

            <!-- Bottom CTA Section -->
            <div class="p-8 md:p-10 rounded-2xl bg-default-100 border border-default-200 text-center space-y-4">
                <h3 class="text-2xl md:text-3xl font-semibold text-default-950">Ready to Achieve Similar Results?</h3>
                <p class="text-default-600 text-sm md:text-base max-w-lg mx-auto">
                    Let's discuss how DOP can build an automated booking engine and company website tailored for your service brand.
                </p>
                <div class="pt-2 flex flex-wrap justify-center gap-4">
                    <a href="contact" class="group py-3.5 px-7 inline-flex items-center justify-center gap-4 rounded-lg bg-primary text-white font-medium transition-all shadow-sm">
                        <span class="relative block overflow-hidden">
                            <span class="block group-hover:-translate-y-7 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                Book a Demo Call
                            </span>
                            <span class="absolute top-7 inset-s-0 group-hover:top-0 duration-[1.125s] ease-[cubic-bezier(0.19,1,0.22,1)]">
                                Book a Demo Call
                            </span>
                        </span>
                        <i class="iconify tabler--arrow-up-right size-5"></i>
                    </a>
                    <a href="case-studies" class="py-3.5 px-6 inline-flex items-center justify-center rounded-lg border border-default-200 hover:bg-white text-default-800 font-medium text-sm transition-all">
                        Browse More Case Studies
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Case Studies -->
    <section class="lg:py-20 md:py-16 py-10 bg-default-100 border-t border-default-200">
        <div class="container">
            <div class="flex items-center justify-between mb-10">
                <div>
                    <span class="text-xs uppercase font-bold tracking-wider text-primary mb-1 block">Proven Portfolio</span>
                    <h2 class="lg:text-4xl text-3xl font-semibold text-default-950">Other Client Case Studies</h2>
                </div>
                <a href="case-studies" class="text-primary hover:underline font-semibold inline-flex items-center gap-1.5 text-sm">
                    View all case studies
                    <i class="iconify tabler--arrow-right size-4"></i>
                </a>
            </div>

            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-7.5">
                <?php 
                $count = 0;
                foreach ($case_studies as $k => $other_case): 
                    if ($k === $case_key) continue;
                    if ($count >= 3) break;
                    $count++;
                ?>
                    <div class="relative rounded-2xl overflow-hidden group bg-white border border-default-200 shadow-xs hover:shadow-md transition-all flex flex-col justify-between">
                        <a href="case-study?case=<?= $k ?>" class="absolute inset-0 z-10"></a>
                        <div>
                            <div class="overflow-hidden h-52">
                                <img src="<?= htmlspecialchars($other_case['hero_image']) ?>" alt="<?= htmlspecialchars($other_case['client']) ?>" class="object-cover size-full group-hover:scale-105 transition-all duration-300">
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="py-1 px-2.5 text-xs font-semibold rounded bg-default-100 text-default-700">
                                        <?= $other_case['flag'] ?> <?= htmlspecialchars($other_case['location']) ?>
                                    </span>
                                </div>
                                <h3 class="text-xl font-semibold text-default-950 mb-2 leading-snug">
                                    <?= htmlspecialchars($other_case['client']) ?>
                                </h3>
                                <p class="text-sm text-default-600 line-clamp-2">
                                    <?= htmlspecialchars($other_case['subtitle']) ?>
                                </p>
                            </div>
                        </div>

                        <div class="px-6 pb-6 pt-2 border-t border-default-100 flex items-center justify-between">
                            <span class="text-xs font-bold text-primary"><?= $other_case['results'][0]['metric'] ?> <?= $other_case['results'][0]['label'] ?></span>
                            <span class="text-xs font-semibold text-default-900 group-hover:text-primary transition-colors flex items-center gap-1">
                                Read Case
                                <i class="iconify tabler--arrow-right size-3.5"></i>
                            </span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php include('partials/footer.php'); ?>

</body>

</html>
