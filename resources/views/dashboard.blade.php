<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bem-vindo ao Sistema') }}
        </h2>
    </x-slot>

    <div class="flex flex-col h-screen">
        <div class="py-6 flex-grow">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-lime-100 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h1 class="text-3xl font-bold text-gray-70 mb-2">Seja bem-vindo à Plataforma de Gestão de Clientes</h1>
                        <p class="text-lg text-gray-600">Criado utilizando a estrutura do Laravel Breeze</p>
                    </div>
                </div>
            </div>
        </div>

        <footer class="bg-lime-200 text-center py-4">
            <p class="text-sm text-gray-600">Desenvolvido por Bruno Portugal</p>
        </footer>
    </div>
</x-app-layout>
