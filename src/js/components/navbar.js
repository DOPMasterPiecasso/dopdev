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

        if (
            currentPath === normalizedHref ||
            currentPath.endsWith(normalizedHref)
        ) {
            link.classList.add("active");
        }

    });
}


// App Init
document.addEventListener("DOMContentLoaded", () => {

    initStickyNavbar();

    setActiveLinks("#navbar");

    setActiveLinks("#offcanvasSidebar ul");

});