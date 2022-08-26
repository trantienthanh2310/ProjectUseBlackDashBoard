<?php

namespace App\Http\Controllers;

use App\Jobs\SendMail;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function sendMail()
    {
        dispatch(new SendMail)->delay(now()->addMinutes(1));
        dd('Email sent');
    }
}
