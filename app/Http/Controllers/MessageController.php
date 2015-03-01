<?php namespace App\Http\Controllers;

use Input;
use Response;
use Request;
use App\Message;
use View;

class MessageController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Cfair Controller
	|--------------------------------------------------------------------------
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Endpoint which can consume trade messages in JSON format
	 *
	 * @return Response
	 */
	public function index()
	{

		if(Request::isJson())
		{

			$message_array = Input::json()->all();
			$message_array['timePlaced']=date('Y-m-d H:i:s', strtotime($message_array['timePlaced']));
			$message = Message::create($message_array);

			return Response::make('Message saved!', 201);

		}else
		{

			return Response::make('JSON expected!', 400);	

		}


	}

        public function mlist()
        {

		$allMessages = Message::all();
		return View::make('messages.list')->with('allMessages', $allMessages);

        }


}
