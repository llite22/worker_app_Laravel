<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\WorkerResource;
use App\Models\Worker;
use Illuminate\Http\JsonResponse;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::all();

        return WorkerResource::collection($workers);
    }
}
