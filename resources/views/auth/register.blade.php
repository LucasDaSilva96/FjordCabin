<x-layout.default>

<div class="flex min-h-full flex-col justify-center px-6  lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-slate-50">Register new Account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="/register" method="POST">
        @csrf
        @method('POST')

         <div>
        <label for="name" class="block text-sm/6 font-medium text-slate-50">Full Name</label>
        <div class="mt-2">
          <input value="{{old('name')}}" type="name" name="name" id="name" autocomplete="name" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-black outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
        </div>
        @error('name')
        <p class="mt-2 text-sm/6 text-red-500" id="email-error">{{ $message }}</p>

        @enderror
      </div>

      <div>
        <label for="email" class="block text-sm/6 font-medium text-slate-50">Email address</label>
        <div class="mt-2">
          <input value="{{old('email')}}" type="email" name="email" id="email" autocomplete="email" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-black outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
        </div>
        @error('email')
        <p class="mt-2 text-sm/6 text-red-500" id="email-error">{{ $message }}</p>

        @enderror
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm/6 font-medium text-slate-50">Password</label>
        </div>
        <div class="mt-2">
          <input type="password" name="password" id="password" autocomplete="current-password" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-black outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
        </div>
        @error('password')
        <p class="mt-2 text-sm/6 text-red-500" id="email-error">{{ $message }}</p>

        @enderror
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password_confirmation" class="block text-sm/6 font-medium text-slate-50">Confirm Password</label>
        </div>
        <div class="mt-2">
          <input type="password" name="password_confirmation" id="password_confirmation" autocomplete="none" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-black outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
        </div>
        @error('password')
        <p class="mt-2 text-sm/6 text-red-500" id="email-error">{{ $message }}</p>

        @enderror
      </div>

      <div>
        <button type="submit" class="cursor-pointer flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Register
        </button>
      </div>


    </form>



    <p class="mt-5 text-center text-sm/6 text-slate-50/70">
      Already a member?
      <a href="/login" class="font-semibold text-blue-500 hover:text-blue-600">Log in</a>
    </p>
  </div>
</div>

</x-layout.default>
