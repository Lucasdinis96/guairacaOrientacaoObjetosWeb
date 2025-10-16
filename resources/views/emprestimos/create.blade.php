@extends('layouts.app')

@section('slot')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="p-6 bg-white dark:bg-gray-800">
            <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-6">
                Adicionar Emprestimo
            </h1>
        </div>
        <!-- Mensagem de Erro -->
        @if ($errors->any())
            <div class="mb-4 bg-red-100 text-red-700 p-4 rounded">
                <ul>
                    @foreach ($errors->all as $error )
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>

@endsection