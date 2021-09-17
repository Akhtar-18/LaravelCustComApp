<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UserInfo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    //protected $signature = 'command:name';
    protected $signature = 'user:info';
    /**
     * The console command description.
     *
     * @var string
     */
    //protected $description = 'Command description';
    protected $description = 'This is the command asks for user information and display';

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
        $name = $this->ask('What is your name?');

        $email = $this->ask('What is your email address?');

        $phone = $this->ask('What is your phone no?');

        $this->info("User Information: Name - ". $name . " , Email - " . $email . " and Phone - " . $phone);
    }
}
