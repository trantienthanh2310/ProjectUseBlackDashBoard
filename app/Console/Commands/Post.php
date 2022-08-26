<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post as PostModel;

class Post extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        PostModel::create([
            'title' => 'cron is comming' . time(),
            'description' => 'test' . time(),
            'status' => 'avaiable' . time(),
        ]);
    }
}
