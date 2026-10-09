<x-layout>
    @if ($ideas->count())
        <div class="mt-6 text-white">
            <h2 class="font-bold text-xl mb-4">Your Ideas</h2>

            <div class="mt-6 grid grid-cols-2 gap-6">
                @foreach($ideas as $idea)
                    <x-idea-card href="/ideas/{{ $idea->id }}">
                        {{ $idea->description }}
                    </x-idea-card>
                @endforeach
            </div>
        </div>
    @else
        <p>No hay ideas todavía. <a href="/ideas/create" class="underline">Crea una nueva.</a></p>
    @endif
</x-layout>
