<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;

use Illuminate\Http\Request;

use App\Models\Topic;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::orderBy('name', 'asc')
            ->withCount('courses')
            ->get();

        return Inertia::render('Admin/Topic/Index', [
            'topics' => $topics
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/Topic/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'slug' => ['required', 'string', 'max:255']
        ]);

        $topic = new Topic;
        $topic->name = $request->name;
        $topic->description = $request->description;
        $topic->slug = $request->slug;
        $topic->save();

        session()->flash('flash.banner', 'Topic added successful.');
        session()->flash('flash.bannerStyle', 'success');

        return redirect(route('admin.topics.index'));
    }

    public function edit($id)
    {
        $topic = Topic::where('id', $id)->first();
        if (!$topic) {
            abort(404);
        }

        return Inertia::render('Admin/Topic/Edit', [
            'topic' => $topic
        ]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'slug' => ['required', 'string', 'max:255']
        ]);

        $topic = Topic::where('id', $id)->first();
        if (!$topic) {
            abort(404);
        }

        $topic->name = $request->name;
        $topic->description = $request->description;
        $topic->slug = $request->slug;
        $topic->save();

        session()->flash('flash.banner', 'Topic updated successful.');
        session()->flash('flash.bannerStyle', 'success');

        return redirect(route('admin.topics.index'));
    }

    public function destroy($id)
    {
        $topic = Topic::where('id', $id)->first();
        if (!$topic) {
            abort(404);
        }

        $topic->delete();

        session()->flash('flash.banner', 'Topic deleted successful.');
        session()->flash('flash.bannerStyle', 'success');

        return redirect(route('admin.topics.index'));
    }
}
