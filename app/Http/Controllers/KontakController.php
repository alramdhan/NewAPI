<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kontak::all();
        
        if(count($data) > 0) {
            $res['message'] = "success";
            $res['values'] = $data;

            return response($res);
        } else {
            $res['message'] = "empty";

            return response($res);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama = $request->input('nama');
        $email = $request->input('email');
        $alamat = $request->input('alamat');
        $nohp = $request->input('nohp');

        $data = new Kontak();

        $data->nama = $nama;
        $data->email = $email;
        $data->alamat = $alamat;
        $data->nohp = $nohp;

        if($data->save()) {
            $res['message'] = "success";
            $res['values'] = "$data";

            return response($res);
        } else {
            $res['message'] = "error";

            return response($res);
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
        $data = Kontak::where('id', $id)->get();

        if(count($data) > 0) {
            $res['message'] = "success";
            $res['values'] = $data;

            return response($res);
        } else {
            $res['message'] = "empty";

            return response($res);
        }
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
        $nama = $request->input('nama');
        $email = $request->input('email');
        $alamat = $request->input('alamat');
        $nohp = $request->input('nohp');

        $data = Kontak::where('id', $id)->first();

        $data->nama = $nama;
        $data->email = $email;
        $data->alamat = $alamat;
        $data->nohp = $nohp;

        if($data->save()) {
            $res['message'] = "success";
            $res['values'] = "$data";

            return response($res);
        } else {
            $res['message'] = "error";

            return response($res);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kontak::where('id', $id)->first();

        if($data->delete()) {
            $res['message'] = "success";
            $res['values'] = "$data";

            return response($res);
        } else {
            $res['message'] = "error";

            return response($res);
        }
    }
}
