<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(ContactRequest $request)
    {
//            return "okey!";
//            dd($request);
//        $validation = $request->validate([
//           'subject'=> 'required|min:5|max:50', // Ограничения.
//            'massage'=> 'required|min:15|max:500'
//
//        ]);
    }

}
