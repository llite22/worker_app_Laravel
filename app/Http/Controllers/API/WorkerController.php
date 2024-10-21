<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Worker;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index(): JsonResponse
    {
        $workers = Worker::all();

        return response()->json([
            'data' => $workers
        ]);
    }
}
