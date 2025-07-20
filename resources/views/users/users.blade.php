<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Usuários') }}
        </h2>
    </x-slot>
    <x-messages />
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <table class="w-full  text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Nome</th>
                            <th scope="col" class="px-6 py-3">Email</th>
                            <th scope="col" class="px-6 py-3">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                            <td scope="col" class="px-6 py-3">{{ $user->name }}</td>
                            <td scope="col" class="px-6 py-3">{{ $user->email }}</td>
                            <td scope="col" class="px-6 py-3 flex gap-4">
                                <a href="{{ route('users.edit', $user) }}">Editar</a>
                                <form action="{{ route('users.delete', $user->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit">Deletar</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="100">Nenhum usuario</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">{{ $users->links() }}</div>
</x-app-layout>
