<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class EndAuction extends Notification
{
    use Queueable;
    /**
     * @var
     */
    private $auction;

    /**
     * Create a new notification instance.
     *
     * @param $auction
     */
    public function __construct($auction)
    {
        //
        $this->auction = $auction;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        if(isset($this->auction->bidding[0])){
            return (new MailMessage)
                ->line('Your Car '.$this->auction->car->title .' Auction is end.')
                ->line('Max Bid Amount is '.$this->auction->bidding[0]->bid_amount .' by '.$this->auction->bidding[0]->user->username)
                ->action('Click to view auction', url('view-auction/'.$this->auction->id))
                ->line('Thank you for using our application!');
        }else{
            return (new MailMessage)
                ->line('Your Car '.$this->auction->car->title .' Auction is end.')
                ->line('Sorry! not bid on auction')
                ->action('Click to view auction', url('view-auction/'.$this->auction->id))
                ->line('Thank you for using our application!');
        }

    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
