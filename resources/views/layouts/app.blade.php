<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Portal Alumni SMK/SMA/MA')</title>
    
    <!-- Primary Meta Tags -->
    <meta
      name="title"
      content="@yield('title', 'Portal Alumni SMK/SMA/MA')"
    />
    <meta
      name="description"
      content="Portal resmi alumni SMK/SMA/MA: pusat informasi, jejaring profesional, kegiatan, dan layanan untuk seluruh lulusan."
    />
    <meta name="keywords" content="portal alumni, SMK, SMA, MA, tracer study, jejaring alumni, karir, beasiswa, pengabdian masyarakat">
    <meta name="author" content="SMK/SMA/MA">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Indonesian">
    <meta name="revisit-after" content="7 days">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Portal Alumni SMK/SMA/MA')">
    <meta property="og:description" content="Portal resmi alumni SMK/SMA/MA: pusat informasi, jejaring profesional, kegiatan, dan layanan untuk seluruh lulusan.">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Portal Alumni SMK/SMA/MA">
    <meta property="og:locale" content="id_ID">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title', 'Portal Alumni SMK/SMA/MA')">
    <meta property="twitter:description" content="Portal resmi alumni SMK/SMA/MA: pusat informasi, jejaring profesional, kegiatan, dan layanan untuk seluruh lulusan.">
    <meta property="twitter:image" content="{{ asset('images/og-image.jpg') }}">
    
    <!-- Additional Meta -->
    <meta name="theme-color" content="#1E3A8A">
    <meta name="msapplication-TileColor" content="#1E3A8A">
    <meta name="application-name" content="Portal Alumni SMK/SMA/MA">
    <meta name="apple-mobile-web-app-title" content="Portal Alumni">
    <meta name="format-detection" content="telephone=no">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
      media="print" onload="this.media='all'"
    />
    <noscript>
      <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
      />
    </noscript>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      // Optimize Tailwind loading
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: '#1E3A8A',
              secondary: '#F59E0B',
              accent: '#10B981',
              surface: '#F8FAFC',
            },
            fontFamily: {
              sans: ['Poppins', 'ui-sans-serif', 'system-ui'],
            },
            boxShadow: {
              soft: '0 25px 50px -12px rgba(30, 58, 138, 0.25)',
            },
            backgroundImage: {
              'hero-pattern':
                "linear-gradient(115deg, rgba(30,58,138,0.85), rgba(15,23,42,0.75)), url('https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?auto=format&fit=crop&w=1400&q=80&fm=webp')",
            },
          },
        },
      };
      
      // Lazy loading optimization
      if ('loading' in HTMLImageElement.prototype) {
        const images = document.querySelectorAll('img[loading="lazy"]');
        images.forEach(img => {
          img.src = img.dataset.src;
        });
      }
    </script>
    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'EducationalOrganization',
        'name' => 'SMK/SMA/MA',
        'url' => url('/'),
        'logo' => asset('images/logo.png'),
        'description' => 'Portal resmi alumni SMK/SMA/MA: pusat informasi, jejaring profesional, kegiatan, dan layanan untuk seluruh lulusan.',
        'address' => [
            '@type' => 'PostalAddress',
            'addressCountry' => 'ID',
            'addressLocality' => 'Indonesia',
        ],
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'telephone' => '+62-xxx-xxxx-xxxx',
            'contactType' => 'customer service',
            'availableLanguage' => ['Indonesian'],
            'email' => 'alumni@smksam.sch.id',
        ],
        'sameAs' => [
            url('/facebook'),
            url('/instagram'),
            url('/linkedin'),
        ],
        'offers' => [
            '@type' => 'Offer',
            'name' => 'Portal Alumni Services',
            'description' => 'Layanan tracer study, legalisir ijazah, surat rekomendasi, dan kolaborasi industri',
            'category' => 'Educational Services',
        ],
        'mainEntity' => [
            '@type' => 'WebSite',
            'name' => 'Portal Alumni SMK/SMA/MA',
            'url' => url('/'),
            'potentialAction' => [
                '@type' => 'SearchAction',
                'target' => url('/search?q={search_term_string}'),
                'query-input' => 'required name=search_term_string',
            ],
        ],
    ], JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}
    </script>
    
    <style>
      [x-cloak] {
        display: none !important;
      }
    </style>
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>
    <script
      defer
      src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"
    ></script>
    @stack('styles')
  </head>
  <body class="bg-slate-50 font-sans text-slate-800 antialiased">
    <div class="relative overflow-hidden">
      @include('partials.header')

      <main class="mt-24">
        @yield('content')
      </main>

      @include('partials.footer')
    </div>
    @stack('scripts')
  </body>
</html>
