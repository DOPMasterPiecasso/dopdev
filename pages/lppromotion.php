<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="DOPDEV builds fixed-price landing pages for home service businesses in Singapore. Get a free homepage mockup on WhatsApp.">
    <title>DOPDEV | A Website That Gets Your Phone Ringing</title>
    <style>
        :root {
            --ink: #111827;
            --ink-soft: #374151;
            --ink-muted: #6b7280;
            --line: #e5e7eb;
            --panel: #ffffff;
            --panel-soft: #f7f7f5;
            --panel-soft-2: #f3f4f6;
            --accent: #16a34a;
            --accent-hover: #15803d;
            --accent-soft: #ebfdf1;
            --shadow: rgba(17, 24, 39, 0.06);
            --radius: 20px;
            --ease: cubic-bezier(0.22, 1, 0.36, 1);
            --max-width: 1180px;
        }

        * { box-sizing: border-box; }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: Inter, "Segoe UI", Arial, sans-serif;
            background: #ffffff;
            color: var(--ink);
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
        }

        img {
            max-width: 100%;
            display: block;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button, input, textarea, select {
            font: inherit;
        }

        .container {
            width: min(var(--max-width), calc(100% - 32px));
            margin: 0 auto;
        }

        .topbar {
            position: sticky;
            top: 0;
            z-index: 20;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--line);
        }

        .topbar-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-height: 72px;
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-weight: 800;
            letter-spacing: 0.04em;
            font-size: 0.95rem;
        }

        .brand-mark {
            width: 66px;
            height: 26px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--line);
            border-radius: 8px;
            background: #fff;
            padding: 2px 8px;
        }

        .brand-mark img {
            width: 100%;
            height: auto;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 56px;
            padding: 0 24px;
            border-radius: 14px;
            border: 1px solid transparent;
            font-weight: 700;
            letter-spacing: 0.01em;
            transition: transform 0.3s var(--ease), background 0.3s var(--ease), border-color 0.3s var(--ease), box-shadow 0.3s var(--ease);
            cursor: pointer;
            text-align: center;
        }

        .btn:focus-visible,
        .faq-item button:focus-visible,
        .wa-float:focus-visible {
            outline: 3px solid rgba(22, 163, 74, 0.25);
            outline-offset: 2px;
        }

        .btn-primary {
            background: var(--accent);
            color: #fff;
            box-shadow: 0 8px 18px rgba(22, 163, 74, 0.18);
        }

        .btn-primary:hover,
        .btn-primary:focus-visible {
            background: var(--accent-hover);
        }

        .btn-secondary {
            background: #fff;
            color: var(--ink);
            border-color: var(--line);
        }

        .btn-secondary:hover,
        .btn-secondary:focus-visible {
            border-color: var(--accent);
        }

        .site-main {
            overflow: hidden;
        }

        .section {
            padding: 72px 0;
        }

        .section-soft {
            background: var(--panel-soft);
        }

        .hero {
            padding: 48px 0 56px;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 28px;
            align-items: center;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 8px 14px;
            border: 1px solid var(--line);
            border-radius: 999px;
            background: #fff;
            color: var(--ink-soft);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            white-space: nowrap;
        }

        .eyebrow-dot {
            display: inline-block;
            width: 9px;
            height: 9px;
            border-radius: 50%;
            background: var(--accent);
            animation: pulse 1.8s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.2); opacity: 0.8; }
        }

        .headline-mask {
            overflow: hidden;
        }

        .headline-line {
            display: block;
            transform: translateY(110%);
            opacity: 0;
            animation: revealLine 0.7s var(--ease) forwards;
        }

        .headline-line:nth-child(2) { animation-delay: 0.08s; }
        .headline-line:nth-child(3) { animation-delay: 0.16s; }

        @keyframes revealLine {
            0% {
                opacity: 0;
                transform: translateY(110%);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .headline {
            margin: 20px 0 0;
            font-size: clamp(2.3rem, 7vw, 4.5rem);
            line-height: 1.04;
            letter-spacing: -0.06em;
            font-weight: 800;
            color: var(--ink);
        }

        h1 .accent-line {
            position: relative;
            display: inline-block;
            color: var(--ink);
        }

        h1 .accent-line::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 100%;
            height: 6px;
            background: rgba(22, 163, 74, 0.18);
            transform: scaleX(0);
            transform-origin: left center;
            animation: drawAccent 0.8s var(--ease) 0.5s forwards;
        }

        @keyframes drawAccent {
            to { transform: scaleX(1); }
        }

        .lead {
            margin-top: 22px;
            max-width: 620px;
            font-size: clamp(1.05rem, 1.8vw, 1.35rem);
            line-height: 1.7;
            color: var(--ink-soft);
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 12px;
            margin-top: 28px;
        }

        .cta-sub {
            margin-top: 10px;
            font-size: 0.94rem;
            color: var(--ink-muted);
        }

        .trust-row {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 26px;
        }

        .trust-pill {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 38px;
            border: 1px solid var(--line);
            border-radius: 999px;
            padding: 10px 14px;
            background: #fff;
            font-size: 0.82rem;
            color: var(--ink-soft);
            font-weight: 600;
        }

        .hero-visual {
            position: relative;
            padding: 12px;
            border: 1px solid var(--line);
            border-radius: 28px;
            background: #fff;
            box-shadow: 0 18px 48px var(--shadow);
        }

        .hero-visual-inner {
            border-radius: 22px;
            border: 1px solid var(--line);
            background: #fff;
            padding: 20px;
        }

        .device-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 18px;
        }

        .device-label {
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            color: var(--ink-muted);
        }

        .status-pill {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 26px;
            border-radius: 999px;
            padding: 6px 10px;
            background: #ebfdf1;
            color: var(--accent-hover);
            font-weight: 700;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 0.12em;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .stat-card {
            border: 1px solid var(--line);
            border-radius: 18px;
            padding: 16px 14px;
        }

        .stat-card.dark {
            background: var(--ink);
            color: #fff;
            border-color: var(--ink);
        }

        .stat-card.green {
            background: var(--accent-soft);
            border-color: rgba(22, 163, 74, 0.12);
        }

        .stat-kicker {
            font-size: 10px;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            opacity: 0.75;
            margin-bottom: 8px;
            display: inline-block;
        }

        .stat-value {
            font-size: clamp(1.7rem, 4vw, 2.5rem);
            line-height: 1;
            letter-spacing: -0.05em;
            font-weight: 800;
        }

        .mini-panel {
            margin-top: 16px;
            border: 1px solid var(--line);
            border-radius: 18px;
            background: #f8f9fb;
            padding: 16px;
        }

        .mini-panel-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 14px;
            font-size: 0.82rem;
            font-weight: 700;
            color: var(--ink);
        }

        .mini-meter {
            display: grid;
            gap: 12px;
        }

        .meter-row {
            display: grid;
            gap: 6px;
        }

        .meter-row-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 0.72rem;
            color: var(--ink-muted);
        }

        .meter-bar {
            position: relative;
            height: 8px;
            width: 100%;
            border-radius: 999px;
            background: #e5e7eb;
            overflow: hidden;
        }

        .meter-fill {
            position: absolute;
            inset: 0 auto 0 0;
            width: var(--width, 0%);
            background: var(--accent);
            border-radius: inherit;
        }

        .section-head {
            margin: 0 auto 28px;
            text-align: center;
            max-width: 760px;
        }

        .kicker {
            display: inline-block;
            margin-bottom: 16px;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            color: var(--ink-muted);
        }

        h2 {
            margin: 0;
            font-size: clamp(2.2rem, 4vw, 3.5rem);
            line-height: 1.08;
            letter-spacing: -0.055em;
            font-weight: 800;
            color: var(--ink);
        }

        .card-grid,
        .portfolio-grid,
        .steps-grid,
        .faq-grid,
        .pricing-grid,
        .compare-grid {
            display: grid;
            gap: 18px;
        }

        .card-grid {
            grid-template-columns: 1fr;
        }

        .feature-card,
        .step-card,
        .faq-item,
        .portfolio-card,
        .offer-panel,
        .value-box,
        .promise-box,
        .cta-panel {
            border: 1px solid var(--line);
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 10px 28px rgba(17, 24, 39, 0.03);
            transition: transform 0.35s var(--ease), box-shadow 0.35s var(--ease), border-color 0.35s var(--ease);
        }

        .feature-card:hover,
        .feature-card:focus-within,
        .portfolio-card:hover,
        .step-card:hover,
        .faq-item:hover,
        .offer-panel:hover {
            transform: translateY(-6px);
            border-color: var(--accent);
            box-shadow: 0 16px 34px rgba(17, 24, 39, 0.06);
        }

        .feature-card {
            padding: 24px;
        }

        .feature-card .index {
            display: inline-block;
            margin-bottom: 18px;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            color: var(--accent);
        }

        .feature-card h3,
        .step-card h3,
        .portfolio-card h3 {
            margin: 0 0 10px;
            font-size: clamp(1.2rem, 2vw, 1.6rem);
            line-height: 1.2;
            letter-spacing: -0.04em;
            color: var(--ink);
        }

        .feature-card p,
        .step-card p,
        .portfolio-card p,
        .offer-list li,
        .faq-answer p,
        .value-box p,
        .promise-box p,
        .cta-panel p,
        .compare-table td,
        .compare-table th,
        .offer-panel li,
        .final-small {
            color: var(--ink-soft);
            font-size: 1.02rem;
            line-height: 1.7;
        }

        .problem-copy {
            max-width: 700px;
            margin: 26px auto 0;
            text-align: center;
            font-size: 1.15rem;
            color: var(--ink-soft);
            line-height: 1.7;
        }

        .problem-grid {
            display: grid;
            gap: 18px;
            grid-template-columns: 1fr;
            margin-top: 32px;
        }

        .feature-card svg {
            width: 28px;
            height: 28px;
            margin-bottom: 16px;
            stroke: var(--ink);
            stroke-width: 1.8;
            fill: none;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .offer-panel {
            max-width: 980px;
            margin: 0 auto;
            padding: 24px;
            background: #fff;
        }

        .offer-top {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 12px;
        }

        .offer-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 32px;
            padding: 0 12px;
            border-radius: 999px;
            background: var(--accent-soft);
            border: 1px solid rgba(22, 163, 74, 0.12);
            color: var(--accent-hover);
            font-size: 10px;
            letter-spacing: 0.18em;
            font-weight: 800;
            text-transform: uppercase;
        }

        .price-box {
            text-align: right;
        }

        .price-main {
            display: block;
            font-size: clamp(2rem, 5vw, 3rem);
            line-height: 1;
            letter-spacing: -0.06em;
            font-weight: 800;
            color: var(--ink);
        }

        .price-strike {
            display: inline-block;
            margin-left: 6px;
            font-size: 0.95rem;
            color: var(--ink-muted);
            text-decoration: line-through;
        }

        .offer-sub {
            margin: 0 0 20px;
            font-size: 1.04rem;
            color: var(--ink-soft);
        }

        .offer-list {
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .offer-list li {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            padding: 8px 0;
            border-bottom: 1px solid rgba(17, 24, 39, 0.05);
        }

        .offer-list li:last-child {
            border-bottom: 0;
        }

        .offer-list li::before {
            content: "";
            width: 10px;
            height: 10px;
            margin-top: 9px;
            border-radius: 50%;
            background: var(--accent);
            flex: 0 0 10px;
        }

        .not-included {
            margin-top: 20px;
            padding-top: 18px;
            border-top: 1px solid var(--line);
            font-size: 0.98rem;
            color: var(--ink-soft);
        }

        .not-included strong {
            color: var(--ink);
        }

        .offer-actions {
            margin-top: 26px;
        }

        .compare-wrap {
            overflow-x: auto;
            border: 1px solid var(--line);
            border-radius: 20px;
            background: #fff;
        }

        .compare-table {
            width: 100%;
            border-collapse: collapse;
            min-width: 640px;
        }

        .compare-table th,
        .compare-table td {
            padding: 16px 18px;
            text-align: left;
            border-bottom: 1px solid var(--line);
            vertical-align: top;
        }

        .compare-table th {
            font-size: 0.82rem;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--ink-muted);
            font-weight: 800;
            background: #fff;
        }

        .compare-table tbody tr {
            opacity: 0;
            transform: translateY(18px);
            animation: fadeSlideRow 0.5s var(--ease) forwards;
        }

        .compare-table tbody tr:nth-child(2) { animation-delay: 0.08s; }
        .compare-table tbody tr:nth-child(3) { animation-delay: 0.16s; }
        .compare-table tbody tr:nth-child(4) { animation-delay: 0.24s; }

        @keyframes fadeSlideRow {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .compare-table .dop-cell {
            background: rgba(22, 163, 74, 0.06);
        }

        .compare-table .dop-cell strong {
            color: var(--ink);
        }

        .portfolio-grid {
            grid-template-columns: 1fr;
        }

        .portfolio-card {
            overflow: hidden;
        }

        .portfolio-visual {
            position: relative;
            background: var(--panel-soft-2);
            border-bottom: 1px solid var(--line);
            height: 214px;
            padding: 14px;
        }

        .browser-frame {
            height: 100%;
            border: 1px solid var(--line);
            border-radius: 14px;
            background: #fff;
            overflow: hidden;
        }

        .browser-bar {
            display: flex;
            align-items: center;
            gap: 8px;
            background: #f7f8f9;
            border-bottom: 1px solid var(--line);
            padding: 8px 12px;
        }

        .browser-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #d1d5db;
        }

        .browser-body {
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 18px 16px 0;
            height: calc(100% - 42px);
        }

        .browser-hero {
            height: 74px;
            border-radius: 12px;
            background: #e5e7eb;
        }

        .browser-row {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 10px;
            height: 82px;
        }

        .browser-box {
            border-radius: 12px;
            background: #f3f4f6;
        }

        .portfolio-card-body {
            padding: 22px 20px 20px;
        }

        .portfolio-link {
            display: inline-block;
            margin-top: 10px;
            font-weight: 700;
            color: var(--accent-hover);
        }

        .steps-wrap {
            position: relative;
            margin-top: 30px;
        }

        .steps-line {
            position: absolute;
            left: 6%;
            right: 6%;
            top: 32px;
            height: 1px;
            background: var(--line);
            overflow: hidden;
            z-index: 0;
        }

        .steps-line::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 0;
            background: var(--accent);
            transition: width 0.8s var(--ease);
        }

        .steps-wrap.is-visible .steps-line::before {
            width: 100%;
        }

        .steps-grid {
            position: relative;
            z-index: 1;
            grid-template-columns: 1fr;
        }

        .step-card {
            padding: 22px 18px 20px;
            position: relative;
        }

        .step-no {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: #fff;
            border: 1px solid var(--line);
            color: var(--accent-hover);
            font-size: 0.85rem;
            font-weight: 800;
            margin-bottom: 12px;
        }

        .promise-box {
            max-width: 940px;
            margin: 0 auto;
            padding: 34px 30px;
            background: #fff;
            border: 1px dashed var(--line);
            border-radius: 20px;
            text-align: center;
        }

        .promise-box strong {
            display: block;
            margin-bottom: 8px;
            font-size: clamp(1.5rem, 3vw, 2.2rem);
            line-height: 1.2;
            letter-spacing: -0.04em;
            color: var(--ink);
        }

        .faq-wrap {
            max-width: 900px;
            margin: 0 auto;
        }

        .faq-item {
            overflow: hidden;
            margin-bottom: 12px;
        }

        .faq-item button {
            width: 100%;
            background: transparent;
            border: 0;
            text-align: left;
            cursor: pointer;
            color: var(--ink);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 18px 20px;
            font-size: 1.05rem;
            font-weight: 700;
        }

        .faq-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: #f3f4f6;
            color: var(--ink);
            font-size: 1.3rem;
            font-weight: 400;
            transition: transform 0.35s var(--ease);
        }

        .faq-item.is-open .faq-icon {
            transform: rotate(45deg);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s var(--ease), padding 0.35s var(--ease);
            padding: 0 20px;
        }

        .faq-item.is-open .faq-answer {
            max-height: 220px;
            padding: 0 20px 18px;
        }

        .faq-answer p {
            margin: 0;
        }

        .final-cta {
            max-width: 980px;
            margin: 0 auto;
            padding: 32px 24px;
            border-radius: 28px;
            background: var(--ink);
            color: #fff;
            text-align: center;
            box-shadow: 0 18px 40px rgba(17, 24, 39, 0.08);
        }

        .final-cta h2 {
            color: #fff;
            font-size: clamp(2.2rem, 5vw, 3.6rem);
        }

        .final-cta p {
            margin: 16px auto 0;
            max-width: 620px;
            font-size: 1.1rem;
            line-height: 1.7;
            color: rgba(255, 255, 255, 0.8);
        }

        .cta-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            margin-top: 24px;
        }

        .btn-light {
            background: #fff;
            color: var(--ink);
        }

        .btn-light:hover,
        .btn-light:focus-visible {
            background: #f5f5f5;
        }

        .footer {
            padding: 28px 0 72px;
            background: #fff;
            border-top: 1px solid var(--line);
        }

        .footer-inner {
            display: flex;
            flex-direction: column;
            gap: 10px;
            text-align: center;
            color: var(--ink-soft);
            font-size: 0.95rem;
        }

        .footer-inner strong {
            color: var(--ink);
        }

        .mobile-wa {
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 30;
            padding: 10px 16px calc(10px + env(safe-area-inset-bottom));
            background: rgba(255,255,255,0.96);
            border-top: 1px solid var(--line);
            backdrop-filter: blur(12px);
            transform: translateY(120%);
            opacity: 0;
            transition: transform 0.45s var(--ease), opacity 0.35s var(--ease);
        }

        .mobile-wa.is-visible {
            transform: translateY(0);
            opacity: 1;
        }

        .mobile-wa .btn {
            width: 100%;
            min-height: 52px;
        }

        .reveal {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity 0.7s var(--ease), transform 0.7s var(--ease);
        }

        .reveal.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        @media (min-width: 700px) {
            .hero {
                padding: 68px 0 72px;
            }

            .section {
                padding: 84px 0;
            }

            .card-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }

            .problem-grid,
            .portfolio-grid,
            .pricing-grid,
            .compare-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }

            .steps-grid {
                grid-template-columns: repeat(4, minmax(0, 1fr));
            }

            .offer-list {
                grid-template-columns: 1fr 1fr;
                gap: 10px 30px;
            }

            .topbar-inner {
                min-height: 76px;
            }
        }

        @media (min-width: 980px) {
            .hero-grid {
                grid-template-columns: 1.1fr 0.9fr;
                gap: 44px;
            }

            .topbar .brand {
                font-size: 1rem;
            }

            .offer-panel {
                padding: 28px 30px;
            }

            .steps-line {
                left: 7%;
                right: 7%;
            }
        }

        @media (max-width: 699px) {
            .topbar-inner {
                min-height: 64px;
            }

            .brand-mark {
                width: 56px;
                height: 22px;
            }

            .btn {
                width: 100%;
            }

            .hero-actions {
                width: 100%;
            }

            .hero-actions .btn {
                flex: 1 1 100%;
            }

            .cta-row .btn {
                flex: 1 1 100%;
            }

            .offer-top {
                align-items: flex-start;
            }

            .price-box {
                text-align: left;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }
        }
    </style>
