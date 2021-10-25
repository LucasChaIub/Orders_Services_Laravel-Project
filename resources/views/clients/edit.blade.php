<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editando o Cliente {{ $client->name }}
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

                    <form action="{{ route('clients.update', $client) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div>
                            <label>Nome: </label>
                            <input type="text" name="name"  value="{{ $client->name }}">
                        </div>
                        <div>
                            <label>Sobrenome: </label>
                            <input type="text" name="lastname" value="{{ $client->lastname }}">
                        </div>
                        <div>
                            <label>E-mail: </label>
                            <input type="text" name="email" value="{{ $client->email }}">
                        </div>
                        <div>
                            <label>CPF: </label>
                            <input type="text" name="cpf" value="{{ $client->cpf }}">
                        </div>
                        <div>
                            <label>CNPJ: </label>
                            <input type="text" name="cnpj" value="{{ $client->cnpj }}">
                        </div>
                        <div>
                            <x-button type="submit" class="mb-4">Atualizar Cliente</x-button>
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
                    <a href="{{ route('clients.show', $client) }}">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>