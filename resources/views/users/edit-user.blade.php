<x-app-layout>
    <div class="">
        <h1 class="text-gray-800 dark:text-gray-200 flex justify-center mt-8 text-xl">Editando {{ $user->name }}</h1>
        <form method="POST" class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-16 bg-gray-400 dark:bg-gray-700 rounded p-4" action="{{ route('users.update', $user->id) }}">
            @method('put')
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $user->name }}" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $user->email)" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ms-4">
                    {{ __('Alterar') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
