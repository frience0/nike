<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;

class VerifyEmail extends Notification implements ShouldQueue
{
    use Queueable;

    public static $createUrlCallback;
    public static $toMailCallback;

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        $verificationUrl = $this->verificationUrl($notifiable);

        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable, $verificationUrl);
        }

        return $this->buildMailMessage($verificationUrl);
    }

    protected function verificationUrl($notifiable): string
    {
        if (static::$createUrlCallback) {
            return call_user_func(static::$createUrlCallback, $notifiable);
        }

        return URL::temporarySignedRoute(
            'verification.verify',
            Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
            [
                'id' => $notifiable->getKey(),
                'hash' => sha1($notifiable->getEmailForVerification()),
            ]
        );
    }

    protected function buildMailMessage($url): MailMessage
    {
        return (new MailMessage)
            ->subject('Verify Your Nike Account')
            ->greeting('Welcome to the Nike Family!')
            ->line('You’re almost ready to experience the ultimate in athletic style. Please verify your email by clicking the button below.')
            ->action('Confirm Your Email', $url)
            ->line('This link will expire in 60 minutes. If you did not sign up, no action is needed.')
            ->salutation('Power Up,
                        The Nike Team');
    }

    public static function createUrlUsing($callback): void
    {
        static::$createUrlCallback = $callback;
    }

    public static function toMailUsing($callback): void
    {
        static::$toMailCallback = $callback;
    }
}
