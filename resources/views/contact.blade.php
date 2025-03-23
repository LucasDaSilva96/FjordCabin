<x-layout.default>
    <x-h1-animation text="Contact Us" />
    <section class="p-4 flex flex-wrap justify-center gap-4 mt-6">
        <!-- Contact Details -->
        <div class="contact-details mb-8">
            <h2 class="text-2xl font-bold mb-4">Contact Information</h2>
            <p class="mb-2">Email: <a href="mailto:info@fjordcabin.com" class="text-blue-500">info@fjordcabin.com</a></p>
            <p class="mb-2">Phone: <a href="tel:+1234567890" class="text-blue-500">+123 456 7890</a></p>
            <p>Address: 123 Fjord Lane, Scenic Town, Country</p>
        </div>
        <!-- Contact Form -->
        <div class="contact-form bg-white p-6 rounded-lg shadow-md min-w-lg">
            <h2 class="text-2xl font-bold mb-4 text-gray-700">Send Us a Message</h2>
            <form action="/contact" method="POST">
                @csrf
                <div class="form-group mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                    <input type="text" id="name" name="name" required class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm text-black">
                </div>
                <div class="form-group mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                    <input type="email" id="email" name="email" required class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm text-black">
                </div>
                <div class="form-group mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-700">Message:</label>
                    <textarea id="message" name="message" required class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm text-black"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" disabled class="submit-button bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 cursor-pointer">Send</button>
                </div>
            </form>
        </div>
    </section>
</x-layout.default>
