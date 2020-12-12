<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;

use App\Models\Order;
use App\Models\Customer;
use Carbon\Carbon;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.orders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        $total = 0;
        foreach ($order->products as $product) {
            $total += $product->pivot->quantity * $product->pivot->sale_price;
        }
        return view('backend.orders.show', [
            'order' => $order,
            'total' => $total,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->status = $request->status;
        $order->approver_id = Auth::user()->id;
        $order->save();

        return \redirect(route('backend.order.show', $order->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getData()
    {
        $orders = Order::all();

        return DataTables::of($orders)
        ->editColumn('status', function($order){
            if ($order->status==1) {
                return '<p class="text-warning">Chờ xác nhận</p>';
            } elseif($order->status==2) {
                return '<p class="text-primary">Đã xác nhận</p>';
            }elseif($order->status==3){
                return '<p class="text-success">Đã xác nhận</p>';
            }elseif($order->status==0){
                return '<p class="text-danger">Đã hủy</p>';
            }
        })
        ->editColumn('updated_at', function($order){
            return Carbon::parse($order->updated_at)->isoFormat('lll');
        })
        ->addColumn('action', function($order){
            $actionBtn = '<a href="' . route('backend.order.show', $order->id) .'"><button title="Chi tiết" class="btn btn-light waves-effect waves-light m-1"> <i class="fa fa-info-circle"></i> ';
                return $actionBtn;
        })
        ->addColumn('approver', function($order){
            if ($order->approver_id == 0) {
                return '-';
            } else {
                return $order->approver->info->name;
            }
            
        })
        ->rawColumns(['status', 'action', 'approver'])
        ->make(true);

    }
}
