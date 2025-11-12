<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terbitkan Buku Anda di Amerta Media - Gratis, Mudah, Profesional</title>
    <!-- Chosen Palette: Amerta Media Brand (Blue, Gold, White) -->
    <!-- Application Structure Plan: Long-form, direct-response landing page designed to convert visitors (aspiring authors) into leads. The structure follows a classic sales funnel: Hero (Attention) -> Problem (Agitation) -> Solution (Interest) -> Benefits (Desire) -> Process/Testimonials (Trust/Conviction) -> CTA/FAQ (Action). This is chosen over a dashboard/SPA as the goal is linear persuasion for advertising, mirroring the reference links. -->
    <!-- Visualization & Content Choices: Report Info (Need Authors) -> Goal (Convert) -> Viz (Landing Page Sections) -> Interaction (Scroll, Read, Click CTA, Expand FAQ) -> Justification (Proven model for lead generation) -> Library/Method (HTML/Tailwind, <details> tag for FAQ, Vanilla JS for smooth scroll). No charts needed as it's not data-heavy, but content-persuasive. -->
    <!-- CONFIRMATION: NO SVG graphics used. NO Mermaid JS used. -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        html {
            scroll-behavior: smooth;
        }
        .cta-button {
            transition: all 0.3s ease;
        }
        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>
