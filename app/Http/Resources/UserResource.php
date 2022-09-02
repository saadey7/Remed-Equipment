<?php

namespace App\Http\Resources;
use App\Models\Connections;
use App\Models\User;
use App\Models\Experience;
use App\Models\ExperienceBookMark;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {  

        $id_list1 = Connections::where('sender_id',$this->id)->pluck('receiver_id');
        $id_list2 = Connections::where('receiver_id',$this->id)->pluck('sender_id');
        $array = collect([$id_list1,$id_list2]);
        $result = $array->flatten()->unique();
        $all_friends  =  User::whereIn('id',$result)->get();
        //Data Count
        $totalexperience = Experience::where('user_id', $this->id)->count();
        $totalconnections = Connections::where([['receiver_id', $this->id], ['connection', 'true']])->orWhere([['sender_id', $this->id], ['connection', 'true']])->count();
        $totalbookmarked = ExperienceBookMark::where('user_id', $this->id)->count();
        return[
            'totalexperience' => $totalexperience,
            'totalconnections' => $totalconnections,
            'totalbookmarked' => $totalbookmarked,
            'id'=>$this->id,
            'username'=>$this->username,
            'fcm_token'=>$this->fcm_token,
            'email'=>$this->email,
            'zip_code'=>$this->zip_code,
            'image'=>$this->image,
            'experience'=>$this->experience,
            'connections'=>$all_friends,
   
           ];
   
    }
}
