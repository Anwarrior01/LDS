<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                    <h1>User</h1>
                </div>
            </div>
        </div>
    </div>
    <div>
        <x-guest-layout>
    <form method="POST" action="/dashboard">
        @csrf
        @method("post")

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('PRODUCT NAME')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="Product_Name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('PRODUCT TYPE')" />
            <x-text-input id="email" class="block mt-1 w-full" type="text" name="Product_Type" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="name" :value="__('Quantity')" />
            <x-text-input id="name" class="block mt-1 w-full" type="number" name="Quantity" :value="old('phone')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Descrption')" />
            <x-text-input id="email" class="block mt-1 w-full" type="text" name="Description"  required autocomplete="username" />
            <x-input-error :messages="$errors->get('adress')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('Price')" />
            <x-text-input id="email" class="block mt-1 w-full" type="text" name="price"  required autocomplete="username" />
            <x-input-error :messages="$errors->get('adress')" class="mt-2" />
        </div>



        <div class="flex items-center justify-end mt-4">


            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
    </div>
</x-app-layout>
