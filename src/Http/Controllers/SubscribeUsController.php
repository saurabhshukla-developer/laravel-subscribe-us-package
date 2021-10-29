<?php

namespace SaurabhshuklaDeveloper\LaravelSubscribeUs\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SaurabhshuklaDeveloper\LaravelSubscribeUs\Models\SubscriptionUserList;

class SubscribeUsController extends Controller
{
    public function index()
    {
        return view('laravel-subscribe-us::subscribe-us');
    }

    public function submitSubscriptionForm(Request $request)
    {
        $result = SubscriptionUserList::create($request->all());
        if($result) {
            return response()->json(['status' => 'success', 'message'=>'Subscription Done']);
        }
    }
}
