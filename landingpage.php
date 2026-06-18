<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/output.css">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <title>Landing Page</title>
</head>

<body>
    <?php include 'pages/navbar.php'; ?>

    <div class="main-content">
        <!-- Home Section -->
        <section id="home">
            <img src="./assets/img1.png" alt="bg" class="w-full h-auto">
            <div class="relative-box">
                <span class="absolute-text-1">BMW (BAYERISCHE MOTOREN WERKE) IS A GERMAN AUTOMOTIVE COMPANY KNOWN FOR
                    PRODUCING LUXURY VEHICLES, MOTORCYCLES, AND HIGH-PERFORMANCE ENGINES. IT WAS FOUNDED IN 1916 AND IS
                    RECOGNIZED WORLDWIDE FOR ITS FOCUS ON ENGINEERING, PERFORMANCE, AND PREMIUM DESIGN.</span>
                <img src="./assets/img2.jfif" alt="bg" class="w-full h-auto">
                <span class="absolute-text-2">BAYERISCHE <br> MOTOREN WERKE</span>
                <img src="./assets/img3.jfif" alt="bg" class="w-full h-auto">
                <span class="absolute-text-3">B <br> M <br> W</span>
                <img src="./assets/img4.jfif" alt="bg" class="w-full h-auto">
                <span class="absolute-text-4">BMW OFFERS A WIDE RANGE OF ENGINES (FROM SMALL INLINE-3 TO V8 AND
                    ELECTRIC), WITH POWER OUTPUTS FROM ABOUT 134 HP TO OVER 600 HP. MOST MODELS USE AN 8-SPEED AUTOMATIC
                    TRANSMISSION, WITH RWD STANDARD AND AWD (XDRIVE) AVAILABLE. PERFORMANCE VARIES FROM AROUND 3 TO 9+
                    SECONDS FOR 0–100 KM/H. THEY RUN ON GAS, DIESEL, HYBRID, OR FULL ELECTRIC SYSTEMS, AND ARE KNOWN FOR
                    ADVANCED TECH, LUXURY INTERIORS, AND SPORTY HANDLING.</span>
            </div>
        </section>
        <!-- Services Section -->
        <section id="services">
            <div class="services-container">
                <span class="services-title">Services</span>
                <div class="services-wrapper">
                    <div class="services-card group">
                        <svg class="services-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22 12.5s2 2.17 2 3.5a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.33 2-3.5 2-3.5M6 6h4a1 1 0 0 1 1 1a1 1 0 0 1-1 1H9v2h2c.74 0 1.39.4 1.73 1l6.51-3.76l3.26 1.89c.5.27.64.87.37 1.37c-.28.47-.87.64-1.37.36l-2.1-1.21l-3.65 6.32c-.34.61-1 1.03-1.75 1.03H5a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h2V8H6a1 1 0 0 1-1-1a1 1 0 0 1 1-1m-1 6v3h9l2.06-3.57l-3.46 2l-.91-1.43H5M.38 9.21L2.09 7.5c.41-.39 1.02-.39 1.41 0c.39.39.39 1 0 1.41l-1.71 1.71c-.39.38-1.02.38-1.41 0C0 10.23 0 9.6.38 9.21Z"
                                fill="currentColor" />
                        </svg>
                        <span class="services-card-title">Oil Change</span>
                    </div>
                    <div class="services-card group">
                        <svg class="services-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round"
                                strokeWidth="1.5">
                                <path
                                    d="M23.25 8.25a2 2 0 0 0-2-2a.5.5 0 0 0-.5.5v1.5h-3v-2a.5.5 0 0 0-.5-.5h-1.5l-1.5-2h-6.5l-1.5 1.5h-2a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5h2l2 3.5H11m.75-13v-3m3.5 0h-7m-7.5 4.5v8m0-4h3" />
                                <path
                                    d="M21.985 11.674a.277.277 0 0 0-.235-.424h-5.5a.66.66 0 0 0-.637.481l-1.588 5.557a.755.755 0 0 0 .725.962h2l-1.5 5l7.772-7.315a.4.4 0 0 0-.272-.685h-3z" />
                            </g>
                        </svg>
                        <span class="services-card-title">Engine Repair</span>
                    </div>
                    <div class="services-card group">
                        <svg class="services-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24 12c0 3.31-1.34 6.31-3.5 8.5l-1.08-1.08c1.9-1.92 3.08-4.52 3.08-7.42c0-2.89-1.18-5.5-3.08-7.42L20.5 3.5C22.66 5.69 24 8.69 24 12m-4-2.4V8h-3.2c-.88 0-1.6.72-1.6 1.6v1.6a1.6 1.6 0 0 0 1.6 1.6h1.6v1.6h-3.2V16h3.2c.88 0 1.6-.72 1.6-1.6v-1.6a1.6 1.6 0 0 0-1.6-1.6h-1.6V9.6H20M8.42 6c1.05-.63 2.27-1 3.58-1s2.53.37 3.58 1h3.11C17.05 4.16 14.66 3 12 3S6.95 4.16 5.31 6h3.11m4.78 6c.64 0 1.2.56 1.2 1.2v1.2a1.6 1.6 0 0 1-1.6 1.6H9.6V8h3.2a1.6 1.6 0 0 1 1.6 1.6v1.2c0 .64-.56 1.2-1.2 1.2m-.4.8h-1.6v1.6h1.6v-1.6m0-3.2h-1.6v1.6h1.6V9.6M4.58 4.58L3.5 3.5C1.34 5.69 0 8.69 0 12c0 3.31 1.34 6.31 3.5 8.5l1.08-1.08C2.68 17.5 1.5 14.9 1.5 12c0-2.89 1.18-5.5 3.08-7.42M7.2 16v-3.2H5.6V16H4V9.6A1.6 1.6 0 0 1 5.6 8h1.6c.88 0 1.6.72 1.6 1.6V16H7.2m0-4.8V9.6H5.6v1.6h1.6m8.38 6.8c-1.05.63-2.27 1-3.58 1a6.93 6.93 0 0 1-3.58-1H5.31c1.64 1.84 4.03 3 6.69 3s5.05-1.16 6.69-3h-3.11Z"
                                fill="currentColor" />
                        </svg>
                        <span class="services-card-title">Break Service</span>
                    </div>
                    <div class="services-card group">
                        <svg class="services-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round"
                                strokeWidth="2">
                                <circle cx="12" cy="12" r="10" />
                                <circle cx="12" cy="12" r="2" />
                                <circle cx="12" cy="12" r="6" />
                                <path
                                    d="M12 14v4m-1.9-5.38l-3.8 1.23m4.52-3.47L8.47 7.15m5.43 5.47l3.8 1.23m-4.52-3.47l2.35-3.23" />
                            </g>
                        </svg>
                        <span class="services-card-title">Tire & Wheel Services</span>
                    </div>
                    <div class="services-card group">
                        <svg class="services-icon" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <g fill="currentColor">
                                <path
                                    d="M38 10H4v9.375h7.215l3.348-5.437l3.464 7l2.04-3.313h7.236C28.743 14.879 31.668 13 35.042 13c1.038 0 2.035.178 2.958.505z" />
                                <path
                                    d="M21.184 19.625h5.378a8.3 8.3 0 0 0-.212 1.873c0 4.693 3.891 8.498 8.692 8.498A8.9 8.9 0 0 0 38 29.49V34H22v2h4a1 1 0 1 1 0 2H16a1 1 0 1 1 0-2h4v-2H4V21.375h8.332l2.04-3.313l3.464 7zM14 26H8v-2h6zm-6 2v2h12v-2z"
                                    fillRule="evenodd" />
                                <path
                                    d="M38.966 26.53a6.5 6.5 0 1 1 1.337-1.492l3.754 3.755l-1.415 1.414zm.384-5.03a4.5 4.5 0 1 1-9 0a4.5 4.5 0 0 1 9 0"
                                    fillRule="evenodd" />
                            </g>
                        </svg>
                        <span class="services-card-title">Computer Diagnostics</span>
                    </div>
                    <div class="services-card group">
                        <svg class="services-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4 3v3H1v14h22V6h-3V3h-6v3h-4V3H4M3 8h18v10H3V8m12 2v2h-2v2h2v2h2v-2h2v-2h-2v-2h-2M5 12v2h6v-2H5Z"
                                fill="currentColor" />
                        </svg>
                        <span class="services-card-title">Battery Replacement</span>
                    </div>
                    <div class="services-card group">
                        <svg class="services-icon" viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.313 0L0 1.313l2.313 4l1.5-.22l9.156 9.157l-.781.75c-.4.4-.4 1.006 0 1.406l.406.407c.4.4 1.012.4 1.312 0L15.094 18c-.1.6 0 1.313.5 1.813L21 25.188c1.1 1.1 2.9 1.1 4 0c1.3-1.2 1.288-2.994.188-4.094l-5.375-5.407c-.5-.5-1.213-.7-1.813-.5L16.687 14c.3-.4.3-1.012 0-1.313l-.375-.374a.974.974 0 0 0-1.406 0l-.656.656l-9.156-9.156l.218-1.5l-4-2.313zm19.5.031C18.84-.133 16.224 1.175 15 2.312c-1.506 1.506-1.26 3.475-.063 5.376l-2.124 2.125l1.5 1.687c.8-.7 1.98-.7 2.78 0l.407.406l.094.094l.875-.875c1.808 1.063 3.69 1.216 5.125-.219c1.4-1.3 2.918-4.506 2.218-6.406L23 7.406c-.4.4-1.006.4-1.406 0L18.687 4.5a.974.974 0 0 1 0-1.406L21.595.188c-.25-.088-.5-.133-.782-.157zm-11 12.469l-3.626 3.625A5.26 5.26 0 0 0 5 16c-2.8 0-5 2.2-5 5s2.2 5 5 5s5-2.2 5-5c0-.513-.081-1.006-.219-1.469l2.125-2.125l-.312-.406c-.8-.8-.794-2.012-.094-2.813L9.812 12.5zm7.75 4.563c.125 0 .243.024.343.125l5.907 5.906c.2.2.2.518 0 .718c-.2.2-.52.2-.72 0l-5.905-5.906c-.2-.2-.2-.518 0-.718c.1-.1.25-.125.375-.125zM5.688 18.405l1.906 1.907l-.688 2.593l-2.593.688l-1.907-1.907l.688-2.593l2.594-.688z"
                                fill="currentColor" />
                        </svg>
                        <span class="services-card-title">Aircon Maintenance</span>
                    </div>
                    <div class="services-card group">
                        <svg class="services-icon" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg">
                            <g fill="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2">
                                <path
                                    d="M25 43.75a4.167 4.167 0 1 1 0-8.334a4.167 4.167 0 0 1 0 8.334m0-8.333v-25zM27.083 6.25h-4.166v4.167h4.166z"
                                    stroke="currentColor" />
                                <path d="m20.833 17.708l8.334-2.083m-8.334 8.333l8.334-2.083zm0 6.25l8.334-2.083z"
                                    stroke="currentColor" />
                            </g>
                        </svg>
                        <span class="services-card-title">Suspension Repair</span>
                    </div>
                    <div class="services-card group">
                        <svg class="services-icon" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.52 7.62h28.96v22.85H32V1.52h-1.52v4.57H1.52V1.52H0v28.95h1.52z"
                                fill="currentColor" />
                            <path
                                d="M1.52 30.47h28.96V32H1.52Zm19.81-4.57h6.1v1.53h-6.1Zm0-3.05h6.1v1.53h-6.1ZM4.57 10.66v9.15h22.86v-9.15Zm21.33 7.62H15.24v-1.52h-1.53v1.52H6.09v-6.09h15.24v1.52h1.53v-1.52h3.04Z"
                                fill="currentColor" />
                            <path
                                d="M18.29 13.71h3.04v1.52h-3.04Zm-3.05 1.52h3.05v1.53h-3.05ZM4.57 25.9h12.19v1.53H4.57Zm0-3.05h12.19v1.53H4.57ZM9.14 3.04h1.53v1.53H9.14ZM7.62 13.71h3.05v3.05H7.62ZM6.09 3.04h1.53v1.53H6.09Zm-3.04 0h1.52v1.53H3.05ZM1.52 0h28.96v1.52H1.52Z"
                                fill="currentColor" />
                        </svg>
                        <span class="services-card-title">BMW Coding</span>
                    </div>
                    <div class="services-card group">
                        <svg class="services-icon" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1001 663q23 50 23 104q0 106-75 181t-181 75q-54 0-104-22q-74 23-152 23q-104 0-199-40.5t-163.5-109T40.5 711T0 512t40.5-199t109-163.5T313 40.5T512 0t199 40.5t163.5 109t109 163.5t40.5 199q0 77-23 151zM512 896q15 0 34-2q-34-59-34-127q0-72 38-133q-21 6-38 6q-45 0-81-29L269 809q106 87 243 87zm64-383.5q0-26.5-19-45.5t-45-19t-45 19t-19 45t19 45t45 19q27 0 45.5-18.5t18.5-45zm-448-.5q0 137 87 243l198-162q-29-36-29-81q0-26 10-50L159 361q-31 72-31 151zm384-384q-79 0-151 31l101 235q23-10 50-10q45 0 81 29l162-198q-106-87-243-87zm297 141L611 431q29 36 29 81q0 17-6 37q62-38 134-38q67 0 126 34q2-20 2-33q0-137-87-243zm142 434H832v-64q0-26-19-45t-45.5-19t-45 19t-18.5 45v64H585q-9 0-9.5 14t7.5 22l148 141q15 15 37 15t37-15l148-141q8-8 7-22t-9-14z"
                                fill="currentColor" />
                        </svg>
                        <span class="services-card-title">Genuine Parts Installation</span>
                    </div>
                </div>
            </div>
            <div class="subtext-container">
                <span class="subtext">Drive bold. Live bold</span>
            </div>
        </section>
        <!-- About Section -->
        <section id="about">
            <div class="relative-box">
                <img src="./assets/img5.jfif" alt="bg" class="w-full h-auto">
                <span class="absolute-text-5">BAVARIA</span>
                <span class="absolute-text-6">Bavaria is a trusted distributor of BMW vehicles, representing the
                    excellence and global reputation of BMW. The company is dedicated to delivering premium German
                    engineering defined by performance, innovation, and refined design. Through a carefully selected
                    range of vehicles, Bavaria connects customers with one of the world’s most respected automotive
                    brands, ensuring access to cutting-edge technology, exceptional build quality, and a driving
                    experience rooted in precision and luxury. <Br> <Br> Beyond vehicle distribution, Bavaria is
                    committed to providing a complete and seamless customer journey. From professional sales
                    consultation and financing assistance to reliable after-sales service and maintenance support, the
                    company prioritizes long-term customer satisfaction. By upholding BMW’s global standards while
                    offering personalized local service, Bavaria positions itself as a dependable partner for
                    individuals seeking not just a vehicle, but a superior ownership experience built on trust, quality,
                    and performance.</span>
                <div class="specs-absolute">
                    <div class="specs-col">
                        <span class="specs-text">50+</span>
                        <span class="specs-subtext">Vehicles Models</span>
                    </div>
                    <div class="specs-col">
                        <span class="specs-text">140+</span>
                        <span class="specs-subtext">Countries Worldwide</span>
                    </div>
                    <div class="specs-col">
                        <span class="specs-text">15+</span>
                        <span class="specs-subtext">Major Production</span>
                    </div>
                </div>
                <img src="./assets/Bmw.jpg" alt="bg" class="w-full h-auto">
                <img src="./assets/img6.png" alt="bg" class="w-full h-auto">
                <span class="absolute-text-7">Bavaria remains committed to delivering excellence in every aspect of its
                    operations, ensuring that customers receive not only premium vehicles but also a trusted and
                    reliable ownership experience. Guided by integrity, professionalism, and a passion for automotive
                    innovation, the company continues to strengthen its presence in the premium automotive market.
                    Through its dedication to quality service and long-term customer relationships, Bavaria stands as a
                    dependable partner for those who value performance, luxury, and the enduring legacy of BMW.</span>
            </div>
        </section>
        <!-- Inquire Section -->
        <section id="inquire">
            <div class="inquire-container">
                <!-- <img src="./assets/img7.jfif" alt="bg" class="w-full h-auto">     -->
                <div class="inquire-card">
                    <span class="inquire-title">Inquire Now</span>
                    <form action="#" method="post" class="inquire-form">
                        <input type="text" name="name" placeholder="Name" class="inquire-input">
                        <input type="email" name="email" placeholder="Email" class="inquire-input">
                        <input type="text" name="subject" placeholder="Subject" class="inquire-input">
                        <textarea name="message" placeholder="Message" class="inquire-input lg:h-24"></textarea>
                        <button type="submit" class="inquire-button">Send Message</button>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <?php include 'pages/footer.php'; ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-section-link');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        navLinks.forEach(link => {
                            link.classList.remove('active');
                            if (link.dataset.section === entry.target.id) {
                                link.classList.add('active');
                            }
                        });
                    }
                });
            }, { threshold: 0.1 });

            sections.forEach(section => observer.observe(section));
        });
    </script>
</body>

</html>