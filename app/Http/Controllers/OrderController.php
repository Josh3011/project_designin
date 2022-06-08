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


    public function detail($idBarang, $idOrder) {

        $DetailJasa = DB::table('detailjasa')->where('ID', $idBarang)->get();
        $DetailOrder = DB::table('orderjasa')->join('detailjasa', 'idBarang', '=', 'detailjasa.id')->where('ID', $idOrder)->select('orderjasa.*', 'detailjasa.*');

        return view('detailOrder', ['DetailJasa' => $DetailJasa, 'DetailOrder' => $DetailOrder]);

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
                'addons' => $total,
                'idBarang' => $idBarang[0]->ID,

            ]);
        }




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
}
