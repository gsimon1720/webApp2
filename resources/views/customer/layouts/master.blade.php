<!-- resources/views/layouts/customer.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Dashboard - Eventify</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">

    {{-- ✅ Customer Navbar --}}
    <nav class="bg-gray-800 p-4 flex justify-between">
        <div class="text-xl font-semibold">Eventify</div>
        <div class="space-x-4">
            <a href="{{ route('customer.dashboard') }}" class="hover:underline">Dashboard</a>
            <a href="#" class="hover:underline">My Tickets</a>
            <a href="#" class="hover:underline">Profile</a>
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button class="hover:underline">Logout</button>
            </form>
        </div>
    </nav>

    <main class="p-6">
        @yield('content')
    </main>
</body>
</html>