<body class="bg-white text-gray-800">

    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div>
                <a href="https://amertamedia.co.id/" class="text-2xl font-extrabold text-blue-900">
                    Amerta Media
                </a>
            </div>
            <div class="hidden md:flex items-center space-x-6">
                <a href="#layanan" class="text-gray-600 hover:text-blue-800 font-medium">Layanan</a>
                <a href="#testimoni" class="text-gray-600 hover:text-blue-800 font-medium">Testimoni</a>
                <a href="#faq" class="text-gray-600 hover:text-blue-800 font-medium">FAQ</a>
                <a href="#cta-final" class="cta-button bg-yellow-500 text-blue-900 font-bold py-2 px-5 rounded-full hover:bg-yellow-400">
                    Konsultasi Gratis
                </a>
            </div>
            <div class="md:hidden">
                <a href="https://api.whatsapp.com/send/?phone=6281356333324&text=Hallo+Amerta+Media&type=phone_number&app_absent=0" class="cta-button bg-yellow-500 text-blue-900 font-bold py-2 px-5 rounded-full hover:bg-yellow-400 text-sm">
                    Chat WA
                </a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="bg-blue-900 text-white pt-20 pb-24">
        <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <div class="flex flex-col space-y-6">
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">
                    Wujudkan Impian Anda Menjadi Penulis Buku Best-Seller!
                </h1>
                <p class="text-lg text-blue-100">
                    Kami bantu terbitkan naskah Anda menjadi buku berkualitas, ber-ISBN, dan dipasarkan secara profesional. Gratis, mudah, dan tanpa ribet.
                </p>
                <div class="pt-4">
                    <a href="https://api.whatsapp.com/send/?phone=6281356333324&text=Hallo+Amerta+Media&type=phone_number&app_absent=0" target="_blank" class="cta-button inline-block bg-yellow-500 text-blue-900 font-bold text-lg py-4 px-10 rounded-full hover:bg-yellow-400 animate-pulse">
                        Konsultasi Gratis via WhatsApp
                    </a>
                    <p class="text-sm mt-3 text-blue-200">Klik di sini untuk ngobrol dengan tim kami.</p>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <img src="https://placehold.co/400x500/FFFFFF/3B82F6?text=Buku+Anda+di+Sini" alt="Contoh Buku Terbit" class="rounded-lg shadow-2xl">
            </div>
        </div>
    </section>

    <!-- Problem Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-blue-900 mb-6">Punya Naskah Brilian, Tapi Bingung?</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-12">
                Banyak penulis berbakat seperti Anda berhenti di tengah jalan karena masalah ini. Apakah Anda mengalaminya?
            </p>
            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="text-4xl mb-4">❌</div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Naskah Ditolak</h3>
                    <p class="text-gray-600">Sudah kirim ke banyak penerbit tapi selalu ditolak tanpa alasan yang jelas.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="text-4xl mb-4">💸</div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Biaya Mahal</h3>
                    <p class="text-gray-600">Diminta membayar biaya pracetak, editing, dan cetak yang sangat besar.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="text-4xl mb-4">⏳</div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Proses Rumit</h3>
                    <p class="text-gray-600">Proses penerbitan yang berbelit-belit, tidak transparan, dan memakan waktu berbulan-bulan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Solution Section -->
    <section class="py-20 bg-blue-800 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6">Amerta Media Hadir Sebagai Solusi!</h2>
            <p class="text-xl max-w-3xl mx-auto">
                Sesuai moto kami, "Sahabat Penulis, Mitra Cerdas", kami berkomitmen menjadi partner terbaik Anda dalam mewujudkan karya. Kami hadir dengan proses yang <span class="font-bold text-yellow-400">MUDAH, CEPAT,</span> dan <span class="font-bold text-yellow-400">PROFESIONAL</span>.
            </p>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="layanan" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-blue-900 text-center mb-16">Kenapa Menerbitkan Buku di Amerta Media?</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="flex items-start space-x-4">
                    <div class="text-3xl pt-1">⚡️</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Proses Cepat & Mudah</h3>
                        <p class="text-gray-600">Kami pangkas birokrasi yang tidak perlu. Cukup kirim naskah, tim kami akan memandu Anda sampai terbit.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="text-3xl pt-1">✅</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Gratis Biaya Terbit*</h3>
                        <p class="text-gray-600">Anda tidak perlu mengeluarkan uang sepeserpun untuk editing, layout, dan desain cover. (*S&K Berlaku)</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="text-3xl pt-1">📚</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">ISBN Resmi & Legal</h3>
                        <p class="text-gray-600">Setiap buku yang terbit di Amerta Media akan mendapatkan nomor ISBN resmi dari Perpusnas.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="text-3xl pt-1">🎨</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Desain Cover Profesional</h3>
                        <p class="text-gray-600">Tim desainer kami siap membuatkan cover buku yang menarik dan menjual sesuai keinginan Anda.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="text-3xl pt-1">💰</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Royalti Menarik</h3>
                        <p class="text-gray-600">Dapatkan sistem royalti yang transparan dan kompetitif untuk setiap buku yang terjual.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="text-3xl pt-1">🛒</div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Bantuan Pemasaran & Penjualan</h3>
                        <p class="text-gray-600">Buku Anda akan kami pasarkan melalui website kami, media sosial, dan marketplace ternama.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-blue-900 text-center mb-16">Proses Terbit Mudah dalam 4 Langkah</h2>
            <div class="relative">
                <div class="hidden md:block absolute top-1/2 left-0 w-full h-0.5 bg-blue-300 -translate-y-1/2"></div>
                <div class="relative grid md:grid-cols-4 gap-12">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center z-10">
                        <div class="bg-blue-800 text-white w-12 h-12 rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-4">1</div>
                        <h3 class="text-lg font-semibold mb-2">Kirim Naskah</h3>
                        <p class="text-sm text-gray-600">Kirimkan naskah lengkap Anda melalui email atau form konsultasi.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center z-10">
                        <div class="bg-blue-800 text-white w-12 h-12 rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-4">2</div>
                        <h3 class="text-lg font-semibold mb-2">Review & Editing</h3>
                        <p class="text-sm text-gray-600">Tim editor kami akan me-review dan melakukan proses editing naskah Anda.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center z-10">
                        <div class="bg-blue-800 text-white w-12 h-12 rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-4">3</div>
                        <h3 class="text-lg font-semibold mb-2">Desain & Layout</h3>
                        <p class="text-sm text-gray-600">Proses layout isi buku dan pembuatan desain cover yang memikat.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center z-10">
                        <div class="bg-blue-800 text-white w-12 h-12 rounded-full flex items-center justify-center text-xl font-bold mx-auto mb-4">4</div>
                        <h3 class="text-lg font-semibold mb-2">Terbit & Pemasaran</h3>
                        <p class="text-sm text-gray-600">Buku Anda resmi terbit, mendapatkan ISBN, dan masuk ke jaringan penjualan kami.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Testimonials Section -->
    <section id="testimoni" class="py-20 bg-blue-900 text-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-16">Apa Kata Para Penulis Kami?</h2>
            <div class="grid md:grid-cols-2 gap-10 max-w-5xl mx-auto">
                <div class="bg-white text-gray-800 p-8 rounded-lg shadow-xl">
                    <div class="text-yellow-500 text-2xl mb-4">⭐⭐⭐⭐⭐</div>
                    <p class="text-lg italic mb-6">"Prosesnya benar-benar di luar ekspektasi. Sangat cepat dan timnya ramah. Dari naskah mentah sampai jadi buku, saya dibimbing penuh. Terima kasih Amerta Media!"</p>
                    <div class="font-bold text-blue-900">- Budi Santoso</div>
                    <div class="text-sm text-gray-600">Penulis Buku "Jejak Langkah"</div>
                </div>
                <div class="bg-white text-gray-800 p-8 rounded-lg shadow-xl">
                    <div class="text-yellow-500 text-2xl mb-4">⭐⭐⭐⭐⭐</div>
                    <p class="text-lg italic mb-6">"Sebagai dosen, saya butuh penerbit yang kredibel untuk buku ajar. Amerta Media memberikan layanan profesional, ISBN cepat keluar, dan kualitas cetaknya sangat baik."</p>
                    <div class="font-bold text-blue-900">- Dr. Rina Puspita, M.Pd.</div>
                    <div class="text-sm text-gray-600">Penulis Buku "Metodologi Penelitian"</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Book Gallery Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-blue-900 text-center mb-16">Buku yang Telah Terbit Bersama Kami</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <img src="https://placehold.co/300x400/3B82F6/FFFFFF?text=Judul+Buku+1" alt="Buku Terbit 1" class="rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                <img src="https://placehold.co/300x400/3B82F6/FFFFFF?text=Judul+Buku+2" alt="Buku Terbit 2" class="rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                <img src="https://placehold.co/300x400/3B82F6/FFFFFF?text=Judul+Buku+3" alt="Buku Terbit 3" class="rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                <img src="https://placehold.co/300x400/3B82F6/FFFFFF?text=Judul+Buku+4" alt="Buku Terbit 4" class="rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section id="cta-final" class="bg-yellow-500 py-20">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-extrabold text-blue-900 mb-6">Jangan Biarkan Naskah Anda Hanya Tersimpan di Laptop!</h2>
            <p class="text-lg text-blue-800 max-w-2xl mx-auto mb-10">
                Tim kami siap membantu Anda. Ambil langkah pertama untuk menjadi penulis profesional sekarang juga.
            </p>
            <a href="https://api.whatsapp.com/send/?phone=6281356333324&text=Hallo+Amerta+Media&type=phone_number&app_absent=0" target="_blank" class="cta-button inline-block bg-blue-900 text-white font-bold text-xl py-5 px-14 rounded-full hover:bg-blue-800">
                Kirim Naskah Sekarang (via WA)
            </a>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-20 bg-white">
        <div class="container mx-auto px-6 max-w-3xl">
            <h2 class="text-3xl font-bold text-blue-900 text-center mb-16">Pertanyaan yang Sering Diajukan (FAQ)</h2>
            <div class="space-y-4">
                <details class="group border rounded-lg p-4 cursor-pointer" open>
                    <summary class="flex justify-between items-center font-semibold text-lg text-gray-800 group-hover:text-blue-800">
                        Apakah benar-benar gratis?
                        <span class="text-blue-800 group-open:rotate-180 transition-transform duration-300">▼</span>
                    </summary>
                    <div class="mt-4 text-gray-600">
                        Benar. Untuk naskah yang lolos seleksi tim editor kami, semua biaya pracetak (editing, layout, desain cover) dan pengurusan ISBN ditanggung oleh Amerta Media. Anda tidak perlu membayar apapun.
                    </div>
                </details>
                <details class="group border rounded-lg p-4 cursor-pointer">
                    <summary class="flex justify-between items-center font-semibold text-lg text-gray-800 group-hover:text-blue-800">
                        Berapa lama proses penerbitannya?
                        <span class="text-blue-800 group-open:rotate-180 transition-transform duration-300">▼</span>
                    </summary>
                    <div class="mt-4 text-gray-600">
                        Proses penerbitan kami relatif cepat. Sejak naskah kami terima dan dinyatakan lolos seleksi, proses editing, layout, hingga siap cetak biasanya memakan waktu 1-2 bulan, tergantung kompleksitas naskah.
                    </div>
                </details>
                <details class="group border rounded-lg p-4 cursor-pointer">
                    <summary class="flex justify-between items-center font-semibold text-lg text-gray-800 group-hover:text-blue-800">
                        Bagaimana sistem royalti-nya?
                        <span class="text-blue-800 group-open:rotate-180 transition-transform duration-300">▼</span>
                    </summary>
                    <div class="mt-4 text-gray-600">
                        Kami menawarkan sistem royalti yang kompetitif dan transparan. Besaran royalti akan dituangkan dalam perjanjian (MoU) resmi sebelum buku diterbitkan. Laporan penjualan diberikan secara berkala.
                    </div>
                </details>
                <details class="group border rounded-lg p-4 cursor-pointer">
                    <summary class="flex justify-between items-center font-semibold text-lg text-gray-800 group-hover:text-blue-800">
                        Apakah naskah saya pasti diterima?
                        <span class="text-blue-800 group-open:rotate-180 transition-transform duration-300">▼</span>
                    </summary>
                    <div class="mt-4 text-gray-600">
                        Semua naskah yang masuk akan melalui proses seleksi oleh tim editor kami. Kami mencari naskah yang berkualitas, orisinal, dan memiliki potensi pasar. Jika naskah Anda belum lolos, tim kami akan memberikan masukan yang membangun.
                    </div>
                </details>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white py-10">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2025 Amerta Media. Hak Cipta Dilindungi.</p>
            <p class="text-sm text-blue-200">Sahabat Penulis, Mitra Cerdas.</p>
        </div>
    </footer>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    const headerOffset = 80;
                    const elementPosition = targetElement.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: "smooth"
                    });
                }
            });
        });
    </script>

</body>
</html>