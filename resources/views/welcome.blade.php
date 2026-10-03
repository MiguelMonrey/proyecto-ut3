<x-layout title="Home">
    <h1>Home</h1>
    @forelse($tasks as $task)
        <li>{{ $task }}</li>
    @empty
        <p>There are no active tasks.</p>
    @endforelse
</x-layout>
