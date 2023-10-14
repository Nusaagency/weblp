<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? '' }}</title>
    <meta name="keywords" content="Web Development, Web, Development, Pembuatan Website, Jasa Pembuatan Website, Jasa Pembuatan Web, Web Development, Wensite Development, Jasa Web Jatinagor Murah, Jasa Web Murah, Jasa Web Sumedang, Jasa Web Development Murah,  Jasa Website Murah, Website Murah, Jasa Murah, Jasa Web Development Murah Indonesia, Paket Web development Murah, Web E-Commerse, Web Ecommerse Website Pendidikan, Website Sekolah, Website kampus, Jasa Pembuatan Web PPOB, Jasa Pembuatan Website Topup Game"/>
    <meta name="description" content="Jasa Web Developent Murah Hanya di nusa agency, Ada promo diskon hingga 20%. Buruan dapatkan sekarang"/>
    <meta name="subject" content="Jasa Web Development">
    <meta name="copyright"content="Nusa Agency">
    <meta name="language" content="id-ID">
    <meta name="robots" content="index,follow" />
    <meta name="revised" content="7, Oktober, 2023" />
    <meta name="abstract" content="Jasa Pembuatan Website">
    <meta name="topic" content="Web Development">
    <meta name="summary" content="Jasa Web Developent Murah Hanya di nusa agency, Ada promo hingga 20%">
    <meta name="Classification" content="Business">
    <meta name="author" content="NusaAgency, digigalmarketingnusantara@gmail.com">
    <meta name="url" content="https://www.nusaagency.com">
    <meta name="category" content="blog">
    <meta name="coverage" content="Worldwide">
    <meta name="rating" content="General">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">


    <meta name="og:title" content="Web Development Nusa Agency"/>
    <meta name="og:type" content="blog"/>
    <meta name="og:url" content="https://nusaagency.com"/>
    <meta name="og:image" content="https://nusaagency.com/wp-content/uploads/Hero-2-1-1080x392.jpg"/>
    <meta name="og:site_name" content="Web Development Nusa Agency"/>
    <meta name="og:description" content="Jasa Web Developent Murah Hanya di nusa agency, Ada promo diskon hingga 20%. Buruan dapatkan sekarang"/>


    <style>
      * {
            scrollbar-width: thin;
            scrollbar-color: var(--secondary) var(--primary);
        }

    </style>
    <!-- head -->
    {{ $head ?? '' }}
    @vite('resources/css/app.css')
</head>
<body>
    {{ $slot ?? '' }}

    @vite('resources/js/app.js')
</body>
</html>