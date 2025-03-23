<x-layout.default>

<div class="flex min-h-full flex-col justify-center px-6  lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-slate-50">Sign in to your account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="/login" method="POST">
        @csrf
        @method('POST')
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
        <button type="submit" class="cursor-pointer flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
      </div>


    </form>



        <a
        href="{{ route('connect') }}"
        class="mt-6 w-full flex items-center justify-center gap-2 rounded-md bg-white px-3 py-1.5 text-sm/6 cursor-pointer font-semibold text-black shadow-xs hover:bg-gray-200 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            <img src="microsoft_logo.svg" alt="Microsoft logo" class="max-w-12 h-auto">
            <span>Log in with Microsoft</span>
        </a>


    <p class="mt-5 text-center text-sm/6 text-slate-50/70">
      Not a member?
      <a href="{{route('register')}}" class="font-semibold text-blue-500 hover:text-blue-600">Register new account</a>
    </p>
  </div>
</div>

</x-layout.default>
