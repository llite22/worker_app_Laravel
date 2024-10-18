<?php

namespace App\Console\Commands;

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
        // $this->prepareData();

        $worker = Worker::find(1);
        $profile = Profile::find(1);

        dd($worker->profile->toArray());
    }

    public function prepareData()
    {
        $workerData = [
            'name' => 'John',
            'surname' => 'Doe',
            'email' => 'RrI1t@example.com',
            'age' => 30,
            'description' => 'Developer',
            'is_married' => false,
        ];

        $worker = Worker::create($workerData);

        $profileData = [
            'worker_id' => $worker->id,
            'city' => 'London',
            'skill' => 'PHP',
            'experience' => 5,
            'finished_study_at' => '2020-01-01',
        ];

        $profile = Profile::create($profileData);
    }
}
