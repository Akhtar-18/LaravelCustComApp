<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    //protected $signature = 'command:name';
    protected $signature = 'user:create';

    /**
     * The console command description.
     *
     * @var string
     */
    //protected $description = 'Command description';
    protected $description = 'This is the command asks for user information and create into database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //return 0;
        $input['name'] = $this->ask('Enter your name:');

        $input['email'] = $this->ask('Enter your email address:');

        $input['password'] = $this->ask('Provide your secret password:');

        $input['password'] = Hash::make($input['password']);

        $input['phone'] = $this->ask('Enter your phone no:');

        User::create($input);

        $this->info("User created successfully");
    }
}
