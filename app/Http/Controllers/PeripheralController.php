<?php

namespace App\Http\Controllers;

use App\Peripheral;
use Illuminate\Http\Request;

class PeripheralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function add()
    {
        $_POST = json_decode(file_get_contents("php://input"),true);
        $prp = $_POST['data'];
        $peripheral['uid'] = $prp['uid'];
        $peripheral['vendor'] = $prp['vendor'];
        $peripheral['status'] = $prp['status'];
        $peripheral['gateway_id'] = $prp['gateway_id'];
        $saved = Peripheral::create($peripheral);
        return json_encode(array('statusCode' => 200, 'item' => $saved));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peripheral  $peripheral
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peripheral  $peripheral
     * @return \Illuminate\Http\Response
     */
    public function edit(Peripheral $peripheral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peripheral  $peripheral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peripheral $peripheral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peripheral  $peripheral
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peripheral $peripheral)
    {
        //
    }
}
