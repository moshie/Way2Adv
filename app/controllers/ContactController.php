<?php

	class ContactController extends BaseController {

		public function getContactUsForm(){

			$data = Input::all();

			$rules = array (
				'name' => 'required|alpha',
				'email' => 'required|email',
				'subject' => 'required|alpha',
				'message' => 'required|min:25'
			);

			$validator  = Validator::make ($data, $rules);

			if ($validator -> passes()){

				//Send email using Laravel send function
				Mail::queue('layouts.emails.contact', $data, function($message) use ($data)
					{

						$message->from($data['email'] , $data['name']);

						$message->to('hewitt.20@gmail.com', 'David Hewitt')->subject($data['subject']);

					}
				);

				Session::flash('success_message', 'Thanks, I have received your message. I will respond soon!');

				return Redirect::to('/#contact');

			} else {

				//return contact form with errors
				return Redirect::to('/#contact')->withErrors($validator);
			}
		}
	}

?>