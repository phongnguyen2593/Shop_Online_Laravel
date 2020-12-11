<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
        ->rawColumns(['status'])
        ->make(true);

    }
}
