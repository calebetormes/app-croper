<x-filament::page>
    <div class="space-y-6">

        {{-- Bloco com os dados do usuário --}}
        <x-filament::section>
            <x-slot name="header">
                Dados do Usuário
            </x-slot>

            <div class="grid grid-cols-2 gap-4">
                <div><strong>Nome:</strong> {{ $record->name }}</div>
                <div><strong>Email:</strong> {{ $record->email }}</div>
                <div><strong>Papel:</strong> {{ $record->role->name ?? 'N/A' }}</div>
                <div><strong>Criado em:</strong> {{ $record->created_at->format('d/m/Y H:i') }}</div>
            </div>
        </x-filament::section>

        {{-- Se existirem vendedores vinculados, exibe tabela --}}
        @if ($record->vendedoresRelacionados->count())
            <x-filament::section>
                <x-slot name="header">
                    Vendedores Gerenciados
                </x-slot>

                <x-filament::section>
    <x-slot name="header">
        Vendedores Gerenciados
    </x-slot>

    <table class="w-full text-sm text-left text-gray-700">
        <thead class="bg-gray-100 font-semibold">
            <tr>
                <th class="px-4 py-2">Nome</th>
                <th class="px-4 py-2">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($record->vendedoresRelacionados as $vendedor)
                <tr class="border-b">
                    <td class="px-4 py-2">{{ $vendedor->name }}</td>
                    <td class="px-4 py-2">{{ $vendedor->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-filament::section>

            </x-filament::section>
        @else
            {{-- Se não houver vendedores vinculados --}}
            <x-filament::section>
                <x-slot name="header">Vendedores Gerenciados</x-slot>
                <div class="text-sm text-gray-500">Nenhum vendedor vinculado.</div>
            </x-filament::section>
        @endif

    </div>
</x-filament::page>
