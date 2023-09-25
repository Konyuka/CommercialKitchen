<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title inertia>{{ config('app.name', 'Commercial Kitchen Consutancy') }}</title>

    <!-- Canonical URL (to specify the preferred version of a page) -->
    <link rel="canonical" href="https://commercialkitchen.co.ke/">
    <meta name="description" content="Description of your page or content">
    <meta name="author" content="Commercial Kitchen Consultants Kenya">
    <meta name="keywords" content="Comma-separated list of relevant keywords">

    <!-- Facebook App Links (for mobile apps) -->
    <meta property="al:ios:app_name" content="Commercial Kitchen Consutancy Kenya">
    <meta property="al:ios:app_store_id" content="App Store ID for iPhone">
    <meta property="al:ios:url" content="https://commercialkitchen.co.ke/">
    <meta property="al:android:app_name" content="Commercial Kitchen Consutancy Kenya">
    <meta property="al:android:package" content="App Package Name on Android">
    <meta property="al:android:url" content="https://commercialkitchen.co.ke/">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <meta name="google-site-verification" content="Your Google Search Console Verification Code">
    <script type="application/ld+json">
    {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "Commercial Kitchen Consultants Kenya",
    "url": "https://commercialkitchen.co.ke",
    "logo": "https://commercialkitchen.co.ke/img/logo.jpg",
    "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+254 717 269 050",
            "contactType": "Managing Director"
        }
    }
    </script>



    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="antialiased font-montserrat">
    @inertia

    @push('meta-tags')
        <!-- Set the meta tags for the Twitter card -->
        <meta name="twitter:site" content="@Rochmanproperties">
        <meta name="twitter:creator" content="@Rochmanproperties">
        <meta name="twitter:card" content="article">
        <!-- Other meta tags if needed -->
    @endpush
</body>



</html>
