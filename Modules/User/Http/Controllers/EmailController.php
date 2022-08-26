<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\User\Jobs\CustomerJob;

class EmailController extends Controller
{
    public function sendMail()
    {
        dispatch(new CustomerJob())->delay(now()->addMinutes(1));
        dd('Email sent');      
    }
}