</head>

<body>
    <!-- TOP BAR -->
    <header class="topbar">
        <div class="container topbar-inner">
            <a href="#top" class="brand" aria-label="DOPDEV homepage">
                <span class="brand-mark">
                    <img src="logo/logodophitam.webp" alt="DOPDEV logo" />
                </span>
            </a>

            <a class="btn btn-primary" href="https://wa.me/6282125189383?text=Hi%20Dopdev%2C%20I%27d%20like%20a%20free%20homepage%20mockup.%20My%20business%20is%3A" target="_blank" rel="noopener noreferrer">
                WhatsApp Us
            </a>
        </div>
    </header>

    <main class="site-main" id="top">
        <!-- HERO -->
        <section class="hero">
            <div class="container hero-grid">
                <div>
                    <div class="eyebrow">
                        <span class="eyebrow-dot" aria-hidden="true"></span>
                        Launch offer: S$690 (usual S$990) · Only 5 spots this month
                    </div>

                    <h1 class="headline" aria-label="A Website That Gets Your Phone Ringing. Ready in 7 Days.">
                        <span class="headline-mask"><span class="headline-line">A Website That Gets</span></span>
                        <span class="headline-mask"><span class="headline-line">Your Phone Ringing.</span></span>
                        <span class="headline-mask"><span class="headline-line accent-line">Ready in 7 Days.</span></span>
                    </h1>

                    <p class="lead">
                        Landing pages for Singapore home service businesses: aircon, cleaning, electrical, plumbing and renovation. Fixed price. WhatsApp enquiries built in. Pay the deposit only after you approve the design.
                    </p>

                    <div class="hero-actions">
                        <a class="btn btn-primary" href="https://wa.me/6282125189383?text=Hi%20Dopdev%2C%20I%27d%20like%20a%20free%20homepage%20mockup.%20My%20business%20is%3A" target="_blank" rel="noopener noreferrer">
                            Get Your Free Homepage Mockup on WhatsApp
                        </a>
                    </div>

                    <div class="cta-sub">Send your business name and we’ll show you a draft before you pay anything.</div>

                    <div class="trust-row" aria-label="Trust points">
                        <span class="trust-pill">Fixed price</span>
                        <span class="trust-pill">Mobile-first</span>
                        <span class="trust-pill">Hosting + domain setup in year 1</span>
                    </div>
                </div>

                <div class="hero-visual" aria-label="Website mockup preview">
                    <div class="hero-visual-inner">
                        <div class="device-head">
                            <div>
                                <div class="device-label">DOPDEV</div>
                                <div style="margin-top: 6px; font-size: 1.1rem; font-weight: 800;">Homepage Preview</div>
                            </div>
                            <span class="status-pill">Ready</span>
                        </div>

                        <div class="stats-grid">
                            <div class="stat-card dark">
                                <span class="stat-kicker">Estimated leads</span>
                                <div class="stat-value">4x</div>
                            </div>
                            <div class="stat-card green">
                                <span class="stat-kicker">Growth</span>
                                <div class="stat-value">+42%</div>
                            </div>
                        </div>

                        <div class="mini-panel">
                            <div class="mini-panel-head">
                                <span>Website score</span>
                                <span style="color: var(--ink-muted);">Mobile-first</span>
                            </div>
                            <div class="mini-meter">
                                <div class="meter-row">
                                    <div class="meter-row-top"><span>Speed</span><span>96%</span></div>
                                    <div class="meter-bar"><span class="meter-fill" style="--width:96%;"></span></div>
                                </div>
                                <div class="meter-row">
                                    <div class="meter-row-top"><span>SEO</span><span>93%</span></div>
                                    <div class="meter-bar"><span class="meter-fill" style="--width:93%;"></span></div>
                                </div>
                                <div class="meter-row">
                                    <div class="meter-row-top"><span>Clarity</span><span>89%</span></div>
                                    <div class="meter-bar"><span class="meter-fill" style="--width:89%;"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PROBLEM -->
        <section class="section section-soft">
            <div class="container">
                <div class="section-head reveal">
                    <span class="kicker">The problem</span>
                    <h2>When someone searches “aircon servicing near me,” you have about 5 seconds.</h2>
                </div>

                <div class="problem-grid">
                    <article class="feature-card reveal">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 18.5V9.5h10v9M9 9.5V7.5h6v2M12 13.5v3M9 16.5h6"/></svg>
                        <div class="index">01</div>
                        <h3>Looks trustworthy</h3>
                        <p>Clean design, clear services, and real contact details build confidence instantly.</p>
                    </article>

                    <article class="feature-card reveal">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 13.5h4l2-5 4 10 2-5h4"/></svg>
                        <div class="index">02</div>
                        <h3>Loads fast on a phone</h3>
                        <p>Most home service customers search on mobile, often in a hurry. Speed matters.</p>
                    </article>

                    <article class="feature-card reveal">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 16a4 4 0 0 1 8 0M12 4v6m0 0 2.5 2.5M12 10l-2.5 2.5M5 20h14"/></svg>
                        <div class="index">03</div>
                        <h3>Is easy to contact</h3>
                        <p>One tap to WhatsApp or call. No hunting for a phone number or emailing back and forth.</p>
                    </article>
                </div>

                <p class="problem-copy reveal">If your page is outdated, slow, or just a Facebook link, that call goes to your competitor.</p>
            </div>
        </section>

        <!-- OFFER -->
        <section class="section">
            <div class="container">
                <div class="section-head reveal">
                    <span class="kicker">Offer</span>
                    <h2>The Enquiry-Ready Landing Page</h2>
                    <p style="margin: 18px auto 0; max-width: 700px; font-size: 1.15rem; color: var(--ink-soft); line-height: 1.7;">One focused page built to turn visitors into WhatsApp messages, calls and quote requests.</p>
                </div>

                <div class="offer-panel reveal">
                    <div class="offer-top">
                        <span class="offer-badge">Launch offer • 5 spots only</span>
                        <div class="price-box">
                            <span class="price-main">S$690</span>
                            <span class="price-strike">S$990</span>
                        </div>
                    </div>

                    <p class="offer-sub">One-time. No surprise add-ons.</p>

                    <ul class="offer-list">
                        <li>Custom design for your business and brand</li>
                        <li>Mobile-first layout</li>
                        <li>Tap-to-WhatsApp and tap-to-call buttons</li>
                        <li>Quote request form</li>
                        <li>Up to 8 sections: services, pricing guide, reviews, FAQ, service areas and more</li>
                        <li>Google-friendly setup so your business can be found</li>
                        <li>Hosting and domain setup for year 1 included</li>
                        <li>2 rounds of revisions</li>
                        <li>Live in 7 business days from content approval</li>
                    </ul>

                    <div class="not-included"><strong>Not included:</strong> extra pages, online payments and ad management. We’ll quote these separately if you need them.</div>

                    <div class="offer-actions">
                        <a class="btn btn-primary" href="https://wa.me/6282125189383?text=Hi%20Dopdev%2C%20I%20want%20to%20claim%20one%20of%20the%205%20spots.%20My%20business%20is%3A" target="_blank" rel="noopener noreferrer">
                            Claim One of the 5 Spots
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- VALUE -->
        <section class="section section-soft">
            <div class="container">
                <div class="section-head reveal">
                    <span class="kicker">Value</span>
                    <h2>One new job can pay for the whole website.</h2>
                </div>

                <div class="offer-panel reveal">
                    <p style="margin: 0; font-size: 1.1rem; line-height: 1.7; color: var(--ink-soft);">
                        If your average job is worth S$300, you need just 3 extra customers to cover it. For renovation and contracting, one job can cover it several times over.
                    </p>

                    <div class="compare-wrap" style="margin-top: 28px;">
                        <table class="compare-table" aria-label="Comparison table">
                            <thead>
                                <tr>
                                    <th>Option</th>
                                    <th>Cost</th>
                                    <th>Ready in</th>
                                    <th>Built for enquiries</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>DIY (Wix etc.)</strong></td>
                                    <td>Your time</td>
                                    <td>Weeks, if you finish</td>
                                    <td>Depends on you</td>
                                </tr>
                                <tr>
                                    <td><strong>Typical agency</strong></td>
                                    <td>S$1,500–5,000+</td>
                                    <td>4–8 weeks</td>
                                    <td>Depends</td>
                                </tr>
                                <tr class="dop-cell">
                                    <td><strong>DOPDEV</strong></td>
                                    <td>S$690</td>
                                    <td>7 days</td>
                                    <td>Yes</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- PORTFOLIO -->
        <section class="section">
            <div class="container">
                <div class="section-head reveal">
                    <span class="kicker">Portfolio</span>
                    <h2>See what yours could look like.</h2>
                    <p style="margin: 16px auto 0; max-width: 680px; font-size: 1.08rem; color: var(--ink-soft); line-height: 1.7;">Live demo pages for popular home service industries. Open them on your phone.</p>
                </div>

                <div class="portfolio-grid">
                    <article class="portfolio-card reveal">
                        <div class="portfolio-visual" aria-hidden="true">
                            <div class="browser-frame">
                                <div class="browser-bar">
                                    <span class="browser-dot"></span>
                                    <span class="browser-dot"></span>
                                    <span class="browser-dot"></span>
                                </div>
                                <div class="browser-body" style="padding: 0; overflow: hidden;">
                                    <img src="images/examples/contractor.png" alt="Contractor landing page preview" style="width: 100%; height: 100%; object-fit: cover;" />
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-card-body">
                            <h3>Contractor</h3>
                            <p>Showcase your projects and make it easy to request a quotation.</p>
                            <a class="portfolio-link" href="https://landing.dopdev.com/contractor" target="_blank" rel="noopener noreferrer">View live demo</a>
                        </div>
                    </article>

                    <article class="portfolio-card reveal">
                        <div class="portfolio-visual" aria-hidden="true">
                            <div class="browser-frame">
                                <div class="browser-bar">
                                    <span class="browser-dot"></span>
                                    <span class="browser-dot"></span>
                                    <span class="browser-dot"></span>
                                </div>
                                <div class="browser-body" style="padding: 0; overflow: hidden;">
                                    <img src="images/examples/cleaning.png" alt="Cleaning service landing page preview" style="width: 100%; height: 100%; object-fit: cover;" />
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-card-body">
                            <h3>Cleaning Service</h3>
                            <p>Build trust, present your packages and capture cleaning quote requests.</p>
                            <a class="portfolio-link" href="https://landing.dopdev.com/cleaning" target="_blank" rel="noopener noreferrer">View live demo</a>
                        </div>
                    </article>

                    <article class="portfolio-card reveal">
                        <div class="portfolio-visual" aria-hidden="true">
                            <div class="browser-frame">
                                <div class="browser-bar">
                                    <span class="browser-dot"></span>
                                    <span class="browser-dot"></span>
                                    <span class="browser-dot"></span>
                                </div>
                                <div class="browser-body" style="padding: 0; overflow: hidden;">
                                    <img src="images/examples/electritian.png" alt="Electrician landing page preview" style="width: 100%; height: 100%; object-fit: cover;" />
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-card-body">
                            <h3>Electrician</h3>
                            <p>Look professional and make it simple to call or WhatsApp you.</p>
                            <a class="portfolio-link" href="https://landing.dopdev.com/electrician" target="_blank" rel="noopener noreferrer">View live demo</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- HOW IT WORKS -->
        <section class="section section-soft">
            <div class="container">
                <div class="section-head reveal">
                    <span class="kicker">How it works</span>
                    <h2>Simple. Fast. No pressure.</h2>
                </div>

                <div class="steps-wrap reveal" id="stepsWrap">
                    <div class="steps-line" aria-hidden="true"></div>
                    <div class="steps-grid">
                        <article class="step-card">
                            <div class="step-no">01</div>
                            <h3>Message us</h3>
                            <p>Tell us your business and services on WhatsApp.</p>
                        </article>

                        <article class="step-card">
                            <div class="step-no">02</div>
                            <h3>Free mockup</h3>
                            <p>We design your homepage draft first so you can see the direction.</p>
                        </article>

                        <article class="step-card">
                            <div class="step-no">03</div>
                            <h3>Approve &amp; pay 50%</h3>
                            <p>Happy with it? We build the full page.</p>
                        </article>

                        <article class="step-card">
                            <div class="step-no">04</div>
                            <h3>Launch</h3>
                            <p>Pay the remaining 50% and go live in 7 days.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- PROMISE -->
        <section class="section">
            <div class="container">
                <div class="promise-box reveal">
                    <strong>You see the design before you pay.</strong>
                    <p>If you don’t like the direction, you walk away and owe nothing.</p>
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section class="section section-soft">
            <div class="container">
                <div class="section-head reveal">
                    <span class="kicker">Questions</span>
                    <h2>Frequently asked questions</h2>
                </div>

                <div class="faq-wrap reveal">
                    <div class="faq-item is-open">
                        <button type="button" aria-expanded="true">
                            <span>Is there any hidden cost?</span>
                            <span class="faq-icon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-answer">
                            <p>Hosting and domain setup for year 1 are included. After that, hosting is roughly S$XX per year. Anything outside the list above is quoted before we start.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button type="button" aria-expanded="false">
                            <span>You're based in Indonesia. How do we work together?</span>
                            <span class="faq-icon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-answer">
                            <p>Everything runs over WhatsApp and email, during Singapore hours (we’re just 1 hour behind SGT). Payment by PayNow or bank transfer.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button type="button" aria-expanded="false">
                            <span>I don't have photos or content ready.</span>
                            <span class="faq-icon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-answer">
                            <p>Send what you have. We’ll guide you on what to write and which photos to take.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button type="button" aria-expanded="false">
                            <span>Do you handle updates after launch?</span>
                            <span class="faq-icon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-answer">
                            <p>Yes. An optional care plan is available at S$39 per month, or we can quote one-off updates on request.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button type="button" aria-expanded="false">
                            <span>Will this get me on page 1 of Google?</span>
                            <span class="faq-icon" aria-hidden="true">+</span>
                        </button>
                        <div class="faq-answer">
                            <p>We set up the technical foundations, but no one can honestly guarantee rankings. For faster results, many businesses pair the page with a Google Business Profile or ads, and we can advise on that.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FINAL CTA -->
        <section class="section">
            <div class="container">
                <div class="final-cta reveal">
                    <span class="kicker" style="color: rgba(255,255,255,0.7); margin-bottom: 14px;">Final CTA</span>
                    <h2>Only 5 spots at S$690 this month.</h2>
                    <p>Send us your business name and we’ll show you a free mockup. No commitment.</p>
                    <div class="cta-row">
                        <a class="btn btn-light" href="https://wa.me/6282125189383?text=Hi%20Dopdev%2C%20I%27d%20like%20a%20free%20homepage%20mockup.%20My%20business%20is%3A" target="_blank" rel="noopener noreferrer">
                            Chat on WhatsApp
                        </a>
                    </div>
                    <div class="final-small" style="margin-top: 14px; color: rgba(255,255,255,0.7);">No pressure. Just a conversation about your business.</div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container footer-inner">
            <div><strong>DOPDEV</strong> · Web Design &amp; Development Studio · dopdev.com</div>
            <div>By messaging us, you consent to us using your details to respond to your enquiry (PDPA).</div>
        </div>
    </footer>

    <div class="mobile-wa" id="mobileWaBar" aria-live="polite">
        <a class="btn btn-primary" href="https://wa.me/6282125189383?text=Hi%20Dopdev%2C%20I%27d%20like%20a%20free%20homepage%20mockup.%20My%20business%20is%3A" target="_blank" rel="noopener noreferrer">
            Get Your Free Mockup on WhatsApp
        </a>
    </div>

    <script>
        (function () {
            const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            function revealSections() {
                const items = document.querySelectorAll('.reveal');
                if (!items.length) return;

                const observer = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.18 });

                items.forEach(function (item) {
                    observer.observe(item);
                });
            }

            function setupFaq() {
                const items = document.querySelectorAll('.faq-item');
                items.forEach(function (item) {
                    const button = item.querySelector('button');
                    const answer = item.querySelector('.faq-answer');
                    if (!button || !answer) return;

                    button.addEventListener('click', function () {
                        const isOpen = item.classList.contains('is-open');
                        items.forEach(function (other) {
                            other.classList.remove('is-open');
                            other.querySelector('button').setAttribute('aria-expanded', 'false');
                        });

                        if (!isOpen) {
                            item.classList.add('is-open');
                            button.setAttribute('aria-expanded', 'true');
                        }
                    });
                });
            }

            function setupStepsLine() {
                const stepsWrap = document.getElementById('stepsWrap');
                if (!stepsWrap) return;
                const observer = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            stepsWrap.classList.add('is-visible');
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.2 });
                observer.observe(stepsWrap);
            }

            function setupStickyBar() {
                const bar = document.getElementById('mobileWaBar');
                if (!bar) return;
                const hero = document.querySelector('.hero');
                if (!hero) return;

                const threshold = hero.offsetTop + hero.offsetHeight - 100;
                function check() {
                    if (window.scrollY > threshold) {
                        bar.classList.add('is-visible');
                    } else {
                        bar.classList.remove('is-visible');
                    }
                }
                check();
                window.addEventListener('scroll', check, { passive: true });
            }

            function countPrice() {
                const target = document.querySelector('.price-main');
                if (!target) return;
                const text = target.textContent;
                const num = Number(text.replace(/[^\d]/g, '')) || 690;
                const duration = 900;
                if (prefersReducedMotion) {
                    target.textContent = 'S$690';
                    return;
                }

                let start = null;
                function tick(ts) {
                    if (!start) start = ts;
                    const progress = Math.min((ts - start) / duration, 1);
                    const eased = 1 - Math.pow(1 - progress, 3);
                    const value = Math.round(num * eased);
                    target.textContent = 'S$' + value;
                    if (progress < 1) {
                        requestAnimationFrame(tick);
                    } else {
                        target.textContent = 'S$690';
                    }
                }

                const observer = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) {
                            requestAnimationFrame(tick);
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.35 });

                observer.observe(target);
            }

            if (!prefersReducedMotion) {
                revealSections();
                setupFaq();
                setupStepsLine();
                setupStickyBar();
                countPrice();
            } else {
                document.querySelectorAll('.reveal').forEach(function (el) {
                    el.classList.add('is-visible');
                });
                document.querySelectorAll('.faq-item').forEach(function (item) {
                    item.classList.add('is-open');
                    const button = item.querySelector('button');
                    if (button) button.setAttribute('aria-expanded', 'true');
                });
                const bar = document.getElementById('mobileWaBar');
                if (bar) bar.classList.add('is-visible');
                const price = document.querySelector('.price-main');
                if (price) price.textContent = 'S$690';
            }
        })();
    </script>
</body>

</html>
