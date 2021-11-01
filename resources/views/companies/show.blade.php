<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lista de Empresas
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="font-semibold text-xl text-gray-800 leading-tight">Detalhes da Empresa {{ $company->name }}</h1>
                    <p>Name - {{ $company->name }}</p>
                    <p>Logo - {{ $company->logo }}</p>
                    <p>CNPJ - {{ $company->cnpj }}</p>
                    <div style="padding-top: 1rem">
                        <x-button><a href="{{ route('companies.edit', $company) }}">Editar</a></x-button> 
                    </div>
                    <div style="padding-top: 0.5rem">
                        <form action="{{ route('companies.destroy', $company) }}" method="POST">
                            @csrf 
                            @method('DELETE')
                            <x-button type="submit">
                                Remover
                            </x-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('companies.index') }}">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>