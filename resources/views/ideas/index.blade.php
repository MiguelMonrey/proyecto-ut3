<x-layout>
    <div class="mt-6 text-white">
        @if ($ideas->count())

                <h2 class="font-bold">Tus ideas</h2>

                <ul class="mt-6">
                    @foreach($ideas as $idea)
                        <li>
                            <a href="/ideas/{{ $idea->id }}" class="text-sm">
                                {{ $idea->description }}
                            </a>
                        </li>
                    @endforeach
                </ul>

        @else
                <p>No tienes ninguna idea.</p>
        @endif
    </div>
    <div>
        <a href="/ideas/create" class="inline-block mt-6 rounded-md bg-indigo-500 px-4 py-2 text-white font-semibold hover:bg-indigo-400">Crear</a>
    </div>
</x-layout>
