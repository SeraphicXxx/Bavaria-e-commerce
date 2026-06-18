<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/output.css">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <title>BMW 3 Series</title>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="main-content">
        <div class="relative-box">
            <img src="../assets/bmw3.jfif" alt="BMW Showcase" class="w-full h-auto">
            <span class="bmw3-text-1">BMW 3 SERIES</span>
            <span class="bmw3-text-2">Best-selling, balanced performance and luxury</span>
            <img src="../assets/bmw33.jfif" alt="BMW Showcase" class="w-full h-auto">
            <span class="bmw3-text-3">BMW 330i xDrive</span>
            <span class="bmw3-text-4">The all-wheel-drive version of the 330i adds enhanced traction and stability, making it ideal for varied road conditions while maintaining the same balanced performance and luxury feel.</span>
            <img src="../assets/bmw333.jfif" alt="BMW Showcase" class="w-full h-auto">
            <span class="bmw3-text-5">BMW M340i</span>
            <span class="bmw3-text-6">A performance-focused upgrade, the M340i features a powerful inline-6 engine, sharper handling, and sport-tuned components—perfect for drivers who want thrilling acceleration without going full M.</span>
            <span class="bmw3-text-7">BMW M340i xDrive</span>
            <span class="bmw3-text-8">Combining high performance with all-wheel-drive confidence, this model delivers strong power, improved grip, and a more aggressive driving experience in all conditions.</span>
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