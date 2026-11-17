<?php
// Singapore Home Service Landing Page Promotion
$waNumber = '6282125189383';
$waBase = 'https://wa.me/' . $waNumber;

function getWaLink($msg, $waBase) {
    return $waBase . '?text=' . rawurlencode($msg);
}

$waMockup = getWaLink("Hi Dopdev, I'd like a free homepage mockup. My business is: ", $waBase);
$waSpot = getWaLink("Hi Dopdev, I want to claim one of the 5 spots. My business is: ", $waBase);
$waRevamp = getWaLink("Hi Dopdev, I'd like a free review of my current website. My website is: ", $waBase);
$waCare = getWaLink("Hi Dopdev, I'd like to ask about your website care plans. My website is: ", $waBase);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOPDEV | A Website That Gets Your Phone Ringing · Singapore Home Services</title>
    <meta name="description" content="Fixed-price landing pages for Singapore home service businesses: aircon, cleaning, electrical, plumbing and renovation. WhatsApp enquiries built in. Ready in 10 days.">
    <link rel="icon" type="image/webp" href="/logo/logo.webp">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #1A1A1A;       /* Monochrome Primary (Black) */
            --primary-hover: #333333;
            --secondary: #1A1A1A;     /* Black / Dark Surface */
            --tertiary: #FFFFFF;      /* White */
            --neutral: #888888;       /* Cool Grey */
            --surface: #1A1A1A;       /* Dark Solid Accent */
            --accent: #F5F5F5;        /* Light Grey Tint */
            --border-line: #E5E5E5;
            --border-dark: #333333;
            --font-swiss: "Helvetica Neue", Helvetica, Arial, sans-serif;
            --font-mono: "JetBrains Mono", monospace;
            --radius: 8px;
            --max-w: 900px;
        }

        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
            background: var(--tertiary);
            color: var(--secondary);
            font-family: var(--font-swiss);
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
        }

        body {
            line-height: 1.6;
            font-size: 1rem;
            color: var(--secondary);
            background: var(--tertiary);
            overflow-x: hidden;
        }

        /* Typography */
        h1, h2, h3, h4, h5, h6 {
            font-family: var(--font-swiss);
            font-weight: 700;
            letter-spacing: -0.03em;
            line-height: 1.15;
            color: var(--secondary);
        }

        .hero-title {
            font-size: clamp(2.35rem, 5.2vw, 4rem);
            font-weight: 700;
            letter-spacing: -0.035em;
            line-height: 1.1;
        }

        .section-title {
            font-size: clamp(1.85rem, 3.6vw, 2.5rem);
            letter-spacing: -0.03em;
            line-height: 1.15;
        }

        .mono {
            font-family: var(--font-mono);
            font-size: 0.8125rem;
            letter-spacing: 0.04em;
            text-transform: uppercase;
        }

        .text-accent-red {
            color: var(--secondary);
            text-decoration: underline;
            text-decoration-thickness: 3px;
            text-underline-offset: 6px;
        }

        p {
            max-width: 72ch;
            color: #3d4342;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        /* Layout Structure */
        .container {
            width: 100%;
            max-width: var(--max-w);
            margin-left: auto;
            margin-right: auto;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .section-gap {
            padding-top: clamp(4rem, 8vw, 7.5rem);
            padding-bottom: clamp(4rem, 8vw, 7.5rem);
            border-bottom: 1px solid var(--border-line);
        }

        /* Swiss Grid System Utilities */
        .grid-swiss-12 {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 1.5rem;
        }

        /* Navigation */
        .navbar {
            position: relative;
            z-index: 100;
            background: #FFFFFF;
            border-bottom: 1px solid var(--border-line);
            height: 72px;
            display: flex;
            align-items: center;
        }

        .navbar-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        .nav-brand {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
        }

        .nav-brand img {
            height: 32px;
            width: auto;
            display: block;
        }

        .brand-badge {
            background: var(--secondary);
            color: var(--tertiary);
            padding: 0.2rem 0.5rem;
            font-size: 0.7rem;
            font-family: var(--font-mono);
            border-radius: 4px;
            letter-spacing: 0.08em;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 2rem;
            font-size: 0.9375rem;
            font-weight: 500;
        }

        .nav-links a {
            color: #4a504f;
            transition: color 200ms ease;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        /* Buttons */
        .btn-primary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            background-color: var(--secondary);
            color: var(--tertiary);
            font-family: var(--font-swiss);
            font-weight: 600;
            font-size: 0.9375rem;
            padding: 12px 22px;
            border-radius: var(--radius);
            border: 1px solid var(--secondary);
            cursor: pointer;
            transition: background-color 200ms ease, transform 150ms ease, box-shadow 200ms ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.12);
            text-align: center;
        }

        .btn-primary:hover {
            background-color: #333333;
            border-color: #333333;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .btn-primary:active {
            transform: translateY(1px);
        }

        .btn-secondary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            background-color: transparent;
            color: var(--secondary);
            font-family: var(--font-swiss);
            font-weight: 600;
            font-size: 0.9375rem;
            padding: 12px 22px;
            border-radius: var(--radius);
            border: 1.5px solid var(--neutral);
            cursor: pointer;
            transition: all 200ms ease;
            text-align: center;
        }

        .btn-secondary:hover {
            background-color: var(--accent);
            border-color: var(--secondary);
            color: var(--secondary);
        }

        .btn-white {
            background-color: var(--tertiary);
            color: var(--secondary);
            border: 1px solid var(--tertiary);
            font-weight: 600;
            font-size: 0.9375rem;
            padding: 12px 22px;
            border-radius: var(--radius);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            transition: all 200ms ease;
        }

        .btn-white:hover {
            background-color: var(--accent);
            transform: translateY(-1px);
        }

        /* Hero Section */
        .hero-section {
            padding-top: 30px;
            padding-bottom: clamp(3.5rem, 6vw, 5.5rem);
            border-bottom: 1px solid var(--border-line);
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.65rem;
            background-color: var(--accent);
            border: 1px solid var(--border-line);
            padding: 0.4rem 0.85rem;
            border-radius: 4px;
            margin-bottom: 1.75rem;
            font-family: var(--font-mono);
            font-size: 0.8125rem;
            color: var(--secondary);
        }

        .hero-badge-dot {
            width: 8px;
            height: 8px;
            background-color: var(--secondary);
            border-radius: 50%;
            display: inline-block;
        }

        .hero-sub {
            font-size: 1.125rem;
            line-height: 1.6;
            color: #434a49;
            margin-top: 1.5rem;
            margin-bottom: 2.25rem;
        }

        .hero-action-group {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
            align-items: flex-start;
        }

        .hero-subtext {
            font-size: 0.875rem;
            color: #636b6a;
        }

        .hero-trust-bar {
            margin-top: 2.5rem;
            padding-top: 1.75rem;
            border-top: 1px solid var(--border-line);
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem 2.5rem;
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 0.65rem;
            font-family: var(--font-mono);
            font-size: 0.8125rem;
            color: var(--secondary);
            font-weight: 500;
        }

        .trust-item svg {
            color: var(--primary);
            flex-shrink: 0;
        }

        /* Hero Right Data Card */
        .hero-card {
            background-color: var(--secondary);
            color: var(--tertiary);
            border-radius: var(--radius);
            padding: 2.25rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border: 1px solid var(--border-dark);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            position: relative;
            overflow: hidden;
        }

        .hero-card::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background-color: var(--tertiary);
        }

        .hero-card-header {
            border-bottom: 1px solid var(--border-dark);
            padding-bottom: 1.25rem;
            margin-bottom: 1.5rem;
        }

        .hero-card-metric {
            display: flex;
            flex-direction: column;
            gap: 0.35rem;
            margin-bottom: 1.5rem;
        }

        .hero-card-metric-num {
            font-family: var(--font-mono);
            font-size: 2.75rem;
            font-weight: 700;
            line-height: 1;
            color: var(--tertiary);
        }

        .hero-card-footer {
            border-top: 1px solid var(--border-dark);
            padding-top: 1.25rem;
            margin-top: 1.5rem;
            font-family: var(--font-mono);
            font-size: 0.75rem;
            color: var(--neutral);
            display: flex;
            justify-content: space-between;
        }

        /* Problem Section */
        .problem-intro {
            font-size: 1.125rem;
            color: #555d5c;
            margin-top: 1rem;
            margin-bottom: 2.5rem;
        }

        .problem-card {
            background: var(--tertiary);
            border: 1px solid var(--border-line);
            border-radius: var(--radius);
            padding: 2rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: border-color 200ms ease;
        }

        .problem-card:hover {
            border-color: var(--neutral);
        }

        .card-number {
            font-family: var(--font-mono);
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 1.25rem;
        }

        .problem-card h3 {
            font-size: 1.25rem;
            margin-bottom: 0.75rem;
        }

        .problem-outro {
            margin-top: 2.5rem;
            padding: 1.25rem 1.75rem;
            background: var(--accent);
            border-left: 3px solid var(--secondary);
            border-radius: 0 var(--radius) var(--radius) 0;
            font-size: 1rem;
            color: var(--secondary);
            font-weight: 500;
        }

        /* Offer Section (The Enquiry-Ready Landing Page) */
        .offer-box {
            border: 2px solid var(--secondary);
            border-radius: var(--radius);
            background: var(--tertiary);
            position: relative;
            box-shadow: 0 4px 20px rgba(0,0,0,0.06);
            overflow: hidden;
        }

        .offer-header-banner {
            background: var(--secondary);
            color: var(--tertiary);
            padding: 0.65rem 1.5rem;
            font-family: var(--font-mono);
            font-size: 0.8125rem;
            letter-spacing: 0.08em;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .offer-body {
            padding: clamp(2rem, 4vw, 3rem);
        }

        .price-badge-wrap {
            display: flex;
            align-items: baseline;
            gap: 1rem;
            margin-bottom: 0.5rem;
        }

        .price-current {
            font-family: var(--font-mono);
            font-size: clamp(2.5rem, 4.5vw, 3.5rem);
            font-weight: 700;
            color: var(--secondary);
            letter-spacing: -0.04em;
        }

        .price-old {
            font-family: var(--font-mono);
            font-size: 1.5rem;
            color: var(--neutral);
            text-decoration: line-through;
        }

        .price-sub {
            font-family: var(--font-mono);
            font-size: 0.875rem;
            color: #5d6665;
            margin-bottom: 2.25rem;
        }

        .feature-checklist {
            list-style: none;
            display: grid;
            grid-template-columns: 1fr;
            gap: 0.85rem;
            margin-bottom: 2.25rem;
        }

        .feature-checklist li {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            font-size: 0.9675rem;
            color: #2b3030;
        }

        .feature-checklist li svg {
            color: var(--primary);
            flex-shrink: 0;
            margin-top: 0.2rem;
        }

        .not-included-box {
            padding: 1rem 1.25rem;
            background: var(--accent);
            border-radius: var(--radius);
            font-size: 0.875rem;
            color: #555e5d;
            margin-bottom: 2rem;
            border: 1px solid var(--border-line);
        }

        /* Offer Highlight Cards (Side Cards Stacked) */
        .highlight-cards-stack {
            display: flex;
            flex-direction: column;
            border: 2px solid #1A1A1A;
            border-radius: var(--radius);
            box-shadow: 4px 4px 0px #1A1A1A;
            overflow: hidden;
            background: #FAFAFA;
            height: 100%;
        }

        .highlight-card {
            background: #FAFAFA;
            border: none;
            border-radius: 0;
            padding: 1.75rem;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex: 1 1 50%;
            gap: 1rem;
            box-shadow: none;
            transition: background-color 150ms ease;
        }

        .highlight-card + .highlight-card {
            border-top: 2px solid #1A1A1A;
        }

        .highlight-card:hover {
            background-color: #F4F4F4;
        }

        .highlight-card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .highlight-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.45rem;
            font-family: var(--font-mono);
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            padding: 0.3rem 0.65rem;
            border-radius: 4px;
            background: #1A1A1A;
            color: #FFFFFF;
        }

        .highlight-badge-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #10B981;
        }

        .highlight-card-icon {
            width: 40px;
            height: 40px;
            border-radius: 6px;
            background: #FFFFFF;
            border: 1.5px solid #1A1A1A;
            color: #1A1A1A;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .highlight-card-body {
            display: flex;
            flex-direction: column;
            gap: 0.4rem;
        }

        .highlight-card-title {
            font-size: 1.35rem;
            font-weight: 800;
            color: #1A1A1A;
            letter-spacing: -0.03em;
            line-height: 1.15;
        }

        .highlight-card-callout {
            font-size: 1.2rem;
            font-weight: 700;
            color: #111111;
            line-height: 1.35;
        }

        .highlight-card-desc {
            font-size: 1.025rem;
            line-height: 1.55;
            color: #3d4342;
        }

        .highlight-card-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            padding-top: 0.75rem;
            border-top: 1.5px dashed #D0D0D0;
        }

        .highlight-tag-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            font-size: 0.8rem;
            font-weight: 700;
            color: #111111;
            background: #EAEAEA;
            border: 1px solid #D5D5D5;
            padding: 0.3rem 0.6rem;
            border-radius: 4px;
            font-family: var(--font-mono);
        }

        /* Revamp & Care Section */
        .service-card {
            background: var(--tertiary);
            border: 1px solid var(--border-line);
            border-radius: var(--radius);
            padding: clamp(1.75rem, 3vw, 2.5rem);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 200ms ease;
        }

        .service-card:hover {
            border-color: var(--secondary);
            box-shadow: 0 4px 16px rgba(0,0,0,0.06);
        }

        .service-tag {
            font-family: var(--font-mono);
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            color: var(--surface);
            font-weight: 600;
            margin-bottom: 0.75rem;
        }

        .care-table {
            width: 100%;
            border-collapse: collapse;
            margin: 1.5rem 0;
            font-size: 0.875rem;
        }

        .care-table th, .care-table td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid var(--border-line);
        }

        .care-table th {
            font-family: var(--font-mono);
            font-size: 0.75rem;
            text-transform: uppercase;
            color: #636c6b;
            background: var(--accent);
        }

        .care-table td:first-child {
            font-weight: 600;
            color: var(--secondary);
        }

        .care-table td:nth-child(2) {
            font-family: var(--font-mono);
            font-weight: 600;
            color: var(--primary);
            white-space: nowrap;
        }

        .services-note {
            font-size: 0.8125rem;
            color: #727c7b;
            margin-top: 1.5rem;
            line-height: 1.5;
        }

        /* Value Section & Comparison Table */
        .comparison-table-wrapper {
            overflow-x: auto;
            border: 1px solid var(--border-line);
            border-radius: var(--radius);
            margin-top: 2rem;
            background: var(--tertiary);
        }

        .comparison-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            min-width: 580px;
        }

        .comparison-table th, .comparison-table td {
            padding: 1.1rem 1.25rem;
            border-bottom: 1px solid var(--border-line);
            font-size: 0.9375rem;
        }

        .comparison-table th {
            font-family: var(--font-mono);
            font-size: 0.8125rem;
            text-transform: uppercase;
            background: var(--accent);
            color: var(--secondary);
        }

        .comparison-table th.col-accent,
        .comparison-table td.col-accent {
            background-color: var(--accent);
            color: var(--secondary);
            font-weight: 700;
            border-left: 2px solid var(--secondary);
            border-right: 2px solid var(--secondary);
        }

        .comparison-table th.col-accent {
            background-color: var(--secondary);
            color: var(--tertiary);
            border-left: 2px solid var(--secondary);
            border-right: 2px solid var(--secondary);
        }

        /* Portfolio Section */
        .portfolio-card {
            border: 1px solid var(--border-line);
            border-radius: var(--radius);
            background: var(--tertiary);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: transform 200ms ease, box-shadow 200ms ease, border-color 200ms ease;
        }

        .portfolio-card:hover {
            transform: translateY(-2px);
            border-color: var(--secondary);
            box-shadow: 0 4px 16px rgba(0,0,0,0.06);
        }

        .portfolio-thumb {
            width: 100%;
            height: 220px;
            background-color: var(--accent);
            overflow: hidden;
            border-bottom: 1px solid var(--border-line);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .portfolio-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top;
            filter: grayscale(100%);
            transition: transform 300ms ease, filter 300ms ease;
        }

        .portfolio-card:hover .portfolio-thumb img {
            transform: scale(1.02);
            filter: grayscale(0%);
        }

        .portfolio-info {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            justify-content: space-between;
        }

        .portfolio-info h3 {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }

        .portfolio-info p {
            font-size: 0.9375rem;
            color: #586160;
            margin-bottom: 1.25rem;
        }

        .portfolio-link {
            font-family: var(--font-mono);
            font-size: 0.8125rem;
            font-weight: 600;
            color: var(--surface);
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            text-transform: uppercase;
        }

        .portfolio-link:hover {
            color: var(--primary);
        }

        /* How it works */
        .steps-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
            margin-top: 2.5rem;
        }

        .step-card {
            border: 1px solid var(--border-line);
            border-radius: var(--radius);
            padding: 1.75rem 1.5rem;
            background: var(--tertiary);
            display: flex;
            flex-direction: column;
        }

        .step-num {
            font-family: var(--font-mono);
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--primary);
            line-height: 1;
            margin-bottom: 1.25rem;
        }

        .step-card h3 {
            font-size: 1.15rem;
            margin-bottom: 0.5rem;
        }

        .step-card p {
            font-size: 0.9375rem;
            color: #555d5c;
        }

        /* Promise Section */
        .promise-banner {
            background-color: var(--secondary);
            color: var(--tertiary);
            border-radius: var(--radius);
            padding: clamp(2.5rem, 5vw, 4rem);
            border: 1px solid var(--border-dark);
            position: relative;
        }

        .promise-banner h2 {
            color: var(--tertiary);
            font-size: clamp(1.75rem, 3.5vw, 2.5rem);
            margin-bottom: 1rem;
        }

        .promise-banner p {
            color: #c7d0cf;
            font-size: 1.15rem;
            max-width: 65ch;
        }

        /* FAQ Section */
        .faq-list {
            margin-top: 2rem;
            border-top: 1px solid var(--border-line);
        }

        .faq-item {
            border-bottom: 1px solid var(--border-line);
        }

        .faq-button {
            width: 100%;
            background: none;
            border: none;
            padding: 1.5rem 0;
            text-align: left;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-family: var(--font-swiss);
            font-weight: 600;
            font-size: 1.125rem;
            color: var(--secondary);
            transition: color 150ms ease;
        }

        .faq-button:hover {
            color: var(--primary);
        }

        .faq-icon {
            font-family: var(--font-mono);
            font-size: 1.25rem;
            transition: transform 200ms ease;
            flex-shrink: 0;
            margin-left: 1rem;
            color: var(--neutral);
        }

        .faq-item.active .faq-icon {
            transform: rotate(45deg);
            color: var(--primary);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 250ms ease, padding-bottom 250ms ease;
            color: #4b5352;
            font-size: 0.9675rem;
            line-height: 1.6;
        }

        .faq-item.active .faq-answer {
            padding-bottom: 1.5rem;
        }

        /* Final CTA Section */
        .cta-box {
            background-color: var(--secondary);
            color: var(--tertiary);
            border-radius: var(--radius);
            padding: clamp(3rem, 6vw, 5rem);
            text-align: left;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 1.5rem;
            border: 1px solid var(--border-dark);
        }

        .cta-box h2 {
            color: var(--tertiary);
            font-size: clamp(2rem, 4vw, 3rem);
        }

        .cta-box p {
            color: #d5d5d5;
            font-size: 1.15rem;
        }

        /* Footer */
        .footer {
            padding: 3rem 0;
            background: var(--tertiary);
            border-top: 1px solid var(--border-line);
            font-size: 0.875rem;
            color: #6d7675;
        }

        .footer-content {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .footer-line-1 {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1rem;
            align-items: center;
            font-family: var(--font-mono);
            font-size: 0.8125rem;
            color: var(--secondary);
        }

        .footer-line-2 {
            font-size: 0.8125rem;
            color: #828c8b;
        }

        /* Floating WhatsApp for mobile */
        .wa-float-btn {
            position: fixed;
            bottom: 1.5rem;
            right: 1.5rem;
            z-index: 200;
            background-color: var(--secondary);
            color: var(--tertiary);
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.25);
            border: 1px solid var(--border-dark);
            transition: transform 200ms ease, background-color 200ms ease;
        }

        .wa-float-btn:hover {
            transform: scale(1.06);
            background-color: #333333;
        }

        /* Side Sticky Banners */
        .side-banner {
            position: fixed;
            top: 50%;
            transform: translateY(-50%);
            z-index: 90;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 200ms ease;
        }

        .side-banner-left {
            right: calc(50% + (var(--max-w) / 2) + 16px);
        }

        .side-banner-right {
            left: calc(50% + (var(--max-w) / 2) + 16px);
        }

        .side-banner img {
            margin-top: 50px;
            width: 190px;
            max-width: 14vw;
            height: auto;
            transition: transform 200ms ease, box-shadow 200ms ease;
        }

        /* Hide side banners if screen is not wide enough */
        @media (max-width: 1320px) {
            .side-banner {
                display: none;
            }
        }

        /* Bottom Sticky Banner */
        .bottom-banner-wrap {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 190;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 1rem 0.75rem 1rem;
            pointer-events: none;
            transition: transform 300ms cubic-bezier(0.16, 1, 0.3, 1), opacity 300ms ease;
        }

        .bottom-banner-wrap.is-closed {
            transform: translateY(120%);
            opacity: 0;
            pointer-events: none;
        }

        .bottom-banner-inner {
            position: relative;
            max-width: min(620px, 94vw);
            width: fit-content;
            display: flex;
            align-items: center;
            pointer-events: auto;
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.22);
            overflow: visible;
        }

        .bottom-banner-link {
            display: block;
            width: auto;
            text-decoration: none;
            line-height: 0;
            border-radius: 12px;
            overflow: hidden;
            border: 1.5px solid #1A1A1A;
            background: #1A1A1A;
        }

        .bottom-banner-link img {
            width: 100%;
            max-width: 620px;
            height: auto;
            display: block;
            object-fit: cover;
            transition: transform 200ms ease;
        }

        .bottom-banner-link:hover img {
            transform: scale(1.01);
        }

        .bottom-banner-close {
            position: absolute;
            top: -12px;
            right: -12px;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #1A1A1A;
            color: #FFFFFF;
            border: 2px solid #FFFFFF;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 10;
            transition: background 150ms ease, transform 150ms ease;
        }

        .bottom-banner-close:hover {
            background: #333333;
            transform: scale(1.1);
        }

        @media (max-width: 768px) {
            .bottom-banner-wrap {
                padding: 0 0.5rem 0.5rem 0.5rem;
            }
            .bottom-banner-close {
                top: -10px;
                right: -6px;
                width: 28px;
                height: 28px;
            }
            .wa-float-btn {
                bottom: 5.5rem; /* give space so bottom banner doesn't cover WhatsApp button when visible */
            }
        }

        /* Responsive Breakpoints */
        @media (max-width: 1024px) {
            .steps-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .grid-swiss-12 {
                grid-template-columns: 1fr;
            }
            .grid-col-8, .grid-col-7, .grid-col-5, .grid-col-4, .grid-col-6 {
                grid-column: span 12 !important;
            }
            .nav-links {
                display: none;
            }
            .steps-container {
                grid-template-columns: 1fr;
            }
            .hero-card {
                margin-top: 1.5rem;
            }
            .hero-action-group {
                width: 100%;
            }
            .btn-primary:not(.nav-btn-wa), .btn-secondary, .btn-white {
                width: 100%;
            }
            .nav-btn-wa {
                width: auto !important;
                padding: 8px 14px !important;
                font-size: 0.8125rem !important;
            }
        }

        /* Swiss Grid Span Classes */
        .col-span-12 { grid-column: span 12; }
        .col-span-8  { grid-column: span 8; }
        .col-span-7  { grid-column: span 7; }
        .col-span-6  { grid-column: span 6; }
        .col-span-5  { grid-column: span 5; }
        .col-span-4  { grid-column: span 4; }
    </style>
