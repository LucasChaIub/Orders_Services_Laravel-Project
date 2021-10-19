<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Cadastro de Empresa
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('companies.store') }}" method="POST">
                        @csrf
                        <div>
                            <label>Nome: </label>
                            <input type="text" name="name">
                        </div>
                        <div>
                            <label>Slug: </label>
                            <input type="text" name="slug">
                        </div>
                        <div>
                            <label>Logo: </label>
                            <input type="file" name="logo">
                        </div>
                        <div>
                            <label>CNPJ: </label>
                            <input type="text" name="cnpj">
                        </div>
                
                        <div>
                            <x-button type="submit" class="mb-4">Cadastrar</x-button>
                        </div>           
                    </form>
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
