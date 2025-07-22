<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ $title ?? 'All Things Digital' }}</title>

    {{-- Google Fonts: Inter --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')

    {{-- Extra: Add SEO & social meta tags here as needed --}}
</head>
<body class="font-sans text-gray-900 bg-white antialiased">

    @include('layouts.header.index') {{-- Sticky header is OUTSIDE main! --}}

    <main>
        @yield('content')
    </main>

    @include('layouts.footer.index')

    @vite('resources/js/app.js')

    @stack('scripts') {{-- For page-specific scripts --}}
</body>
</html>
