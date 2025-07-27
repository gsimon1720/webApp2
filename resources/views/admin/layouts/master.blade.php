<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Include Alpine.js (if not already) -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        dark: {
                            900: '#0f172a',
                            800: '#1e293b',
                            700: '#334155',
                            600: '#475569',
                            500: '#64748b',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .form-label {
            display: block !important;
            color: #333 !important;
            font-size: 1rem !important;
            font-weight: 500 !important;
            margin-bottom: 0.5rem;
        }
        .modal-body {
            background-color: #fff; /* Ensure modal background contrasts with label text */
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-dark-900 text-gray-200 font-sans">
    <div class="flex h-screen">
        <!-- Sidebar -->
        @include('admin.layouts.sidebar')
        
        <!-- Main Content -->
        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- Header -->
           @include('admin.layouts.navbar')
            
            <!-- Main content area -->
            <main class="flex-1 overflow-y-auto p-6 bg-dark-900">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>