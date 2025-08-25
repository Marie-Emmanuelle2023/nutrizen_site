@extends('layouts.app')

@section('content')
    <div class="w-full h-[250px] ">
        <img src="/img/petit-dejeune.jpg" alt="" class="object-cover w-full rotate-180 " style="height: 250px">
    </div>
    <h2 class="text-2xl font-bold mt-6 mb-6 text-center">Contactez-nous</h2>

    <div class="max-w-lg mx-auto mt-10 p-8 bg-white rounded-xl shadow">

        @if (session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('contacter.store') }}" class="space-y-5">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
                <input type="text" id="name" name="name" required value="{{ old('name') }}"
                    class="mt-1 block w-full rounded border-gray-700 shadow-md focus:ring-blue-500 focus:border-blue-500">
                @error('name')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required value="{{ old('email') }}"
                    class="mt-1 block w-full rounded border-gray-300 shadow-md focus:ring-blue-500 focus:border-blue-500">
                @error('email')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="phone" class="block text-sm font-medium text-gray-700">Téléphone</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone') }}"
                    class="mt-1 block w-full rounded border-gray-300 shadow-md focus:ring-blue-500 focus:border-blue-500">
                @error('phone')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="address" class="block text-sm font-medium text-gray-700">Adresse</label>
                <input type="text" id="address" name="address" value="{{ old('address') }}"
                    class="mt-1 block w-full rounded border-gray-300 shadow-md focus:ring-blue-500 focus:border-blue-500">
                @error('address')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                <textarea id="message" name="message" rows="4" required
                    class="mt-1 block w-full rounded border-gray-300 shadow-md focus:ring-blue-500 focus:border-blue-500">{{ old('message') }}</textarea>
                @error('message')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="w-full py-2 px-4 text-white font-semibold rounded hover:bg-green-700 transition"
                style="background-color: #49C840">Envoyer</button>
        </form>
    </div>
@endsection
