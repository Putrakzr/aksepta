<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PromoteAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:promote-admin {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Promote a user to SuperAdmin role';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $email = $this->argument('email');
        $user = \App\Models\User::where('email', $email)->first();

        if (!$user) {
            $this->error("User with email {$email} not found.");
            return 1;
        }

        $user->update(['role' => 'superadmin']);

        $this->info("User {$user->name} has been promoted to SuperAdmin.");
        return 0;
    }
}
