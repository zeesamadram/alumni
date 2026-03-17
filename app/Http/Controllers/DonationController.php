<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserFeed;
use App\Models\Donation;
use Auth;

class DonationController extends Controller
{
    public function donate(Request $request){
        date_default_timezone_set("Asia/Kolkata");
        $don = Donation::create([
            'amount'=>$request->amount,
            'remark'=>$request->remark,
            'transaction_id'=>"Test",
            'payment_id'=>"Test",
            'user_level'=>"Test",
            'user_id'=>Auth::user()->id
        ]);
        $feed = UserFeed::create([
            'user_id' =>Auth::user()->id,
            'feed_category' => 'donated',
            'the_feed' => "Rs.".$request->amount." Donated!",
            'feed_id' => $don->id   
        ]);
        return back()->with('Donation Successful!');
    }
}
