<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewFriendRequests extends Model
{
    use HasFactory;

    protected $table = 'view_friend_requests';

    public function index(){
        $friendRequests = ViewFriendRequests::select('*')->get()->toArray();
        dd($friendRequests);
    }
}
