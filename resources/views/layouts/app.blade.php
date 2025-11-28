<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Portal Alumni SMK/SMA/MA')</title>
    <meta
      name="description"
      content="Portal resmi alumni SMK/SMA/MA: pusat informasi, jejaring profesional, kegiatan, dan layanan untuk seluruh lulusan."
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
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
                "linear-gradient(115deg, rgba(30,58,138,0.85), rgba(15,23,42,0.75)), url('https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?auto=format&fit=crop&w=1400&q=80')",
            },
          },
        },
      };
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
