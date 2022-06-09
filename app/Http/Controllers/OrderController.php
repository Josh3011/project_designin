<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        $DetailJasa = DB::table('detailjasa')->where('ID', $id)->get();

        return view('order', ['DetailJasa' => $DetailJasa]);
    }


    public function storeaddons(Request $request, $id) {
        // DB::table('addons')->insert([
        //     'nama_addons' => $request->addons,

        // ]);
        $addons = $request->input('nama_addons');
        $idBarang = DB::table('detailjasa')->where('id',$id)->get();
        if (is_array($addons) || is_object($addons)) {
            foreach($addons as $addon){
                $total = $addon;
                $total = $total + $addon;
               }
               DB::table('orderjasa')->insert([
                'order_pembayaran' => 'belum',
                'addons' => $total,
                'idBarang' => $idBarang[0]->ID,
                'total' => 0
            ]);
        }

        // $idOrder = DB::table('orderjasa')->where('idBarang', $idBarang)->orderBy('id', 'DESC')->first();

        // return redirect()->route('metode_pembayaran', [
        //     $id, $idOrder
        // ]);


    }


    public function metode_pembayaran($id, $idOrder) {

        $DetailOrder = DB::table('orderjasa')->where('ID', $id)->get();
        $DetailJasa = DB::table('detailjasa')->join('orderjasa', 'idBarang', '=', 'detailjasa.id')->select('orderjasa.*', 'detailjasa.*')->get();



        return view('metode_pembayaran', ['DetailJasa' => $DetailJasa, 'DetailOrder' => $DetailOrder]);

    }

    public function storeOrder(Request $request, $id, $idOrder) {
        DB::table('orderjasa')->where('id', $idOrder)->where('idBarang', $id)->update([
            'order_pembayaran' => $request->order_pembayaran,
            'total' => $request->total,
        ]);
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
    // public function store(Request $request)
    // {
    //     DB::table('orderjasa')->insert([
    //         'order_jumlah' =>
    //     ])
    // }



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
}
