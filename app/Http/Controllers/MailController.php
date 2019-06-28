<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function index() {

        $order = Order::findOrFail( rand(1,50) );

        $recipient = 'dev.cerdas.skd@gmail.com.com';

        Mail::to($recipient)->send(new OrderShipped($order));

        return 'Sent order ' . $order->id;
    }
}
