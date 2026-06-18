<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/output.css">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <title>Showcase</title>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="main-content">
        <div class="relative-box">
            <img src="../assets/bmwshowcase.jpg" alt="BMW Showcase" class="w-full h-auto">
            <span class="showcase-text-1">FEATURED MODELS</span>
            <span class="showcase-text-2">Engineered for power, designed to impress</span>
            <img src="../assets/corvette.jfif " alt="Corvette" class="w-full h-auto">

            <!-- BMW 3 -->
            <div class="showcaseImage group" data-tooltip="Click to view more on BMW 3 Series" onclick="window.location.href='bmw3series.php'">
                <img src="../assets/dl1.jpg " alt="BMW" class="w-full h-auto">
                <span class="showcase-text-3">BMW 3 Series</span>
                <span class="showcase-text-4">Best-selling, balanced performance and luxury</span>
            </div>

            <!-- Divider -->
            <div class="w-full h-5 bg-gradient-to-b from-[#23282B] to-[#1D0306]"></div>

            <!-- BMW 5 -->
            <div class="showcaseImage group" data-tooltip="Click to view more on BMW 5 Series" onclick="window.location.href='bmw5series.php'">
                <img src="../assets/bmwm5.jpg " alt="BMW" class="w-full h-auto">
                <span class="showcase-text-5">BMW 5 Series</span>
                <span class="showcase-text-6">More premium and spacious</span>
            </div>

            <!-- Divider -->
            <div class="w-full h-5 bg-gradient-to-b from-[#410006] to-[#000]"></div>

            <!-- BMW 7 -->
            <div class="showcaseImage group" data-tooltip="Click to view more on BMW i7" onclick="window.location.href='bmw7series.php'">
                <img src="../assets/bmwi7.jfif " alt="BMW" class="w-full h-auto">
                <span class="showcase-text-7">BMW 7 Series</span>
                <span class="showcase-text-8">Advanced electric luxury with cutting-edge innovation and modern design.</span>
            </div>

            <!-- Divider -->
            <div class="w-full h-5 bg-gradient-to-b from-[#293239] to-[#000]"></div>

            <!-- BMW 4 -->
            <div class="showcaseImage group" data-tooltip="Click to view more on BMW 4 Series" onclick="window.location.href='bmw4series.php'">
                <img src="../assets/bmw2k.jfif " alt="BMW" class="w-full h-auto">
                <span class="showcase-text-9">BMW 4 Series</span>
                <span class="showcase-text-10">Sporty performance with bold, aggressive styling and dynamic road presence.</span>
            </div>  

            <!-- Divider -->
            <div class="w-full h-5 bg-gradient-to-b from-[#353831] to-[#06030A]"></div>

            <!-- BMW 8 -->
            <div class="showcaseImage group" data-tooltip="Click to view more on BMW 8 Series" onclick="window.location.href='bmw8series.php'">
                <img src="../assets/brucemclaren.jfif " alt="BMW" class="w-full h-auto">
                <span class="showcase-text-11">BMW 8 Series</span>
                <span class="showcase-text-12">A premium luxury performance lineup featuring bold styling, advanced technology, and powerful engines designed for high-end grand touring and executive comfort.</span>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    <div id="tooltip" class="fixed hidden bg-black text-white text-xs rounded px-2 py-1 pointer-events-none z-50 whitespace-nowrap"></div>
    <script>
        const tooltip = document.getElementById('tooltip');

        document.querySelectorAll('[data-tooltip]').forEach(el => {
            el.addEventListener('mouseenter', (e) => {
                tooltip.textContent = el.dataset.tooltip;
                tooltip.classList.remove('hidden');
            });

            el.addEventListener('mousemove', (e) => {
                tooltip.style.left = e.clientX + 12 + 'px';
                tooltip.style.top = e.clientY + 12 + 'px';
            });

            el.addEventListener('mouseleave', () => {
                tooltip.classList.add('hidden');
            });
        });
    </script>
</body>

</html>