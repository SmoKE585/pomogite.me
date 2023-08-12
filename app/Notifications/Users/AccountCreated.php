<?php

namespace App\Notifications\Users;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AccountCreated extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct()
    {
        //
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->greeting('Добро пожаловать!')
            ->subject('🥳 Аккаунт создан!')
            ->line('Ваш аккаунт в системе создан и готов к работе!')
            ->line('В качестве логина используйте <b>ваш e-mail</b>: '.$notifiable->email)
            ->action('Войти в систему', url('/'))
            ->line('Спасибо, что вы с нами 💪');
    }

    public function toArray(object $notifiable): array
    {
        return [//
        ];
    }
}
