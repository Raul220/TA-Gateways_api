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

    public function show($id){
        $gateway = Gateway::findOrFail($id);
        return json_encode(array('statusCode' => 200, 'gateway' => $gateway));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gateway  $gateway
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
        $_POST = json_decode(file_get_contents("php://input"),true);
        $prp = $_POST['id'];
        $id = (int)$prp;
        $gateway = Gateway::find($id);
        $peripherals = $gateway->peripherals;
        return json_encode(array('statusCode' => 200, 'gateway' => $gateway));
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
    public function modify()
    {
        $_POST = json_decode(file_get_contents("php://input"),true);
        $gtw = $_POST['data'];
        $id = (int)$gtw['id'];
        $new['serial'] = $gtw['serial'];
        $new['name'] = $gtw['name'];
        $new['ipv4'] = $gtw['ipv4'];
        $gateway = Gateway::findOrFail($id);
        $gateway->update($new);
        $gateway->peripherals()->delete();
        return json_encode(array('statusCode' => 200));
    }

    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gateway  $gateway
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $_POST = json_decode(file_get_contents("php://input"),true);
        $id = $_POST['id'];
        $gateway = Gateway::findOrFail($id);
        $gateway->peripherals()->delete();
        $gateway->delete();
        return json_encode(array('statusCode' => 200));
    }
}
