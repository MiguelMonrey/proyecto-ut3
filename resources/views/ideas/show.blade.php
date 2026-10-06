<x-layout>
    <div class="mt-6 text-white">
        <h2 class="font-bold">Tu idea</h2>

        <div class="mt-6">
            {{ $idea->description }}
        </div>

        <div class="mt-6">
            <a href="/ideas/{{ $idea->id }}/edit"
               class="cursor-pointer rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-400 transition-colors">
                Editar
            </a>
        </div>
    </div>
</x-layout>
