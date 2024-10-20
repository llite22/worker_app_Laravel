<?php

namespace App\Http\Controllers;

use App\Http\Requests\Worker\IndexRequest;
use App\Http\Requests\Worker\StoreRequest;
use App\Http\Requests\Worker\UpdateRequest;
use App\Models\Worker;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class WorkerController extends Controller
{
    use AuthorizesRequests;

    public function index(IndexRequest $request): View
    {
        $data = $request->validated();

        $workerQuery = Worker::query();

        if (isset($data['name'])) {
            $workerQuery->where('name', 'like', "%{$data['name']}%");
        }

        if (isset($data['surname'])) {
            $workerQuery->where('surname', 'like', "%{$data['name']}%");
        }

        if (isset($data['email'])) {
            $workerQuery->where('email', 'like', "%{$data['email']}%");
        }

        if (isset($data['from'])) {
            $workerQuery->where('age', '>', $data['from']);
        }

        if (isset($data['to'])) {
            $workerQuery->where('age', '<', $data['to']);
        }

        if (isset($data['description'])) {
            $workerQuery->where('description', 'like', "%{$data['description']}%");
        }

        if (isset($data['is_married'])) {
            $workerQuery->where('is_married', true);
        }

        $workers = $workerQuery->paginate(5);
        return view('worker.index', compact('workers'));
    }

    public function show(Worker $worker): View
    {
        return view('worker.show', compact('worker'));
    }

    public function create(): View
    {
        $this->authorize('create', Worker::class);

        return view('worker.create');
    }

    public function store(StoreRequest $request): RedirectResponse
    {
        $this->authorize('create', Worker::class);

        $data = $request->validated();

        $data['is_married'] = isset($data['is_married']);

        Worker::create($data);
        return redirect()->route('workers.index');
    }

    public function edit(Worker $worker): View
    {
        $this->authorize('update', Worker::class);

        return view('worker.edit', compact('worker'));
    }

    public function update(UpdateRequest $request, Worker $worker): RedirectResponse
    {
        $this->authorize('update', Worker::class);

        $data = $request->validated();
        $data['is_married'] = isset($data['is_married']);

        $worker->update($data);
        return redirect()->route('workers.show', $worker->id);
    }

    public function destroy(Worker $worker): RedirectResponse
    {
        $this->authorize('delete', Worker::class);
        $worker->delete();
        return redirect()->route('workers.index');
    }
}
