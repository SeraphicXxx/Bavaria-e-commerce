<?php
$current = basename($_SERVER['PHP_SELF']);

function active($file, $current)
{
    return $file === $current ? 'active' : '';
}

$isLanding = ($current === 'LandingPage.php');
?>

<input type="checkbox" id="sidebar-toggle" class="hidden peer">

<!-- Overlay -->
<label for="sidebar-toggle" class="fixed inset-0 bg-black/50 z-20 hidden peer-checked:block lg:hidden cursor-pointer">
</label>


<label for="sidebar-toggle" class="hamburger-label">
    <svg height="20" width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M3 12h18M3 6h18M3 18h18" />
    </svg>
</label>

<!-- NAVBAR (desktop only) -->
<nav class="navbar">
    <div class="flex flex-row items-center gap-x-2">
        <div class="flex flex-col gap-[2px] cursor-pointer" onclick="location.href='LandingPage.php'">
            <span class="brand">BAVARIA</span>
            <span class="text-[7px] tracking-[0.35em] text-[#fff] uppercase font-light">DRIVE BOLD. LIVE BOLD</span>
        </div>

        <div class="divider"></div>

        <div class="flex flex-col gap-[2px] cursor-pointer" onclick="location.href='LandingPage.php'">
            <span class="sub-brand">Beyond the DRIVE</span>
            <div class="flex flex-row gap-x-1 items-center justify-start">
                <span class="text-[8px] tracking-[0.35em] text-[#fff] uppercase font-light">INNOVATIVE, ADVANCE</span>
                <svg class="size-4 text-[red]" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.55 19A1 1 0 0 1 3 18.13V1.87A1 1 0 0 1 4.55 1l12.2 8.13a1 1 0 0 1 0 1.7z"
                        fill="currentColor" />
                </svg>
            </div>
        </div>

    </div>

    <!-- RIGHT SIDE (desktop only) -->
    <ul class="nav-links hidden lg:flex gap-6 items-center">
        <ul class="nav-links hidden lg:flex gap-4">
            <?php if ($isLanding): ?>
                <li><a href="#home" class="nav-section-link" data-section="home">Home</a></li>
                <li><a href="#services" class="nav-section-link" data-section="services">Services</a></li>
                <li><a href="#about" class="nav-section-link" data-section="about">About Us</a></li>
                <li><a href="#inquire" class="nav-section-link" data-section="inquire">Inquire</a></li>
                <div class="divider"></div>
                <li><a href="./pages/showcase.php" class="nav-section-link <?= active('showcase.php', $current) ?>">Showcase</a></li>
            <?php else: ?>
                <li><a href="../LandingPage.php#home">Home</a></li>
                <li><a href="../LandingPage.php#services">Services</a></li>
                <li><a href="../LandingPage.php#about">About Us</a></li>
                <li><a href="../LandingPage.php#inquire">Inquire</a></li>
                <div class="divider"></div>
                <li><a href="showcase.php" class="nav-section-link <?= active('showcase.php', $current) ?>">Showcase</a></li>
            <?php endif; ?>
        </ul>
    </ul>
</nav>

<!-- MOBILE DROPDOWN MENU -->
<div class="mobile-menu peer-checked:max-h-screen peer-checked:border-b peer-checked:border-black/10">
    <ul class="mobile-nav-links">
        <?php if ($isLanding): ?>
            <li><a href="#home">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#inquire">Inquire</a></li>
            <li><a href="./pages/showcase.php" class="nav-section-link <?= active('showcase.php', $current) ?>">Showcase</a></li>
        <?php else: ?>
            <li><a href="../LandingPage.php#home">Home</a></li>
            <li><a href="../LandingPage.php#services">Services</a></li>
            <li><a href="../LandingPage.php#about">About Us</a></li>
            <li><a href="../LandingPage.php#inquire">Inquire</a></li>
            <li><a href="showcase.php" class="nav-section-link <?= active('showcase.php', $current) ?>">Showcase</a></li>
        <?php endif; ?>
    </ul>
</div>
