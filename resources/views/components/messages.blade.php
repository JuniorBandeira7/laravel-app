@if (session()->has('success'))
    <div class="text-gray-800 dark:text-gray-200 flex justify-center mt-4">{{ session('success') }}</div>
@endif

@if (session()->has('message'))
    <div class="text-gray-800 dark:text-gray-200 flex justify-center mt-4">{{ session(('message')) }}</div>
@endif

@if (session()->has('error'))
    <div class="text-gray-800 dark:text-gray-200 flex justify-center mt-4">{{ session('error') }}</div>
@endif
