<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;
use App\Mail\ContactsMessageCreated;
use Mail;
use App\Models\Messge;

class ContactsController extends Controller
{
    public function create(){

    	return view('contacts/create');
    }

    public function store(ContactsRequest $request){

    	// $this->validate($request, [
    		
    	// ]);

        $message = new Messge;
        
        $message::Create($request->only('name','email','message'));

    	Mail::to(env('ADMIN_SUPPORT_MAIL'))->send(new ContactsMessageCreated($message));

    	flashy()->success('Merci pour la requete nous allons en tenir compte');

    	return Redirect()->route('rout_path');
    }
}
