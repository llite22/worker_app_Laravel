<?php

namespace App\Console\Commands;

use App\Models\Client;
use App\Models\Department;
use App\Models\Position;
use App\Models\Profile;
use App\Models\Project;
use App\Models\ProjectWorker;
use App\Models\Review;
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
//        $this->prepareManyToMany();

        $worker = Worker::find(5);
        $client = Client::find(1);

        $worker->tags()->attach([1, 3]);
        $client->tags()->attach([1, 3]);

//        $worker = Worker::find(1);
//        $worker->reviews()->create([
//           'body' => 'body 1'
//        ]);
//        $worker->reviews()->create([
//            'body' => 'body 2'
//        ]);
//        $worker->reviews()->create([
//            'body' => 'body 3'
//        ]);
//
//        $client = Client::find(1);
//        $client->reviews()->create([
//            'body' => 'client 1'
//        ]);
//        $client->reviews()->create([
//            'body' => 'client 2'
//        ]);
//        $client->reviews()->create([
//            'body' => 'client 3'
//        ]);

//        $review = Review::find(1);
//        dd($review->reviewable->toArray());
        return 0;
    }

    private function prepareData()
    {
        Client::create([
            'name' => 'John',
        ]);

        Client::create([
            'name' => 'Wick',
        ]);
        Client::create([
            'name' => 'Баба Яга',
        ]);



        $department1 = Department::create(['title' => 'IT']);
        $department2 = Department::create(['title' => 'Analytics']);

        $position1 = Position::create(['title' => 'Developer', 'department_id' => $department1->id]);
        $position2 = Position::create(['title' => 'Manager', 'department_id' => $department1->id]);
        $position3 = Position::create(['title' => 'Designer', 'department_id' => $department1->id]);

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

        $workerData4 = [
            'name' => 'Sergey1',
            'surname' => 'Vas1',
            'position_id' => $position3->id,
            'email' => 'fefewfwfef@example.com',
            'age' => 21,
            'description' => 'cokie',
            'is_married' => false,
        ];

        $workerData5 = [
            'name' => 'Sergey2',
            'surname' => 'Vas2',
            'position_id' => $position2->id,
            'email' => 'fefewfwfef@example.com',
            'age' => 21,
            'description' => 'cokie',
            'is_married' => false,
        ];

        $workerData6 = [
            'name' => 'Sergey3',
            'surname' => 'Vas3',
            'position_id' => $position3->id,
            'email' => 'fefewfwfef@example.com',
            'age' => 21,
            'description' => 'cokie',
            'is_married' => false,
        ];

        $worker1 = Worker::create($workerData1);
        $worker2 = Worker::create($workerData2);
        $worker3 = Worker::create($workerData3);
        $worker4 = Worker::create($workerData4);
        $worker5 = Worker::create($workerData5);
        $worker6 = Worker::create($workerData6);

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
        $profileData4 = [
            'worker_id' => $worker4->id,
            'city' => 'авуацуа',
            'skill' => 'C#+',
            'experience' => 5,
            'finished_study_at' => '2013-01-01',
        ];
        $profileData5 = [
            'worker_id' => $worker5->id,
            'city' => 'ауцаука',
            'skill' => 'C#+вчаиаир',
            'experience' => 6,
            'finished_study_at' => '2023-01-01',
        ];
        $profileData6 = [
            'worker_id' => $worker6->id,
            'city' => 'всаривртп',
            'skill' => 'C#пваирвре',
            'experience' => 7,
            'finished_study_at' => '2012-01-01',
        ];

        Profile::create($profileData1);
        Profile::create($profileData2);
        Profile::create($profileData3);
        Profile::create($profileData4);
        Profile::create($profileData5);
        Profile::create($profileData6);
    }

    private function prepareManyToMany()
    {
        $workerManager = Worker::find(2);
        $workerBackend = Worker::find(1);
        $workerDesigner1 = Worker::find(5);
        $workerDesigner2 = Worker::find(6);
        $workerFrontend1 = Worker::find(4);
        $workerFrontend2 = Worker::find(3);

        $project1 = Project::create([
            'title' => 'Shop'
        ]);
        $project2 = Project::create([
            'title' => 'Blog'
        ]);

        ProjectWorker::create([
            'project_id' => $project1->id,
            'worker_id' => $workerManager->id
        ]);
        ProjectWorker::create([
            'project_id' => $project1->id,
            'worker_id' => $workerBackend->id
        ]);
        ProjectWorker::create([
            'project_id' => $project1->id,
            'worker_id' => $workerDesigner1->id
        ]);
        ProjectWorker::create([
            'project_id' => $project1->id,
            'worker_id' => $workerFrontend1->id
        ]);


        ProjectWorker::create([
            'project_id' => $project2->id,
            'worker_id' => $workerManager->id
        ]);
        ProjectWorker::create([
            'project_id' => $project2->id,
            'worker_id' => $workerBackend->id
        ]);
        ProjectWorker::create([
            'project_id' => $project2->id,
            'worker_id' => $workerDesigner2->id
        ]);
        ProjectWorker::create([
            'project_id' => $project2->id,
            'worker_id' => $workerFrontend2->id
        ]);

    }
}
