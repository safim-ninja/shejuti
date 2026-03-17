<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rubaya Nasrin Shejuti | Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />
    <link rel="icon" href="{{ asset('ecology.png') }}" type="image/x-icon">

</head>


<body class="font-[Inter,sans-serif] bg-gray-100 text-gray-800">
    <!-- NAVBAR -->
    <x-navbar />
    <!-- MAIN CONTENT -->

    {{ $slot }}

    <!-- FOOTER -->
    <footer class="bg-gradient-to-r from-emerald-700 to-emerald-600 text-white text-center py-8">
        <div class="container mx-auto px-4">
            <p class="mb-0">© 2026 Rubaya Nasrin Shejuti</p>
        </div>
    </footer>
</body>

</html>
