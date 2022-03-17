<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Voyager API Routes
|--------------------------------------------------------------------------
|
| This file is where you may override any of the routes that are included
| with VoyagerBreadTicket.
|
*/

Route::group(['as' => 'joy-voyager-bread-ticket.'], function () {
    // event(new Routing()); @deprecated

    $namespacePrefix = '\\' . config('joy-voyager-bread-ticket.controllers.namespace') . '\\';

    // event(new RoutingAfter()); @deprecated
});
