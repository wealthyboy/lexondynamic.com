@php
    $seoTitle = $title ?? 'Lexon Dynamic Consulting Limited | Procurement, EPC, Logistics & Industrial Supply';
    $seoDescription = $description ?? 'Lexon Dynamic Consulting Limited provides procurement, EPC support, logistics, industrial supply, and oil and gas project support services in Nigeria.';
    $seoImage = $image ?? asset('images/lexon-dynamic-logo-transparent.png');
    $seoUrl = $url ?? url()->current();
    $seoType = $type ?? 'website';
    $siteName = $siteName ?? 'Lexon Dynamic';
    $organizationName = $organizationName ?? 'Lexon Dynamic Consulting Limited';
    $phone = '+2349028384220';
    $email = 'info@lexondynamic.com';
    $address = [
        '@type' => 'PostalAddress',
        'streetAddress' => 'NO.7, GAERON CRESCENT DAWAKI EXTENSION',
        'addressLocality' => 'Abuja',
        'addressRegion' => 'FCT',
        'addressCountry' => 'NG',
    ];

    $organizationSchema = [
        '@context' => 'https://schema.org',
        '@type' => $organizationType ?? 'Organization',
        '@id' => url('/') . '#organization',
        'name' => $organizationName,
        'url' => url('/'),
        'logo' => asset('images/lexon-dynamic-logo-transparent.png'),
        'image' => $seoImage,
        'email' => $email,
        'telephone' => $phone,
        'address' => $address,
        'areaServed' => [
            ['@type' => 'Country', 'name' => 'Nigeria'],
        ],
    ];

    $websiteSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        '@id' => url('/') . '#website',
        'name' => $siteName,
        'url' => url('/'),
        'publisher' => ['@id' => url('/') . '#organization'],
    ];

    $webPageSchema = [
        '@context' => 'https://schema.org',
        '@type' => $pageType ?? 'WebPage',
        '@id' => $seoUrl . '#webpage',
        'url' => $seoUrl,
        'name' => $seoTitle,
        'description' => $seoDescription,
        'isPartOf' => ['@id' => url('/') . '#website'],
        'about' => ['@id' => url('/') . '#organization'],
        'primaryImageOfPage' => [
            '@type' => 'ImageObject',
            'url' => $seoImage,
        ],
    ];

    $schema = [$organizationSchema, $websiteSchema, $webPageSchema];

    if (! empty($serviceName)) {
        $schema[] = [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'name' => $serviceName,
            'description' => $seoDescription,
            'provider' => ['@id' => url('/') . '#organization'],
            'areaServed' => ['@type' => 'Country', 'name' => 'Nigeria'],
            'url' => $seoUrl,
            'image' => $seoImage,
        ];
    }

    if (! empty($breadcrumbs)) {
        $schema[] = [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => collect($breadcrumbs)->values()->map(function ($item, $index) {
                return [
                    '@type' => 'ListItem',
                    'position' => $index + 1,
                    'name' => $item['name'],
                    'item' => $item['url'],
                ];
            })->all(),
        ];
    }
@endphp

<title>{{ $seoTitle }}</title>
<meta name="description" content="{{ $seoDescription }}">
<meta name="robots" content="index, follow, max-image-preview:large">
<link rel="canonical" href="{{ $seoUrl }}">

<meta property="og:locale" content="en_NG">
<meta property="og:type" content="{{ $seoType }}">
<meta property="og:site_name" content="{{ $siteName }}">
<meta property="og:title" content="{{ $seoTitle }}">
<meta property="og:description" content="{{ $seoDescription }}">
<meta property="og:url" content="{{ $seoUrl }}">
<meta property="og:image" content="{{ $seoImage }}">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $seoTitle }}">
<meta name="twitter:description" content="{{ $seoDescription }}">
<meta name="twitter:image" content="{{ $seoImage }}">

<script type="application/ld+json">
{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
