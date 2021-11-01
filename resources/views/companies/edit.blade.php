<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editando a Empresa {{ $company->name }}
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

                    <form action="{{ route('companies.update', $company) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div>
                            <label>Nome: </label>
                            <input type="text" name="name"  value="{{ $company->name }}">
                        </div>
                        <div>
                            <label>Logo: </label>
                            <input type="file" name="logo" value="{{ $company->logo }}">
                        </div>
                        <div>
                            <label>CNPJ: </label>
                            <input type="text" name="cnpj" value="{{ $company->cnpj }}">
                        </div>
                        <div>
                            <x-button type="submit" class="mb-4">Atualizar Empresa</x-button>
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
                    <a href="{{ route('companies.show', $company) }}">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>