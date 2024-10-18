<?php

namespace App\Http\Controllers;

use App\Http\Requests\Worker\StoreRequest;
use App\Http\Requests\Worker\UpdateRequest;
use App\Models\Worker;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class WorkerController extends Controller
{
    public function index(): View
    {
        $workers = Worker::paginate(1);
        return view('worker.index', compact('workers'));
    }

    public function show(Worker $worker): View
    {
        return view('worker.show', compact('worker'));
    }

    public function create(): View
    {
        return view('worker.create');
    }

    public function store(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $data['is_married'] = isset($data['is_married']);

        Worker::create($data);
        return redirect()->route('worker.index');
    }

    public function edit(Worker $worker): View
    {
        return view('worker.edit', compact('worker'));
    }

    public function update(UpdateRequest $request, Worker $worker): RedirectResponse
    {
        $data = $request->validated();
        $data['is_married'] = isset($data['is_married']);

        $worker->update($data);
        return redirect()->route('worker.show', $worker->id);
    }

    public function delete(Worker $worker): RedirectResponse
    {
        $worker->delete();
        return redirect()->route('worker.index');
    }
}
