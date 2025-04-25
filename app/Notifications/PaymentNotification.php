<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PaymentNotification extends Notification
{
    use Queueable;

    private string $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function via(object $notifiable): array{
        return ['database'];
    }

    public function toMail(object $notifiable): MailMessage{
        return (new MailMessage)->line('The introduction to the notification.')
        ->action('Notification Action', url('/'))
        ->line('Thank you for using our application!');}

        public function toArray(object $notifiable): array{
            return ["message" => "New Payment", ];}

}
