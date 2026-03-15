<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfolio Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('ecology.png') }}" type="image/x-icon">

</head>

<body class="font-['Inter',sans-serif] bg-[#F4F7F6]">

    <!-- SIDEBAR -->
    @include('components.sidebar')


    <!-- MAIN AREA -->

    <div class="main ml-60">

        <!-- TOPBAR -->

        <div class="topbar bg-white px-8 py-4 border-b border-[#eee] flex justify-between items-center">
            <h5 class="mb-0 text-lg font-semibold">Dashboard</h5>
            <div class="flex items-center">
                <span class="mr-3">Admin</span>
                <a href="/logout" class="border border-red-500 text-red-500 hover:bg-red-500 hover:text-white transition rounded px-3 py-1 text-sm">Logout</a>
            </div>
        </div>

        <!-- PAGE CONTENT -->

        <div class="content p-8">

            @yield('content')

        </div>

    </div>



</body>

</html>
