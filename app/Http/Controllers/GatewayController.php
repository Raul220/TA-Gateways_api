<?php

namespace App\Http\Controllers;

use App\Gateway;
use Illuminate\Http\Request;

class GatewayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items= Gateway::with('peripherals')->get();
        return json_encode(array('gateways' => $items));
    }
    public function add()
    {
        $_POST = json_decode(file_get_contents("php://input"),true);
        $gtw = $_POST['data'];
        $gateway['serial'] = $gtw['serial'];
        $gateway['name'] = $gtw['name'];
        $gateway['ipv4'] = $gtw['ipv4'];
        $saved = Gateway::create($gateway);
        return json_encode(array('statusCode' => 200, 'id' => $saved->id));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gateway  $gateway
     * @return \Illuminate\Http\Response
     */
    public function show(Gateway $gateway)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gateway  $gateway
     * @return \Illuminate\Http\Response
     */
    public function edit(Gateway $gateway)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gateway  $gateway
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gateway $gateway)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gateway  $gateway
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gateway $gateway)
    {
        //
    }
}
