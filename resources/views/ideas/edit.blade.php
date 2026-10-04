<x-layout>
    <form method="POST" action="/ideas/{{ $idea->id }}">
        @csrf
        @method('PATCH')

        <div class="col-span-full">
            <label for="description" class="block text-sm/6 font-medium text-white">Edit Your Idea</label>
            <div class="mt-2">
                <textarea id="description" name="description" rows="3"
                          class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-none">{{ $idea->description }}</textarea>
            </div>
        </div>

        <div class="mt-6 flex items-center gap-x-6">
            <button type="submit" class="cursor-pointer rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-400 transition-colors">
                Update
            </button>
            <button type="submit"
                    form="delete-idea-form"
                    class="cursor-pointer rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 transition-colors">
                Delete
            </button>
        </div>
    </form>
    <form id="delete-idea-form" method="POST" action="/ideas/{{ $idea->id }}">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
