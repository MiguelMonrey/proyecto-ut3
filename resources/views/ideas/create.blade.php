<x-layout>
    <form method="POST" action="/ideas">
        @csrf
        <div class="col-span-full">
            <label for="description" class="block text-sm/6 font-medium text-white">Nueva idea</label>
            <div class="mt-2">
                <textarea id="description" name="description" rows="3"
                          class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-none"></textarea>
                <x-forms.error name="description"/>
            </div>
            <p class="mt-3 text-sm/6 text-gray-400">Alguna idea que quieras guardar para después?</p>
        </div>

        <div class="mt-6 flex items-center gap-x-6">
            <button type="submit" class="cursor-pointer rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-400 transition-colors">
                Guardar
            </button>
        </div>
    </form>
</x-layout>
