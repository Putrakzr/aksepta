<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} - Admin Area</title>

    <!-- Fonts: Outfit for headings, Inter for body -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Outfit:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                        display: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#eff2fb',
                            100: '#dee4f7',
                            200: '#b8c4ed',
                            300: '#90a3de',
                            400: '#6b82cc',
                            500: '#4d66b8',
                            600: '#334C9E',
                            700: '#283b7d',
                            800: '#1b2a5c',
                            900: '#101a3d',
                        },
                        brand: {
                            offwhite: '#FAF7F7',
                            orange: '#ff6600',
                            'orange-hover': '#e65c00',
                        },
                        accent: {
                            amber: '#f59e0b',
                            rose: '#f43f5e',
                            violet: '#8b5cf6',
                        }
                    }
                }
            }
        }
    </script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body { background-color: transparent; }
        /* Hide scrollbars for the frame if desired, or keep them for table overflow */
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }

        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>
<body class="antialiased font-sans p-2 bg-transparent text-slate-900">
    <!-- Main content area for CRUDs -->
    <div id="admin-frame-content">
        @yield('content')
    </div>

    <script>
        // Initialize Lucide icons
        document.addEventListener('DOMContentLoaded', function() {
            lucide.createIcons();
        });
    </script>
</body>
</html>
