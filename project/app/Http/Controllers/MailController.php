<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;

class MailController extends Controller
{
    /**
     * Store a new podcast.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Create podcast...

        $mail = new Test();
        $mail->title = 'Robbert said hello!';
        $mail->save();
    }

}
