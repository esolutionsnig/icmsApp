<?php

namespace App\Http\Resources\Notification;

use Illuminate\Http\Resources\Json\Resource;

class NotificationCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'userId' => $this->username,
            'subject' => $this->subject,
            'message' => $this->message,
            'href' => [
                'link' => route('notifications.show',$this->id)
            ]
        ];
    }
}
