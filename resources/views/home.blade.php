<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PopSell - Homepage</title>
    <link rel="icon" href="{{ asset('popsell-favicon.png') }}" type="image/png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-100 text-gray-800">

    <div class="min-h-screen flex flex-col">

        <div class="flex flex-1">

            <!-- Sidebar: Nested Categories -->
            <aside class="w-64 bg-white border-r px-4 py-6">
                <h2 class="text-lg font-semibold mb-4">📂 Categories</h2>
                <ul class="space-y-2 text-sm">
                    <!-- Placeholder for recursive category tree -->
                    <li><a href="#" class="text-gray-700 hover:text-blue-500">Računari</a>
                        <ul class="ml-4 mt-1 space-y-1">
                            <li><a href="#" class="text-gray-600 hover:text-blue-400">Komponente</a>
                                <ul class="ml-4 mt-1">
                                    <li><a href="#" class="text-gray-500 hover:text-blue-300">Grafičke kartice</a></li>
                                    <li><a href="#" class="text-gray-500 hover:text-blue-300">RAM memorije</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#" class="text-gray-700 hover:text-blue-500">Telefoni</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-blue-500">Nekretnine</a></li>
                </ul>
            </aside>

            <!-- Main Content -->
            <main class="flex-1 p-6">

                <!-- Search / Filter Section -->
                <section class="bg-white p-4 rounded shadow mb-6">
                    <form method="GET" action="#" class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <input type="text" name="query" placeholder="Search ads..." class="border px-3 py-2 rounded w-full">
                        <select name="category" class="border px-3 py-2 rounded w-full">
                            <option value="">All Categories</option>
                            <!-- Populate dynamically -->
                            <option value="1">Računari</option>
                        </select>
                        <select name="location" class="border px-3 py-2 rounded w-full">
                            <option value="">All Locations</option>
                            <!-- Populate dynamically -->
                            <option value="Beograd">Beograd</option>
                        </select>
                        <!-- Additional filters: price range, sort, condition -->
                        <input type="number" name="min_price" placeholder="Min Price" class="border px-3 py-2 rounded w-full">
                        <input type="number" name="max_price" placeholder="Max Price" class="border px-3 py-2 rounded w-full">
                        <select name="sort" class="border px-3 py-2 rounded w-full">
                            <option value="">Sort by</option>
                            <option value="price_asc">Price ↑</option>
                            <option value="price_desc">Price ↓</option>
                            <option value="date_new">Newest</option>
                        </select>
                        <button type="submit" class="bg-pink-600 text-white py-2 px-4 rounded hover:bg-pink-700 col-span-full">Search</button>
                    </form>
                </section>

                <!-- Ads Listing -->
                <section>
                    <h2 class="text-xl font-semibold mb-4">📢 Latest Ads</h2>

                    <!-- Placeholder ads -->
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="bg-white p-4 rounded shadow">
                            <img src="https://via.placeholder.com/300x200" class="mb-3 rounded" alt="Ad image">
                            <h3 class="font-semibold text-lg">Polovna grafička kartica</h3>
                            <p class="text-sm text-gray-600">Cena: 15,000 RSD</p>
                            <p class="text-sm text-gray-600">Lokacija: Novi Sad</p>
                            <a href="#" class="text-blue-600 hover:underline text-sm">View Details</a>
                        </div>
                        <div class="bg-white p-4 rounded shadow">
                            <img src="https://via.placeholder.com/300x200" class="mb-3 rounded" alt="Ad image">
                            <h3 class="font-semibold text-lg">iPhone 12 Pro Max</h3>
                            <p class="text-sm text-gray-600">Cena: 75,000 RSD</p>
                            <p class="text-sm text-gray-600">Lokacija: Beograd</p>
                            <a href="#" class="text-blue-600 hover:underline text-sm">View Details</a>
                        </div>
                        <!-- Add more cards dynamically -->

                    </div>
                </section>

            </main>

        </div>

        <!-- Footer -->
        <footer class="bg-white border-t py-4 text-center text-sm text-gray-500">
            © {{ date('Y') }} PopSell. All rights reserved.
        </footer>
        
    </div>
</body>
</html>