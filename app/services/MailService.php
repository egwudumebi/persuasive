<?php

namespace App\Services;
// Use the mail jobs
use App\Jobs\UserWelcomeEmailJob;

class MailService
{
    public function userWelcomeMail($recipient, $data)
    {
       // Dispatch the job to send the email
       UserWelcomeEmailJob::dispatch($recipient, $data); 
    }
}
