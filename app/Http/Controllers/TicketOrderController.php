<?php

namespace App\Http\Controllers;
use App\Models\TicketOrder;
use App\Models\User;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TicketOrderController extends Controller
{
    public function addCart (Request $request) {
        $user = Auth()->User();
        //tim data da co chua, neu co cộng lên 1, nếu chưa thì tạo mới.
        $orderItem = TicketOrder::where('suatchieu_id', $request->suatchieu_id)->where('user_id', 1)->first();
        // dd($orderItem);
        if ($orderItem == null ) {
            $order = new TicketOrder();
            $order->user_id = 1;
            $order->suatchieu_id = $request->suatchieu_id;
            $order->save();
            $orderDetail = new Ticket();
            $orderDetail->id_dondatve = $order->id;
            $orderDetail->quantity = $request->quantity;
            $orderDetail->save();
            
        }
        else {
            $orderDetailItem = Ticket::where('id_dondatve', $orderItem->id)->first();
          
            if ($orderDetailItem->quantity + $request->quantity == 0) {
                $orderItem->delete();
                $orderDetailItem->delete();
            }
            else {
                $orderDetailItem->quantity += $request->quantity;
                $orderDetailItem->save();
            }
           
        }
    }
    public function getAllOrder () {
       return TicketOrder::with(["orderDetails", "suatChieu"])->get(); 
    }
    public function deleteProduct (Request $request) {
        $order_id = $request->order_id;
        TicketOrder::where('id', $order_id)->delete();
        Ticket::where('id_order', $order_id)->delete();
        $msg="Xoa thanh cong";
        return json_encode($msg);
    }
}
