<?php

namespace App\Http\Controllers;

use App\Http\Requests\IdeaRequest;
use App\Models\Idea;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class IdeaController extends Controller
{
    public function index(): View
    {
        return view('ideas.index', [
            'ideas' => Auth::user()->ideas,
        ]);
    }

    public function create(): View
    {
        return view('ideas.create');
    }

    public function store(IdeaRequest $request): RedirectResponse
    {
        Auth::user()->ideas()->create([
            'description' => request('description'),
            'state' => 'pending',
        ]);

        return redirect('/ideas');
    }

    public function show(Idea $idea): View
    {
        Gate::authorize('update', $idea);

        return view('ideas.show', [
            'idea' => $idea,
        ]);
    }

    public function edit(Idea $idea): View
    {
        Gate::authorize('update', $idea);

        return view('ideas.edit', [
            'idea' => $idea,
        ]);
    }

    public function update(IdeaRequest $request, Idea $idea): RedirectResponse
    {
        Gate::authorize('update', $idea);
        $idea->update([
            'description' => request('description'),
        ]);

        return redirect("/ideas/{$idea->id}");
    }

    public function destroy(Idea $idea): RedirectResponse
    {
        $idea->delete();

        return redirect('/ideas');
    }
}
