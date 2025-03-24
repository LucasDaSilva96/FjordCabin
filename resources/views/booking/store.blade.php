<x-layout.default>
    <x-h1-animation text="Book a Cottage" />
    <section class="p-4 flex flex-wrap justify-center gap-4 mt-6">
        <div class="booking-form bg-white p-6 rounded-lg shadow-md min-w-lg">
            <h2 class="text-2xl font-bold mb-4 text-gray-700">Booking Form</h2>
            <form action="/bookings/store" method="POST">
                @csrf
                @method('POST')
                <div class="form-group mb-4">
                    <label for="cottage_title" class="block text-sm font-medium text-gray-700">Cottage:</label>
                    <input value="{{$cottage->title}}" disabled id="cottage_title" name="cottage_title" required class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm text-black"/>
                        <!-- Options should be dynamically generated from available cottages -->

                    <input type="hidden" id="cottage_id" name="cottage_id" value="{{$cottage->id}}">

                    @error('cottage_id')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>

                    @enderror
                </div>
                <div class="form-group mb-4">
                    <label for="start_date" class="block text-sm font-medium text-gray-700">Start Date:</label>
                    <input type="date" id="start_date" name="start_date" required class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm text-black">
                    @error('start_date')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>

                    @enderror
                </div>
                <div class="form-group mb-4">
                    <label for="end_date" class="block text-sm font-medium text-gray-700">End Date:</label>
                    <input type="date" id="end_date" name="end_date" required class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm text-black">
                    @error('end_date')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>

                    @enderror
                </div>
                {{-- <div class="form-group mb-4">
                    <label for="total_price" class="block text-sm font-medium text-gray-700">Total Price:</label>
                    <input type="number" id="total_price" name="total_price" required class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm text-black" value="{{ random_int(100, 1000) }}" readonly>
                </div> --}}

                <div class="form-group">
                    <button type="submit" class="submit-button bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 cursor-pointer">Book Now</button>
                </div>
            </form>
        </div>
    </section>
</x-layout.default>
