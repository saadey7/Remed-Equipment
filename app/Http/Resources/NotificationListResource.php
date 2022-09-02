<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Setting;
use App\Models\Connections;
class NotificationListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $connections = Connections::where('receiver_id', $this->user->id)->orWhere('sender_id', $this->user->id)->get();
        foreach($connections as $connect){
            $check = $connect->connection;
        } 
        
        return[
         'connection'=>$check,
         'id'=>$this->id,
         'title'=>$this->title,
         'order_uuid'=>$this->order_uuid,
         'user_id'=>$this->user->id, 
         'email'=>$this->user->email, 
         'name'=>$this->user->name,
         'image'=>$this->user->image,  
         'message'=>$this->message,
         'type'=>$this->type,
         'status'=>$this->status,
         'time'=>$this->created_at->format('H:i')

        ];

    }
}
