<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/sendpriorityjobs', function () {

    for ($i = 0; $i <=50; $i++) {

        $queue = 'low';
        $command = 'command_1';

        if ($i % 10 === 0) {
            $queue = 'high';
            $command = 'command_2';
        }

        Http::post('http://localhost:8000/api/priorityjobs', [
            'submitter_id'  => 1,
            'priority'      => $queue,
            'command'       => $command,
        ]);

        sleep(1);
    }

    return 'ok';
});
