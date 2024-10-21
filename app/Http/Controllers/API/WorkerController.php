<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Worker\StoreRequest;
use App\Http\Requests\Worker\UpdateRequest;
use App\Http\Resources\WorkerResource;
use App\Models\Worker;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class WorkerController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $workers = Worker::all();

        return WorkerResource::collection($workers);
    }

    public function show(Worker $worker): WorkerResource
    {
        return WorkerResource::make($worker);
    }

    public function store(StoreRequest $request): WorkerResource
    {
        $data = $request->validated();
        $worker = Worker::create($data);
        return WorkerResource::make($worker);
    }

    public function update(UpdateRequest $request, Worker $worker): WorkerResource
    {
        $data = $request->validated();
        $worker->update($data);
        $worker->fresh(); // Чтобы 100% получилось обновить
        return WorkerResource::make($worker);
    }

    public function destroy(Worker $worker): JsonResponse
    {
        $worker->delete();
        return response()->json([
            'message' => 'Worker deleted successfully',
        ]);
    }
}
