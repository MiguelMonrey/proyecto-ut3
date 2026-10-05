<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IdeaController extends Controller
{
    public function index(): View
    {
        $ideas = Idea::all();

        return view('ideas.index', [
            'ideas' => $ideas,
        ]);
    }

    public function create(): View
    {
        return view('ideas.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'description' => ['required', 'min:10'],
        ]);
        Idea::create([
            'description' => request('description'),
            'state' => 'pending',
        ]);

        return redirect('/ideas');
    }

    public function show(Idea $idea): View
    {
        return view('ideas.show', [
            'idea' => $idea,
        ]);
    }

    public function edit(Idea $idea): View
    {
        return view('ideas.edit', [
            'idea' => $idea,
        ]);
    }

    public function update(Request $request, Idea $idea): RedirectResponse
    {
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