</head>
<body>

    <!-- Sticky Side Banners -->
    <a href="<?php echo htmlspecialchars($waMockup); ?>" target="_blank" rel="noopener noreferrer" class="side-banner side-banner-right" aria-label="WhatsApp Offer Left Banner">
        <img src="/images/banner/left.webp" alt="DOPDEV Promotion Banner" width="160" height="480">
    </a>
    <a href="<?php echo htmlspecialchars($waMockup); ?>" target="_blank" rel="noopener noreferrer" class="side-banner side-banner-left" aria-label="WhatsApp Offer Right Banner">
        <img src="/images/banner/kanan.webp" alt="DOPDEV Promotion Banner" width="160" height="480">
    </a>

    <!-- 1. Navbar -->
    <header class="navbar">
        <div class="container navbar-inner">
            <a href="/" class="nav-brand">
                <img src="/logo/logodophitam.webp" alt="DOPDEV">
            </a>
            <!-- <nav class="nav-links">
                <a href="#offer">Offer</a>
                <a href="#services">Revamp & Care</a>
                <a href="#portfolio">Demos</a>
                <a href="#how-it-works">Process</a>
                <a href="#faq">Questions</a>
            </nav> -->
            <a href="<?php echo htmlspecialchars($waMockup); ?>" target="_blank" rel="noopener noreferrer" class="btn-primary nav-btn-wa" style="padding: 9px 18px; font-size: 0.875rem;">
                WhatsApp Us
            </a>
        </div>
    </header>

    <main>
        <!-- 2. Hero Section -->
        <section class="hero-section">
            <div class="container">
                <div class="grid-swiss-12" style="align-items: center;">
                    <div class="col-span-7">
                        <div class="hero-badge">
                            <span class="hero-badge-dot"></span>
                            <span>Launch offer: S$690 (usual S$990) · Only 5 spots this month</span>
                        </div>
                        <h1 class="hero-title">
                            A Website That Gets Your <span class="text-accent-red">Phone Ringing.</span> Ready in 10 Days.
                        </h1>
                        <p class="hero-sub">
                            Landing pages for Singapore home service businesses: aircon, cleaning, electrical, plumbing and renovation. Fixed price. WhatsApp enquiries built in. Pay the deposit only after you approve the design.
                        </p>
                        <div class="hero-action-group">
                            <a href="<?php echo htmlspecialchars($waMockup); ?>" target="_blank" rel="noopener noreferrer" class="btn-primary" style="font-size: 1.05rem; padding: 14px 26px;">
                                Get Your Free Homepage Mockup on WhatsApp
                            </a>
                            <span class="hero-subtext">Send your business name and we'll show you a draft before you pay anything.</span>
                        </div>
                        <div class="hero-trust-bar">
                            <div class="trust-item">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Fixed price</span>
                            </div>
                            <div class="trust-item">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Mobile-first</span>
                            </div>
                            <div class="trust-item">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span>Hosting + domain setup in year 1</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-5">
                        <div class="hero-card">
                            <div class="hero-card-header">
                                <div class="mono" style="color: var(--neutral); margin-bottom: 0.25rem;">STANDARDS & SLA</div>
                                <h3 style="color: var(--tertiary); font-size: 1.35rem;">Singapore Standard Spec</h3>
                            </div>
                            <div class="hero-card-metric">
                                <span class="mono" style="color: var(--neutral);">Turnaround</span>
                                <div class="hero-card-metric-num">10 DAYS</div>
                            </div>
                            <div class="hero-card-metric">
                                <span class="mono" style="color: var(--neutral);">Fixed Rate Launch Offer</span>
                                <div class="hero-card-metric-num" style="color: var(--tertiary);">S$690</div>
                            </div>
                            <div class="hero-card-metric" style="margin-bottom: 0;">
                                <span class="mono" style="color: var(--neutral);">Upfront Commitment</span>
                                <div style="font-family: var(--font-mono); font-size: 1.25rem; font-weight: 600; color: #fff;">S$0 (Draft First)</div>
                            </div>
                            <div class="hero-card-footer">
                                <span>VERIFIED SPEC 2026</span>
                                <span>SG HOME SERVICES</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. Problem Section -->
        <section class="section-gap">
            <div class="container">
                <div class="mono text-accent-red" style="margin-bottom: 0.5rem;">01 / MARKET REALITY</div>
                <h2 class="section-title">
                    When someone searches "aircon servicing near me," you have about 5 seconds.
                </h2>
                <p class="problem-intro">
                    They open 3 websites, then call the one that:
                </p>

                <div class="grid-swiss-12">
                    <div class="col-span-4 problem-card">
                        <div>
                            <div class="card-number">CRITERIA 01</div>
                            <h3>Looks trustworthy</h3>
                            <p>Clean design, clear services, real contact details.</p>
                        </div>
                    </div>

                    <div class="col-span-4 problem-card">
                        <div>
                            <div class="card-number">CRITERIA 02</div>
                            <h3>Loads fast on a phone</h3>
                            <p>Most home service customers search on mobile, often in a hurry.</p>
                        </div>
                    </div>

                    <div class="col-span-4 problem-card">
                        <div>
                            <div class="card-number">CRITERIA 03</div>
                            <h3>Is easy to contact</h3>
                            <p>One tap to WhatsApp or call. No hunting for a phone number.</p>
                        </div>
                    </div>
                </div>

                <div class="problem-outro">
                    If your page is outdated, slow, or just a Facebook link, that call goes to your competitor.
                </div>
            </div>
        </section>

        <!-- 4. Offer Section -->
        <section id="offer" class="section-gap">
            <div class="container">
                <div class="mono text-accent-red" style="margin-bottom: 0.5rem;">02 / THE SOLUTION</div>
                <h2 class="section-title">The Enquiry-Ready Landing Page</h2>
                <p style="margin-top: 0.75rem; margin-bottom: 2.5rem;">
                    One focused page built to turn visitors into WhatsApp messages, calls and quote requests.
                </p>

                <div class="grid-swiss-12">
                    <div class="col-span-8">
                        <div class="offer-box">
                            <div class="offer-header-banner">
                                <span>5 SPOTS ONLY</span>
                                <span>10 DAYS READY</span>
                            </div>
                            <div class="offer-body">
                                <div class="price-badge-wrap">
                                    <div class="price-current">S$690</div>
                                    <div class="price-old">S$990</div>
                                </div>
                                <div class="price-sub">One-time. No surprise add-ons.</div>

                                <ul class="feature-checklist">
                                    <li>
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        <span>Custom design for your business and brand</span>
                                    </li>
                                    <li>
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        <span>Mobile-first layout</span>
                                    </li>
                                    <li>
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        <span>Tap-to-WhatsApp and tap-to-call buttons</span>
                                    </li>
                                    <li>
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        <span>Quote request form</span>
                                    </li>
                                    <li>
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        <span>Up to 8 sections: services, pricing guide, reviews, FAQ, service areas and more</span>
                                    </li>
                                    <li>
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        <span>Google-friendly setup so your business can be found</span>
                                    </li>
                                    <li>
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        <span><strong>Hosting and domain setup for year 1 included</strong></span>
                                    </li>
                                    <li>
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        <span>2 rounds of revisions</span>
                                    </li>
                                    <li>
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        <span>Live in 10 business days from content approval</span>
                                    </li>
                                </ul>

                                <div class="not-included-box">
                                    <strong>Not included:</strong> extra pages, online payments and ad management. We'll quote these separately if you need them.
                                </div>

                                <a href="<?php echo htmlspecialchars($waSpot); ?>" target="_blank" rel="noopener noreferrer" class="btn-primary" style="font-size: 1rem; padding: 14px 28px;">
                                    Claim One of the 5 Spots
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-4 highlight-cards-stack">
                        <!-- Card 1: Guarantee / Risk Reversal -->
                        <div class="highlight-card">
                            <div class="highlight-card-header">
                                <span class="highlight-badge">
                                    <span class="highlight-badge-dot"></span>
                                    GUARANTEE
                                </span>
                                <div class="highlight-card-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                        <polyline points="9 12 11 14 15 10"></polyline>
                                    </svg>
                                </div>
                            </div>
                            <div class="highlight-card-body">
                                <h3 class="highlight-card-title">Risk Reversal</h3>
                                <p class="highlight-card-callout">
                                    Draft on WhatsApp first. Zero upfront risk.
                                </p>
                                <p class="highlight-card-desc">
                                    We design your mockup before you commit or pay anything. If you don't like it, you walk away freely.
                                </p>
                            </div>
                            <div class="highlight-card-tags">
                                <span class="highlight-tag-pill">
                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    S$0 Deposit First
                                </span>
                                <span class="highlight-tag-pill">Pay only if approved</span>
                            </div>
                        </div>

                        <!-- Card 2: Infrastructure / Year 1 Fully Covered -->
                        <div class="highlight-card">
                            <div class="highlight-card-header">
                                <span class="highlight-badge">
                                    <span class="highlight-badge-dot"></span>
                                    YEAR 1 INCLUDED
                                </span>
                                <div class="highlight-card-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                                        <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                                        <line x1="6" y1="6" x2="6.01" y2="6"></line>
                                        <line x1="6" y1="18" x2="6.01" y2="18"></line>
                                    </svg>
                                </div>
                            </div>
                            <div class="highlight-card-body">
                                <h3 class="highlight-card-title">All-Inclusive Setup</h3>
                                <p class="highlight-card-callout">
                                    Zero tech headaches. Everything covered.
                                </p>
                                <p class="highlight-card-desc">
                                    High-speed DNS, SSL certificate, cloud hosting setup, and mobile speed tuning included for Year 1.
                                </p>
                            </div>
                            <div class="highlight-card-tags">
                                <span class="highlight-tag-pill">
                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    Cloud Hosting
                                </span>
                                <span class="highlight-tag-pill">SSL & DNS Setup</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. Revamp & Care Section -->
        <section id="services" class="section-gap">
            <div class="container">
                <div class="mono text-accent-red" style="margin-bottom: 0.5rem;">03 / EXTENDED SERVICES</div>
                <h2 class="section-title">Already have a website? Or need one looked after?</h2>
                <p style="margin-top: 0.75rem; margin-bottom: 2.5rem;">
                    Two more ways we help Singapore home service businesses, whether you build with us or not.
                </p>

                <div class="grid-swiss-12">
                    <!-- Card 1: Website Revamp -->
                    <div class="col-span-6 service-card">
                        <div>
                            <div class="service-tag">Website Revamp</div>
                            <h3 style="font-size: 1.45rem; margin-bottom: 0.5rem;">Your business has grown. Your website should too.</h3>
                            <div class="mono" style="font-size: 1.125rem; font-weight: 700; color: var(--primary); margin-bottom: 1rem;">
                                From S$450 one-time
                            </div>
                            <p style="font-size: 0.9375rem; color: #4c5352; margin-bottom: 1.5rem;">
                                We modernise your current site so it looks trustworthy, works on phones and makes it easy for customers to WhatsApp or call.
                            </p>

                            <div class="mono" style="font-size: 0.75rem; color: #626a69; margin-bottom: 0.75rem;">WHAT IS INCLUDED:</div>
                            <ul class="feature-checklist" style="margin-bottom: 1.75rem;">
                                <li>
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    <span>Review of your current website</span>
                                </li>
                                <li>
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    <span>Modern design refresh</span>
                                </li>
                                <li>
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    <span>Mobile fixes</span>
                                </li>
                                <li>
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    <span>Clear WhatsApp and call buttons</span>
                                </li>
                                <li>
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    <span>Basic speed improvements</span>
                                </li>
                                <li>
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    <span>2 rounds of revisions</span>
                                </li>
                            </ul>
                        </div>
                        <a href="<?php echo htmlspecialchars($waRevamp); ?>" target="_blank" rel="noopener noreferrer" class="btn-secondary">
                            Get a Free Website Review
                        </a>
                    </div>

                    <!-- Card 2: Website Care -->
                    <div class="col-span-6 service-card">
                        <div>
                            <div class="service-tag">Website Care</div>
                            <h3 style="font-size: 1.45rem; margin-bottom: 0.5rem;">Keep your website safe, fast and up to date.</h3>
                            <div class="mono" style="font-size: 1.125rem; font-weight: 700; color: var(--primary); margin-bottom: 0.5rem;">
                                From S$39 per month
                            </div>
                            <p style="font-size: 0.9375rem; color: #4c5352; margin-bottom: 1rem;">
                                No contracts. Cancel anytime. Pick the level of support you need.
                            </p>

                            <table class="care-table">
                                <thead>
                                    <tr>
                                        <th>Package</th>
                                        <th>Price</th>
                                        <th>Scope</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Basic</td>
                                        <td>S$39 / mo</td>
                                        <td>Uptime and backup monitoring, basic security checks, technical support.</td>
                                    </tr>
                                    <tr>
                                        <td>Standard</td>
                                        <td>S$99 / mo</td>
                                        <td>Everything in Basic, plus software updates, speed monitoring and 1 hour of content updates.</td>
                                    </tr>
                                    <tr>
                                        <td>Premium</td>
                                        <td>S$189 / mo</td>
                                        <td>Everything in Standard, plus 3 hours of updates, a monthly report and priority support.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="<?php echo htmlspecialchars($waCare); ?>" target="_blank" rel="noopener noreferrer" class="btn-secondary">
                            Ask About Care Plans
                        </a>
                    </div>
                </div>

                <div class="services-note">
                    Prices shown are starting prices. Hosting, domain renewals and third-party licences are quoted separately unless included in your proposal. We confirm the final price after reviewing your website.
                </div>
            </div>
        </section>

        <!-- 6. Value Section -->
        <section class="section-gap">
            <div class="container">
                <div class="mono text-accent-red" style="margin-bottom: 0.5rem;">04 / ROI & COMPARISON</div>
                <h2 class="section-title">One new job can pay for the whole website.</h2>
                <p style="margin-top: 0.75rem; margin-bottom: 2rem;">
                    If your average job is worth S$300, you need just 3 extra customers to cover it. For renovation and contracting, one job can cover it several times over.
                </p>

                <div class="comparison-table-wrapper">
                    <table class="comparison-table">
                        <thead>
                            <tr>
                                <th>Criteria</th>
                                <th>DIY (Wix etc.)</th>
                                <th>Typical agency</th>
                                <th class="col-accent">DOPDEV</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Cost</strong></td>
                                <td>Your time</td>
                                <td>S$1,500–5,000+</td>
                                <td class="col-accent"><strong>S$690</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Ready in</strong></td>
                                <td>Weeks (if you finish)</td>
                                <td>4–8 weeks</td>
                                <td class="col-accent"><strong>10 days</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Built for enquiries</strong></td>
                                <td>Depends on you</td>
                                <td>Depends</td>
                                <td class="col-accent"><strong>Yes</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- 7. Portfolio Section -->
        <section id="portfolio" class="section-gap">
            <div class="container">
                <div class="mono text-accent-red" style="margin-bottom: 0.5rem;">05 / LIVE DEMOS</div>
                <h2 class="section-title">See what yours could look like.</h2>
                <p style="margin-top: 0.75rem; margin-bottom: 2.5rem;">
                    Live demo pages for popular home service industries. Open them on your phone.
                </p>

                <div class="grid-swiss-12">
                    <!-- Contractor -->
                    <div class="col-span-4 portfolio-card">
                        <div class="portfolio-thumb">
                            <img src="/images/examples/contractor.png" alt="Contractor Demo">
                        </div>
                        <div class="portfolio-info">
                            <div>
                                <h3>Contractor</h3>
                                <p>Showcase your projects and make it easy to request a quotation.</p>
                            </div>
                            <a href="https://landing.dopdev.com/contractor" target="_blank" rel="noopener noreferrer" class="portfolio-link">
                                <span>View live demo</span>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Cleaning Service -->
                    <div class="col-span-4 portfolio-card">
                        <div class="portfolio-thumb">
                            <img src="/images/case-studies/lp/cleaning.png" alt="Cleaning Service Demo">
                        </div>
                        <div class="portfolio-info">
                            <div>
                                <h3>Cleaning Service</h3>
                                <p>Build trust, present your packages and capture cleaning quote requests.</p>
                            </div>
                            <a href="https://landing.dopdev.com/cleaning" target="_blank" rel="noopener noreferrer" class="portfolio-link">
                                <span>View live demo</span>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Electrician -->
                    <div class="col-span-4 portfolio-card">
                        <div class="portfolio-thumb">
                            <img src="/images/examples/electritian.png" alt="Electrician Demo">
                        </div>
                        <div class="portfolio-info">
                            <div>
                                <h3>Electrician</h3>
                                <p>Look professional and make it simple to call or WhatsApp you.</p>
                            </div>
                            <a href="https://landing.dopdev.com/electrician" target="_blank" rel="noopener noreferrer" class="portfolio-link">
                                <span>View live demo</span>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 8. How it works -->
        <section id="how-it-works" class="section-gap">
            <div class="container">
                <div class="mono text-accent-red" style="margin-bottom: 0.5rem;">06 / WORKFLOW</div>
                <h2 class="section-title">How it works</h2>

                <div class="steps-container">
                    <div class="step-card">
                        <div class="step-num">01</div>
                        <h3>Message us.</h3>
                        <p>Tell us your business and services on WhatsApp.</p>
                    </div>

                    <div class="step-card">
                        <div class="step-num">02</div>
                        <h3>Get a free mockup.</h3>
                        <p>We design your homepage draft first.</p>
                    </div>

                    <div class="step-card">
                        <div class="step-num">03</div>
                        <h3>Approve & pay 50%.</h3>
                        <p>Happy with it? We build the full page.</p>
                    </div>

                    <div class="step-card">
                        <div class="step-num">04</div>
                        <h3>Launch.</h3>
                        <p>Pay the remaining 50% and go live in 10 days.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 9. Promise Section -->
        <section class="section-gap" style="border-bottom: none;">
            <div class="container">
                <div class="promise-banner">
                    <div class="mono" style="color: var(--primary); margin-bottom: 0.5rem;">ZERO FINANCIAL RISK</div>
                    <h2>Our promise</h2>
                    <p>
                        You see the design before you pay. If you don't like the direction, you walk away and owe nothing.
                    </p>
                </div>
            </div>
        </section>

        <!-- 10. FAQ Section -->
        <section id="faq" class="section-gap">
            <div class="container">
                <div class="mono text-accent-red" style="margin-bottom: 0.5rem;">07 / TRANSPARENCY</div>
                <h2 class="section-title">Questions</h2>

                <div class="faq-list">
                    <div class="faq-item">
                        <button class="faq-button" type="button">
                            <span>Is there any hidden cost?</span>
                            <span class="faq-icon">+</span>
                        </button>
                        <div class="faq-answer">
                            Hosting and domain setup for year 1 are included. After that, hosting is roughly S$90 per year. Anything outside the list above is quoted before we start.
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-button" type="button">
                            <span>You're based in Indonesia. How do we work together?</span>
                            <span class="faq-icon">+</span>
                        </button>
                        <div class="faq-answer">
                            Everything runs over WhatsApp and email, during Singapore hours (we're just 1 hour behind SGT). Payment by PayNow or bank transfer.
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-button" type="button">
                            <span>I don't have photos or content ready.</span>
                            <span class="faq-icon">+</span>
                        </button>
                        <div class="faq-answer">
                            Send what you have. We'll guide you on what to write and which photos to take.
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-button" type="button">
                            <span>Do you handle updates after launch?</span>
                            <span class="faq-icon">+</span>
                        </button>
                        <div class="faq-answer">
                            Yes. Website Care plans start from S$39 per month (see above), or we can quote one-off updates on request.
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-button" type="button">
                            <span>Will this get me on page 1 of Google?</span>
                            <span class="faq-icon">+</span>
                        </button>
                        <div class="faq-answer">
                            We set up the technical foundations, but no one can honestly guarantee rankings. For faster results, many businesses pair the page with a Google Business Profile or ads, and we can advise on that.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 11. Final CTA Section -->
        <section class="section-gap" style="border-bottom: none;">
            <div class="container">
                <div class="cta-box">
                    <div class="mono" style="color: var(--neutral);">APRIL COHORT · 5 CLIENT LIMIT</div>
                    <h2>Only 5 spots at S$690 this month.</h2>
                    <p>
                        Send us your business name and we'll show you a free mockup. No commitment.
                    </p>
                    <div style="display: flex; flex-direction: column; gap: 0.5rem; align-items: flex-start; width: 100%;">
                        <a href="<?php echo htmlspecialchars($waMockup); ?>" target="_blank" rel="noopener noreferrer" class="btn-white" style="font-size: 1.05rem; padding: 14px 28px;">
                            Chat on WhatsApp
                        </a>
                        <span style="font-size: 0.8125rem; color: #a3a3a3;">No pressure. Just a conversation about your business.</span>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- 12. Footer -->
    <footer class="footer">
        <div class="container footer-content">
            <div class="footer-line-1">
                <span>DOPDEV · Web Design & Development Studio · dopdev.com</span>
                <span>SINGAPORE TIME ZONE (UTC+8)</span>
            </div>
            <div class="footer-line-2">
                By messaging us, you consent to us using your details to respond to your enquiry (PDPA).
            </div>
        </div>
    </footer>

    <!-- Bottom Sticky Banner with Close Button -->
    <div class="bottom-banner-wrap" id="bottomBanner">
        <div class="bottom-banner-inner">
            <button type="button" class="bottom-banner-close" id="closeBottomBanner" aria-label="Close Promotion Banner">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
            <a href="<?php echo htmlspecialchars($waMockup); ?>" target="_blank" rel="noopener noreferrer" class="bottom-banner-link" aria-label="Claim Limited Offer on WhatsApp">
                <img src="/images/banner/bottom.webp" alt="Limited Launch Offer Promotion" width="1086" height="159" loading="lazy">
            </a>
        </div>
    </div>

    <!-- WhatsApp Floating Button -->
    <a href="<?php echo htmlspecialchars($waMockup); ?>" target="_blank" rel="noopener noreferrer" class="wa-float-btn" aria-label="Chat on WhatsApp">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
        </svg>
    </a>

    <!-- Minimal Vanilla Script for FAQ & Banner Close -->
    <script>
        // FAQ Accordion
        document.querySelectorAll('.faq-button').forEach(function(button) {
            button.addEventListener('click', function() {
                var item = button.parentElement;
                var answer = item.querySelector('.faq-answer');
                var isOpen = item.classList.contains('active');

                // Close all others
                document.querySelectorAll('.faq-item').forEach(function(otherItem) {
                    otherItem.classList.remove('active');
                    otherItem.querySelector('.faq-answer').style.maxHeight = null;
                });

                if (!isOpen) {
                    item.classList.add('active');
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                }
            });
        });

        // Bottom Banner Close Functionality
        (function() {
            var banner = document.getElementById('bottomBanner');
            var closeBtn = document.getElementById('closeBottomBanner');
            if (banner && closeBtn) {
                closeBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    banner.classList.add('is-closed');
                    setTimeout(function() {
                        banner.style.display = 'none';
                    }, 350);
                });
            }
        })();
    </script>
</body>
</html>