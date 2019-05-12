<?php

namespace App\Http\Controllers;

use App\Events\UserActivationEmail;
use App\Paket;
use App\PaketApp;
use App\PaketWeb;
use App\Pesanan;
use App\ProyekApp;
use App\ProyekWeb;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('checkout');
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
        $input = $request->all();
        if (Auth::user()){
            $input['user_id'] = Auth::id();
        }else{
            $this->validator($request->all())->validate();
            $user = $this->new($request->all());
            event(new Registered($user));
            event(new UserActivationEmail($user));
            $input['user_id'] = $user->id;
        }
        $app = PaketApp::where('nama', $request->package)->first();
        if ($app){
            $paket = Paket::where('kodePaket_id', $app->id)->first();
            $input['paket_id'] = $paket->id;
            $pesanan = Pesanan::create([
                'user_id' => $input['user_id'],
                'paket_id' => $input['paket_id'],
                'buktiTranfer' => '-',
                'statusBayar' => '0',
                'statusTerima' => '0',
            ]);
            ProyekApp::create([
                'pesanan_id' => $pesanan->id,
                'nama' => '-',
                'theme_Ref' => '-',
                'color_id' => 0,
                'penjelasan' => '-',
                'status' => '0'
            ]);
        }else{
            $web = PaketWeb::where('nama', $request->package)->first();
            $paket = Paket::where('kodePaket_id', $web->id)->first();
            $input['paket_id'] = $paket->id;
            $pesanan = Pesanan::create([
                'user_id' => $input['user_id'],
                'paket_id' => $input['paket_id'],
                'buktiTranfer' => '-',
                'statusBayar' => '0',
                'statusTerima' => '0',
            ]);
            ProyekWeb::create([
                'pesanan_id' => $pesanan->id,
                'theme_Ref' => '-',
                'color_id' => 0,
                'penjelasan' => '-',
                'status' => '0'
            ]);
        }
    }

    private function createPesanan(){

    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function new(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => 2,
            'active' => false,
            'activation_token' => str_random(20)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    public function web(Request $request)
    {
        $web = PaketWeb::where('id', $request->id)->first();
        return view('/checkout', compact('web'));
    }

    public function app(Request $request)
    {
        $app = PaketApp::where('id', $request->id)->first();
        return view('/checkout', compact('app'));
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
