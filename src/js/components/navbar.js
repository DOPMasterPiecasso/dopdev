"use strict";

// Sticky Navbar
function initStickyNavbar() {

    const stickyNav = document.querySelector(".nav-sticky");

    if (!stickyNav) return;

    window.addEventListener("scroll", () => {

        const scTop = window.pageYOffset || document.documentElement.scrollTop;

        stickyNav.classList.toggle("nav-sticky-on", scTop >= 100);

    });
}


// Active Menu Helper
function setActiveLinks(containerSelector) {

    const container = document.querySelector(containerSelector);

    if (!container) return;

    const currentPath = window.location.pathname.replace(/\/$/, "");

    const links = container.querySelectorAll("a[href]");

    links.forEach((link) => {

        const href = link.getAttribute("href");

        if (!href) return;

        const normalizedHref = href.replace(/\/$/, "");

        if (!normalizedHref) {
            if (currentPath === "" || currentPath.endsWith("/index.php") || currentPath.endsWith("/index")) {
                link.classList.add("active");
            }
            return;
        }

        if (
            currentPath === normalizedHref ||
            currentPath.endsWith("/" + normalizedHref) ||
            currentPath.endsWith(normalizedHref)
        ) {
            link.classList.add("active");
        }

    });
}


// Case Studies Adaptive Category Navigation
function initCaseStudiesAdaptiveNav() {
    const heroNav = document.getElementById("case-study-hero-nav");
    const navbarCase = document.getElementById("navbar-case-studies");
    const navbarCaseMobile = document.getElementById("navbar-case-studies-mobile");
    const navbarMain = document.getElementById("navbar");
    const header = document.querySelector("header");

    if (!heroNav || (!navbarCase && !navbarCaseMobile)) return;

    const sections = ["lp", "company", "booking", "system"]
        .map((id) => document.getElementById(id))
        .filter(Boolean);

    const allCatLinks = document.querySelectorAll(".case-cat-btn");

    function updateActiveState(activeId) {
        allCatLinks.forEach((link) => {
            const cat = link.getAttribute("data-case-cat");
            const isActive = cat === activeId;
            link.classList.toggle("active", isActive);
        });
    }

    function onScroll() {
        const headerHeight = header ? header.offsetHeight : 70;
        const heroRect = heroNav.getBoundingClientRect();

        // Dock when hero nav reaches sticky header
        const isDocked = heroRect.top <= headerHeight;

        if (isDocked) {
            heroNav.classList.add("opacity-0", "pointer-events-none");
            heroNav.classList.remove("opacity-100");

            if (navbarMain) {
                navbarMain.classList.add("opacity-0", "pointer-events-none", "translate-y-2");
                navbarMain.classList.remove("opacity-100", "pointer-events-auto", "translate-y-0");
            }
            if (navbarCase) {
                navbarCase.classList.add("opacity-100", "pointer-events-auto", "translate-y-0");
                navbarCase.classList.remove("opacity-0", "pointer-events-none", "-translate-y-2");
            }
            if (navbarCaseMobile) {
                navbarCaseMobile.classList.add("max-h-20", "opacity-100", "translate-y-0", "pointer-events-auto", "border-default-200/60");
                navbarCaseMobile.classList.remove("max-h-0", "opacity-0", "-translate-y-2", "pointer-events-none", "border-transparent");
            }
        } else {
            heroNav.classList.remove("opacity-0", "pointer-events-none");
            heroNav.classList.add("opacity-100");

            if (navbarMain) {
                navbarMain.classList.remove("opacity-0", "pointer-events-none", "translate-y-2");
                navbarMain.classList.add("opacity-100", "pointer-events-auto", "translate-y-0");
            }
            if (navbarCase) {
                navbarCase.classList.remove("opacity-100", "pointer-events-auto", "translate-y-0");
                navbarCase.classList.add("opacity-0", "pointer-events-none", "-translate-y-2");
            }
            if (navbarCaseMobile) {
                navbarCaseMobile.classList.remove("max-h-20", "opacity-100", "translate-y-0", "pointer-events-auto", "border-default-200/60");
                navbarCaseMobile.classList.add("max-h-0", "opacity-0", "-translate-y-2", "pointer-events-none", "border-transparent");
            }
        }

        // ScrollSpy to highlight currently active section
        let currentSectionId = "";
        const scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
        const offsetThreshold = headerHeight + 80;

        for (let i = sections.length - 1; i >= 0; i--) {
            const sec = sections[i];
            const secTop = sec.offsetTop;
            if (scrollPosition >= secTop - offsetThreshold) {
                currentSectionId = sec.id;
                break;
            }
        }

        updateActiveState(currentSectionId);
    }

    allCatLinks.forEach((link) => {
        link.addEventListener("click", (e) => {
            const href = link.getAttribute("href");
            if (href && href.startsWith("#")) {
                const targetId = href.substring(1);
                const targetEl = document.getElementById(targetId);
                if (targetEl) {
                    e.preventDefault();
                    const headerHeight = header ? header.offsetHeight : 70;
                    const isMobile = window.innerWidth < 1024;
                    const extraMobileOffset = isMobile ? 44 : 0;
                    const targetTop = targetEl.getBoundingClientRect().top + window.pageYOffset - (headerHeight + extraMobileOffset + 16);
                    window.scrollTo({
                        top: Math.max(0, targetTop),
                        behavior: "smooth"
                    });
                    if (window.history && window.history.replaceState) {
                        window.history.replaceState(null, "", href);
                    }
                    updateActiveState(targetId);
                }
            }
        });
    });

    window.addEventListener("scroll", onScroll, { passive: true });
    window.addEventListener("resize", onScroll, { passive: true });
    onScroll();
}


// App Init
document.addEventListener("DOMContentLoaded", () => {

    initStickyNavbar();

    setActiveLinks("#navbar");

    setActiveLinks("#mobile-menu");

    setActiveLinks("#offcanvasSidebar ul");

    initCaseStudiesAdaptiveNav();

});