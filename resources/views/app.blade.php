<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title inertia>{{ config('app.name', 'Commercial Kitchen Consultants Kenya') }}</title>
    <link rel="icon" type="image/png" href="/favicon.ico">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="2 days">
    <link rel="canonical" href="https://commercialkitchen.co.ke/">
    <meta name="geo.region" content="KE" />
    {{-- <meta name="geo.region" content="TZ, UG, KE" /> --}}
    <meta name="author" content="Commercial Kitchen Consultants Kenya">

    <meta name="description"
        content="At Commercial Kitchens Consultants, we are passionate about supporting the growth and success of the
                        hospitality industry. With years of experience in the field, we understand the unique challenges
                        faced by
                        investors when it comes to commercial kitchens. Our dedicated team of experts is here to guide you
                        through every step of the process, from design to installation, ensuring that your kitchen meets
                        your
                        needs, budget, and timeline. Trust us to be your trusted partner in creating efficient, functional,
                        and
                        inspiring commercial kitchen spaces that drive your business forward.">

    <meta name="keywords"
        content="commercial kitchen appliances, commercial equipment for sale, commercial kitchen company, commercial food warmers, commercial kitchen repair, rent a commercial kitchen near me, small commercial kitchen, commercial exhaust hood, commercial kitchen hoods, commercial kitchen chimney, commercial kitchen exhaust fan, shared commercial kitchen, grease traps for commercial kitchens, commercial vent hood, commercial kitchen sink, commercial kitchen hood installation near me, commercial kitchen floor mats, commercial kitchen cleaning, commercial kitchen cleaning services, commercial kitchen layout, stainless steel kitchen cabinets, stainless steel kitchen sink, stainless steel modular kitchen, stainless steel kitchen countertops, stainless steel outdoor kitchen, stainless steel kitchen trolley, stainless kitchen sinks, stainless steel sinks, shaker style kitchen cabinets, kitchen pantry storage cabinet, pantry storage cabinet, stainless steel wall cabinets, metal kitchen cabinets, steel kitchen cabinets, metal kitchen cabinets for sale, steel kitchen units, vintage metal kitchen cabinets, stainless steel cabinet, outdoor stainless steel cabinets, kitchen counter cabinets, custom kitchen cabinets near me, custom kitchen cabinets, semi custom kitchen cabinets, custom made kitchen cabinets, custom made cabinets, modular kitchen wardrobe design, custom made cabinets near me, commercial bakery equipment, commercial bakery oven, cake baking machine, bread baking machine, cake baking items shop near me, bakery oven for sale, cake baking supplies near me, baking machines, bakery machine price, bakery machine manufacturers, bread baking supplies, professional baking supplies, cake baking supplies, baking appliances, bakery mixer, bakery machines, baking equipments, kitchen sink drain plumbing, small commercial kitchen layout, professional kitchen, commercial kitchens, commercial kitchen for rent near me, commercial kitchen space for rent, commercial kitchen flooring, commercial kitchen for lease, commercial kitchen for rent, stainless steel cable railing, stainless steel deck railing, metal stair railing outdoor, hand railing for steps, indoor railings for stairs, stainless range hood, stainless steel cooker hood, stainless steel hood, cooker hood extractor fan, kitchen hood exhaust fan, kitchen hood vents, range hood exhaust vent, stove hood vent, range hood vent, exhaust hood kitchen, kitchen hood vent installation, cooker hood extractor, under cabinet range hoods, kitchen fan hood, range exhaust fan, best under cabinet range hood, professional gas range, commercial gas range, commercial gas stove, industrial gas stove, commercial gas oven, commercial gas stove price, commercial gas burner, gas pizza oven commercial, commercial electric oven, commercial electric stove, commercial electric range, electric pizza oven commercial, commercial baking ovens, commercial convection oven, professional stove, commercial fridge freezer combo, commercial refrigerator freezer, commercial fridge freezer, commercial refrigerator freezer combo, single door commercial refrigerator, 3 door commercial refrigerator, used commercial refrigerator, used commercial fridge, commercial fridge second hand, commercial display refrigerator, commercial coolers, commercial refrigerator, commercial fridges, commercial refrigerators for sale, commercial fridge for sale, commercial freezers for sale, commercial refrigerator price, store refrigerator, stainless steel kitchen rack shelf, stainless steel shelves, stainless steel shelf, stainless steel rack, 5 shelf metal storage rack, stainless steel food storage, 4 shelf metal storage rack, stainless steel storage containers, stainless steel tool box, stainless steel clothes drying rack, storage shelf rack, wire shelving units, wire shelving rack, metal shelf rack, metal shelving rack, steel shelf rack, metal shelving units for storage, wire storage racks, wire storage shelves, 5 shelf storage rack, stainless steel shelving, wall rack shelves, kitchen wall shelf rack, wall mounted metal shelving, wall mounted wire shelving, wall shelf rack, wall mounted shelving units, wall mounted kitchen shelves, metal rack shelf, metal wall shelves, metal wall shelf, stainless steel undermount sink, storage containers kitchen, stainless steel food prep table, commercial kitchen hood cleaning, stainless steel kitchen work tables, best food storage containers for pantry, kitchen food storage, pantry storage containers with lids, commercial dough mixer, bread dough maker, spiral mixer price, industrial dough mixer, dough mixer machine, flour mixer, dough mixer price, dough maker machine, dough kneader, dough machine, pizza dough maker, chapati dough maker, dough making machine, dough mixer for sale, dough maker, dough mixers, meat mincer machine, meat grinder sausage maker, electric meat grinder, commercial meat grinder, kitchenaid meat grinder, meat grinder, meat grinder for sale, food grinder, meat chopper, food grinder machine, meat slicer machine, electric meat slicer, automatic meat slicer, beef grinder, commercial meat slicer, professional meat slicer, meat slicer for sale, meat slicer, vegetable peeler machine, potato cutter machine, potato peeler, vegetable peeler, potato cutter, potato slicer, peeling machine, commercial lpg gas cylinder price, commercial lpg cylinder, lpg gas stove, lpg gas stove price, lpg gas cylinder near me, hp gas cylinder, lpg gas burner, lpg gas regulator price">

    {{-- Open Graph (OG) Meta Tags --}}
    <meta property="og:title" content="Commercial Kitchen Consultants Kenya">
    <meta property="og:description" content="At Commercial Kitchens Consultants, we are passionate about supporting the growth and success of the
                        hospitality industry. With years of experience in the field, we understand the unique challenges
                        faced by
                        investors when it comes to commercial kitchens. Our dedicated team of experts is here to guide you
                        through every step of the process, from design to installation, ensuring that your kitchen meets
                        your
                        needs, budget, and timeline. Trust us to be your trusted partner in creating efficient, functional,
                        and
                        inspiring commercial kitchen spaces that drive your business forward.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://commercialkitchen.co.ke/socials.png">
    <meta property="og:url" content="https://commercialkitchen.co.ke/">

    {{-- Twitter --}}
    <meta name="twitter:title" content="Commercial Kitchen Consultants Kenya">
    <meta name="twitter:description" content="At Commercial Kitchens Consultants, we are passionate about supporting the growth and success of the
                        hospitality industry. With years of experience in the field, we understand the unique challenges
                        faced by
                        investors when it comes to commercial kitchens. Our dedicated team of experts is here to guide you
                        through every step of the process, from design to installation, ensuring that your kitchen meets
                        your
                        needs, budget, and timeline. Trust us to be your trusted partner in creating efficient, functional,
                        and
                        inspiring commercial kitchen spaces that drive your business forward.">
    <meta name="twitter:image" content="https://commercialkitchen.co.ke/socials.png">

    <!-- Facebook App Links (for mobile apps) -->
    <meta property="al:ios:app_name" content="Commercial Kitchen Consultants Kenya">
    <meta property="al:ios:app_store_id" content="Commercial Kitchen Consultants Kenya">
    <meta property="al:ios:url" content="https://commercialkitchen.co.ke/">
    <meta property="al:android:app_name" content="Commercial Kitchen Consultants Kenya">
    <meta property="al:android:package" content="Commercial Kitchen Consultants Kenya">
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
            "telephone": "+254 115 511 079",
            "contactType": "Managing Director"
        }
    }
    </script>

    <!-- Google tag (gtag.js) GA-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WJH6JVD9CM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-WJH6JVD9CM');
    </script>



    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="antialiased font-montserrat">
    @inertia
</body>



</html>
