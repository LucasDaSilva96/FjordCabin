<x-layout.dashboard>
    <section class="p-4 text-black">
        <h1 class="text-3xl font-bold mb-6 text-slate-50">Dashboard</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Total Bookings Card -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold mb-2">Total Bookings</h2>
                <p class="text-2xl">150</p>
            </div>
            <!-- Pending Bookings Card -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold mb-2">Pending Bookings</h2>
                <p class="text-2xl">30</p>
            </div>
            <!-- Confirmed Bookings Card -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold mb-2">Confirmed Bookings</h2>
                <p class="text-2xl">100</p>
            </div>
            <!-- Cancelled Bookings Card -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold mb-2">Cancelled Bookings</h2>
                <p class="text-2xl">10</p>
            </div>
            <!-- Completed Bookings Card -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-bold mb-2">Completed Bookings</h2>
                <p class="text-2xl">10</p>
            </div>
        </div>
        <!-- Recent Bookings Table -->
        <div class="mt-8 bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-bold mb-4">Recent Bookings</h2>
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Booking ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cottage</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Guest</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Start Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">End Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">1</td>
                        <td class="px-6 py-4 whitespace-nowrap">Cottage 1</td>
                        <td class="px-6 py-4 whitespace-nowrap">John Doe</td>
                        <td class="px-6 py-4 whitespace-nowrap">2023-10-01</td>
                        <td class="px-6 py-4 whitespace-nowrap">2023-10-07</td>
                        <td class="px-6 py-4 whitespace-nowrap">Confirmed</td>
                    </tr>
                    <!-- ...additional rows... -->
                </tbody>
            </table>
        </div>
    </section>
</x-layout.dashboard>
