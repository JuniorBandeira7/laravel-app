<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Produtos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <table class="w-full  text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Nome</th>
                            <th scope="col" class="px-6 py-3">Preço</th>
                            <th scope="col" class="px-6 py-3">Quantidade</th>
                            <th scope="col" class="px-6 py-3">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                            <td scope="col" class="px-6 py-3">{{ $product->name }}</td>
                            <td scope="col" class="px-6 py-3">{{ $product->price }}</td>
                            <td scope="col" class="px-6 py-3">{{ $product->qtd }}</td>
                            <td scope="col" class="px-6 py-3"><a href="">Editar</a> <a href="" class="ml-4">Excluir</a></td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="100">Nenhum produto</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">{{ $products->links() }}</div>
</x-app-layout>
