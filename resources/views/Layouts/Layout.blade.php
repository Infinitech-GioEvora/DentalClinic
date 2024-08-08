<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @section('links')
        <!-- Meta Tags for SEO -->
        <meta name="description"
            content="Discover exceptional dental care at our clinic, where your smile is our priority. We offer comprehensive services to ensure optimal oral health for all ages.">
        <meta name="keywords"
            content="Dentist, Dentist Office, Dentist near me, Emergency Dentist, Pediatric dentist, Family dentist, Kids dentist, Dental Clinic">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="English">
        <meta name="revisit-after" content="3 days">
        <meta name="author" content="Infinitech Advertising Corporation">

        <!-- Favicon (example: using a 32x32 PNG favicon named 'favicon.png' in the root directory) -->
        <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
        <link rel="manifest" href="../favicon/site.webmanifest">

        <!-- CSS Stylesheet (example: linking to a stylesheet named 'styles.css' in the 'css' directory) -->
        <link rel="stylesheet" href="/assets/css/style.css">

        <!-- JavaScript file (example: linking to a script named 'scripts.js' in the 'js' directory) -->
        <script src="/js/scripts.js" defer></script>

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://www.yourwebsite.com">
        <meta property="og:title" content="Infinitech Advertising Corporation">
        <meta property="og:description"
            content="Discover expert web development and system development services tailored to elevate your digital presence.">
        <meta property="og:image" content="https://www.yourwebsite.com/images/og-image.jpg">

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="https://www.yourwebsite.com">
        <meta name="twitter:title" content="Infinitech Advertising Corporation">
        <meta name="twitter:description"
            content="Discover expert web development and system development services tailored to elevate your digital presence.">
        <meta name="twitter:image" content="https://www.yourwebsite.com/images/twitter-card-image.jpg">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <link rel="stylesheet" href="../css/style.css">
    @show
</head>

<body>
    @include('Layouts/Navigation')
    @section('main')
        @yield('content')
    @show

    @section('scripts')

    @show

</body>

</html>
