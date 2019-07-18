<?php

namespace App\Notifications\Backend;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Mail;

class AdminResetPasswordNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $token;
    protected $email;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token, $email)
    {
        $this->token = $token;
        $this->email = $email;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {

        $link = env('APP_URL').'/back-end/password/reset/'.$this->token.'?email='.$this->email;

        return (new MailMessage)->subject('Reset Password')
        ->view('backend.mail.password_reset_link',[
            'link' => $link,
            'title' => 'Reset Password'
        ]);

        /*
        More Options on
        vendor/laravel/framework/src/Illuminate/Notifications/Messages/MailMessage.php
        */ 

        

        // return (new MailMessage)
        //             ->line('The introduction to the notification.')
        //             ->line($this->token)
        //             ->action('Notification Action', url('/'))
        //             ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        $link = env('APP_URL').'/password/reset/'.$this->token.'?email='.$this->email;
        return [
            'token' => $this->token,
            'link' => $link,
            'subject' => 'Reset Password'
        ];
    }

    
}
