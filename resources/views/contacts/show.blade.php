<x-app-layout>
    <div class="max-w-lg mx-auto p-4 sm:p-6 lg:p-8 bg-pink-800 rounded-lg">
        <h1 class="text-white text-2xl font-semibold mb-4">Datos de Contacto</h1>
        <p class="text-white"><strong>Nombre:</strong> {{ $contact->first_name }} {{ $contact->last_name }}</p>
        <p class="text-white"><strong>Email:</strong> {{ $contact->email }}</p>
        <p class="text-white"><strong>Teléfono:</strong> {{ $contact->phone }}</p>
        <p class="text-white"><strong>Dirección:</strong> {{ $contact->address }}</p>
        <p class="text-white"><strong>Fecha de Nacimiento:</strong> {{ $contact->birthdate }}</p>
        @if ($contact->profile_picture)
            <img src="{{ asset('storage/' . $contact->profile_picture) }}" alt="Foto de Perfil" class="rounded-full h-32 w-32 object-cover mt-4">
        @endif
    </div>
</x-app-layout>