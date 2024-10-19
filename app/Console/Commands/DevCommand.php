<?php

namespace App\Console\Commands;

use App\Models\Position;
use App\Models\Profile;
use App\Models\Worker;
use Illuminate\Console\Command;

class DevCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'develop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Some develops';

    /**
     * Execute the console command.
     */
    public function handle()
    {
//        $this->prepareData();
        $worker = Worker::find(1);
        $position = Position::find(1);
        dd($position->workers->toArray());

        dd($worker->position->toArray());

        return 0;
    }

    public function prepareData()
    {
        $position1 = Position::create(['title' => 'Developer']);
        $position2 = Position::create(['title' => 'Manager']);

        $workerData1 = [
            'name' => 'John',
            'surname' => 'Doe',
            'email' => 'RrI1t@example.com',
            'position_id' => $position1->id,
            'age' => 30,
            'description' => 'Developer',
            'is_married' => false,
        ];

        $workerData2 = [
            'name' => 'Carl',
            'surname' => 'Smith',
            'email' => '4455de@example.com',
            'position_id' => $position2->id,
            'age' => 25,
            'description' => 'cok',
            'is_married' => true,
        ];

        $workerData3 = [
            'name' => 'Sergey',
            'surname' => 'Vas',
            'position_id' => $position1->id,
            'email' => 'fefewfwfef@example.com',
            'age' => 21,
            'description' => 'cokie',
            'is_married' => false,
        ];

        $worker1 = Worker::create($workerData1);
        $worker2 = Worker::create($workerData2);
        $worker3 = Worker::create($workerData3);

        $profileData1 = [
            'worker_id' => $worker1->id,
            'city' => 'London',
            'skill' => 'PHP',
            'experience' => 5,
            'finished_study_at' => '2020-01-01',
        ];

        $profileData2 = [
            'worker_id' => $worker2->id,
            'city' => 'Moscow',
            'skill' => 'Java',
            'experience' => 4,
            'finished_study_at' => '2022-01-01',
        ];

        $profileData3 = [
            'worker_id' => $worker3->id,
            'city' => 'Amsterdam',
            'skill' => 'C#',
            'experience' => 2,
            'finished_study_at' => '2023-01-01',
        ];

        Profile::create($profileData1);
        Profile::create($profileData2);
        Profile::create($profileData3);
    }
}
