<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PriceController extends Controller
{
    public function index() {
        //$list_price = DB::select('select * from prices');
        // $price_list = $list_price[0];
        // return $price_list->service;

        //Membaca semua baris dari table doctors menggunakan query builders
        $list_price = DB::table('prices')
            ->orderBy('service')
            ->get();

        return view('page.pricelist.index', [
            'prices' => $list_price
        ]);
    }

    public function create( Request $req){
        return view('page.pricelist.create',[
            'title' => 'Create Pricelist'
        ]);
    }

    public function edit($id){
        $item = DB::table('prices')->where('id', $id)->first();

        if (!$item) {
            return "data tidak ditemukan";
        }

        return view('page.pricelist.edit', [
            'price' => $item,
            'from_action' => 'update',
        ]);
    }


    public function simpan( Request $req){
        $service = $req->input('service');
        $price = $req->input('price');

        // $sql = "insert into prices (service, price) value (?, ?)";
        // DB::insert($sql, [$service, $price]);

        //melakukan insert ke table prices menggunakan query builders
        DB::table('prices')->insert([
            'service'=> $service,
            'price'=> $price,
        ]);

        // echo 'berhasil disimpan';
        return redirect('/price')->with('success', 'Berhasil menambahkan layanan');
    }

    public function update( Request $req){
        $service = $req->input('service');
        $price = $req->input('price');
        $id = intval($req->input('id'));

        // $sql = "update doctors set service=?, price=? where id=?";
        // DB::update($sql, [$service, $price, $id]);

        //mengupdate data price berdasarkan id tertentu menggunakan query builders
        DB::table('prices')
            ->where([
                'id' => $id
            ])
            ->update([
                'service' => $service,
                'price' => $price,
            ]);

        //echo 'berhasil disimpan' ;
        return redirect('/price');
    }

    public function hapus( $id)
    {
        // DB::delete('delete from prices where id='.$id);

        //menghapus data price menggunakan query builders
        DB::table('prices')
        ->where([
            'id' => $id,
        ])
        ->delete();

        return redirect('/price')->with('success', 'Berhasil menghapus layanan!');
    }

}
