<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend Portal - PalmCo.de</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @php $rand = Str::random(12); @endphp
    <link rel="stylesheet" href="style.css?v={{ $rand }}">
</head>
<body>
    <div class="container">
        <div id="typed-text" class="header fade-in"></div>
        <div class="paragraph animated fade-in">
            This portal provides powerful tools and features for managing your backend operations efficiently.
        </div>
        <ul class="recommendations fade-in">
            <li>form-submissions - 🟢 200 OK!</li>
            <li>members - 🟢 200 OK!</li>
            <li>surfing-bookings - 🟢 200 OK!</li>
            <li>authentication - 🟢 200 OK!</li>
        </ul>
        <div class="mt-4">
            <div class="btn-group-vertical" role="group" aria-label="Basic example">
                <a href="/telescope" target="_blank" class="btn btn-outline-secondary my-1">➤ Monitoring by <abbr title="Telescope">Telescope</abbr></a>
                <a href="https://documenter.getpostman.com/view/32442929/2sA3JJ9PAY" target="_blank" class="btn btn-outline-secondary my-1">➤ API Documentation</a>
              </div>
        </div>
    </div>

    <footer class="footer p-5">
        <div>&copy;2024 - With gratitude to <a href="https://www.instagram.com/palmco.de/" target="_blank" style="color:#fff;">Palm Co.De</a>, I humbly present this code as a token of appreciation for the wonderful opportunity. Warm regards, Bintang Tobing</div>
        <div class="footer-icons mb-3">
            <a href="https://github.com/bintangjtobing/palmCodeBE" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://linkedin.com/in/bintangtobing" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://instagram.com/bcjlt" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            var options = {
                strings: [
                    'Welcome to backend portal API PalmCo.De👋, Im Bintang',
                    'Im diving into the Sr. Full Stack Developer test for Palm Co.De!', 'Thank you for the opportunity!',
                ],
                typeSpeed: 35,
                backDelay: 500,
                startDelay: 1000, // Kecepatan mengetik (dalam ms)
                loop: true // Mengulang animasi setelah selesai
            };

            var typed = new Typed('#typed-text', options);

            // Mengisi rekomendasi setelah animasi selesai
            typed.onComplete(() => {
                var recommendations = document.querySelectorAll('.recommendations li');
                options.strings.forEach((text, index) => {
                    recommendations[index].innerText = text;
                });
            });
        });
    </script>
</body>
</html>
