<?php

namespace App\Services\Utilities;

use Illuminate\Contracts\Mail\Mailer;	

class MailService
{
	function __construct(Mailer $mail)
	{
		$this->mail = $mail;
	}

	public function sendMail(array $data)
	{
		$this->mail->queue('emails.registrationApprovalOrDisapproval', $data, function ($m) use ($data) {
            $m->to($data['user']->email, $data['user']->name)->subject($data['mail_subject']);
        });
	}

	public function mailFromContactForm(array $data)
	{
		$this->mail->queue('emails.contact-form', $data, function ($m) use ($data) {
            $m->to($data['email'], $data['name'])->subject('Message from contact form.');
        });
	}
}