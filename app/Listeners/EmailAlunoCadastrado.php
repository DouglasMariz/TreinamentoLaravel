<?php

namespace App\Listeners;

use App\Events\AlunoCadastrado;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailAlunoCadastrado
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  AlunoCadastrado  $event
     * @return void
     */
    public function handle(AlunoCadastrado $event)
    {
        //
    }
}
