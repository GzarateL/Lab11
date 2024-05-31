<a href="{{ route('contacts.show', $contact) }}" class="block bg-white mt-6 p-6 border-gray-300 hover:border-indigo-300 hover:ring hover:ring-indigo-200 hover:ring-opacity-50 rounded-md shadow-sm">
    <div class="flex items-center">
        <div class="flex-shrink-0">
            <img src="{{ asset($contact->profile_photo_path) }}" alt="Foto de perfil" class="h-12 w-12 rounded-full">
        </div>
        <div class="flex-1 min-w-0 ms-4">
            <p class="text-sm font-medium text-black truncate dark:text-black">
                {{ $contact->first_name }} {{ $contact->last_name }}
            </p>
            <p class="text-sm text-black truncate dark:text-black">
                {{ $contact->email }}
            </p>
            <p class="text-sm text-black truncate dark:text-black">
                <strong>Dirección:</strong> {{ $contact->address }}
            </p>
            <p class="text-sm text-black truncate dark:text-black">
                <strong>Fecha de Nacimiento:</strong> {{ $contact->birthdate }}
            </p>
        </div>
        <div class="flex-shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-600 -scale-x-100" viewBox="0 0 100 100" xml:space="preserve">
                <path d="M72 23.199A6.2 6.2 0 0 0 65.8 17H35.2a6.2 6.2 0 0 0-6.2 6.199v55.602A6.2 6.2 0 0 0 35.2 85h30.6a6.2 6.2 0 0 0 6.2-6.199V23.199zm-4 55.602A2.2 2.2 0 0 1 65.8 81H35.2a2.2 2.2 0 0 1-2.2-2.199V23.199A2.2 2.2 0 0 1 35.2 21h30.6a2.2 2.2 0 0 1 2.2 2.199v55.602z"/>
                <path d="M65 26a2 2 0 0 0-2-2H38a2 2 0 0 0-2 2v42a2 2 0 0 0 2 2h25a2 2 0 0 0 2-2V26zm-25 2h21v38H40V28z"/>
                <circle cx="50.341" cy="75.003" r="3.455"/>
            </svg>
        </div>
        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
            {{ $contact->phone }}
        </div>
    </div>
</a>
