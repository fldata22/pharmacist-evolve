<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Leaders;

class MakeMemberLeader extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'member:make-leader {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Promote a member to leader status';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $id = $this->argument('id');
        
        // Fetch the member model (assuming there's a Member model)
        $model = \App\Models\User::find($id);
        
        if (!$model) {
            $this->error("Member with ID {$id} not found.");
            return 1;
        }
        
        // Generate unique username with duplicate handling
        $baseUsername = ($model->first_name ?? 'user').'.'.($model->last_name ?? 'user');
        $username = $baseUsername;
        $counter = 1;
        
        while (Leaders::where('username', $username)->exists()) {
            $username = $baseUsername . '.' . $counter++;
        }
        
        // Create the leader record
        $leader = Leaders::create([
            'username' => $username,
            'first_name' => $model->first_name,
            'last_name' => $model->last_name,
            'email' => $model->email,
        ]);
        
        $this->info("Member {$model->first_name} {$model->last_name} promoted to leader with username: {$username}");
        
        return 0;
    }
}
