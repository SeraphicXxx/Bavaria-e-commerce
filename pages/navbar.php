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
<label 
    for="sidebar-toggle" 
    class="fixed inset-0 bg-black/50 z-20 hidden peer-checked:block lg:hidden cursor-pointer">
</label>


<label 
    for="sidebar-toggle" 
    class="hamburger-label">
    <svg height="20" width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M3 12h18M3 6h18M3 18h18"/>
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
            <span class="text-[7px] tracking-[0.35em] text-[#fff] uppercase font-light">INNOVATIVE, ADVANCE</span>
        </div>

    </div>

    <!-- RIGHT SIDE (desktop only) -->
    <ul class="nav-links hidden lg:flex gap-6 items-center">
        <ul class="nav-links hidden lg:flex gap-4">
            <?php if ($isLanding): ?>
                <li><a href="#home" class="nav-section-link" data-section="home">Home</a></li>
                <li><a href="#services" class="nav-section-link" data-section="services">Services</a></li>
                <li><a href="#about" class="nav-section-link" data-section="about">About Us</a></li>
                <li><a href="#contact" class="nav-section-link" data-section="contact">Inquire</a></li>
                <li><a href="#showcase" class="nav-section-link" data-section="showcase">Showcase</a></li>
            <?php else: ?>
                <li><a href="LandingPage.php">Home</a></li>
                <li><a href="LandingPage.php#services">Services</a></li>
                <li><a href="LandingPage.php#about">About Us</a></li>
                <li><a href="LandingPage.php#contact">Inquire</a></li>
                <div class="divider"></div>
                <li><a href="LandingPage.php#showcase">Showcase</a></li>
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
            <li><a href="#contact">Inquire</a></li>
            <li><a href="#showcase">Showcase</a></li>
        <?php else: ?>
            <li><a href="LandingPage.php">Home</a></li>
            <li><a href="LandingPage.php#services">Services</a></li>
            <li><a href="LandingPage.php#about">About Us</a></li>
            <li><a href="LandingPage.php#contact">Inquire</a></li>
             <li><a href="#showcase">Showcase</a></li>
        <?php endif; ?>
        <li class="border-t border-black/10 mt-2 pt-2">
            <a href="MotorsPage.php" class="<?= in_array($current, $motorPages) ? 'active' : '' ?>">
                Motors
            </a>
        </li>
        <li>
            <a href="NewReleasePage.php" class="<?= active('NewReleasePage.php', $current) ?>">
                New Release
                <span class="ml-1 text-[8px] px-1.5 py-0.5 bg-black text-white rounded">NEW</span>
            </a>
        </li>
    </ul>
</div>