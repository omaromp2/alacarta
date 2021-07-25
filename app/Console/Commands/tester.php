<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class tester extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for testing email ';

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
        echo "I shall send email!!!!! \n"; 
        \Mail::raw('Hello from QMenu', function ($message) {
            $message->from('info@qmenu.app', 'Q-Menu Info');
            $message->sender('info@qmenu.app', 'Q-Menu Info');
            $message->to('info@qmenu.app', 'Q-Menu Info');
            $message->to('emanuel969@gmail.com', 'Ema');
            $message->to('omargponce@gmail.com', 'Omar');
            $message->to('bmfdesign@hotmail.com', 'Bea');
            $message->subject('Hello from Q-Menu!!!!!');
            $message->priority(1);
        });
        return 0;
    }
}
