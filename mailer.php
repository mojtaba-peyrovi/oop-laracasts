<?php
abstract class Mailer {
    public function send($to, $from, $body)
    {

    }
}

class UserMailer extends UserMailer {

    public function sendWelcomeEmail(User $user)
    {
        return $this->send($user->email);
    }

}

class adminMailer extends Mailer {

}
