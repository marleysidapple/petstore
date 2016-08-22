<?php

namespace App\Listeners;

use App\Events\UserRegistrationApprovalEvent;
use App\Services\Utilities\MailService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserRegistrationApproval
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;
    }

    /**
     * Handle the event.
     *
     * @param  UserRegistrationApprovalOrDisapprovalEvent  $event
     * @return void
     */
    public function handle(UserRegistrationApprovalEvent $event)
    {
        $data['user'] = $event->user;

        if(1 === (int)$data['user']->is_approved) {
            $data['mail_subject'] = 'Registration approved.';
        } else {
            $data['mail_subject'] = 'Registration is not approved.';
        }

        $this->mailService->sendMail($data);
    }
}
