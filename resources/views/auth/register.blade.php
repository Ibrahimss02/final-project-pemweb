<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" placeholder="Masukkan Nama" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" placeholder="Masukkan Email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" placeholder="Masukkan Password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" placeholder="Masukkan Password Kembali" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <!-- Selecting Role -->
            <div class="mt-4">
                <x-label for="role_id" :value="__('Register Sebagai')" />
                <select name="role_id" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full">
                    <option value="1">Pasien</option>
                    <option value="2">Dokter</option>
                </select>
            </div>

            <!-- Usia -->
            <div class="mt-4">
                <x-label for="usia" :value="__('Usia')" />

                <x-input id="usia" placeholder="Input Usia" class="block mt-1 w-full" type="number" min="0"
                    name="usia" required />
            </div>

            <div class="flex items-center justify-start mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>

            <x-button class="block w-full mt-4">
                {{ __('Buat Akun') }}
            </x-button>
        </form>
    </x-auth-card>
</x-guest-layout>
