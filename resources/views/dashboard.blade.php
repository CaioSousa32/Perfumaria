<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <table>
                        @foreach(Auth::user()->perfumes as $perfume)
                            <tr>
                                <td>{{$perfume->marca}}</td>
                                <td>{{$perfume->nome}}</td>
                                <td>{{$perfume->nota_oufativa}}</td>
                                <td>{{$perfume->validade}}</td>
                            </tr>
                        @endforeach
                    </table>
                    <form action="/add-perfume" method="POST">
                        @csrf
                        <input type="text" name="marca" placeholder="marca">
                        <input type="text" name="nome" placeholder="nome">
                        <input type="text" name="nota_oufativa" placeholder="nota oufativa">
                        <input type="text" name="validade" placeholder="validade">
                        <input type="submit" value="add">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
