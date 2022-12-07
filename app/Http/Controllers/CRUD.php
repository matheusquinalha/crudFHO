<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;
use DB;

class CRUD extends Controller
{
    public function index(){

        $clients = Client::all();
        #dd($clients);

        return view('crud.index')->with('clients',$clients);
        #return view('../../../front-end/src/App.vue')->with('clients',$clients);
    }

    public function create(){
        return view('crud.create');
    }

    public function store(Request $request){ 

        $client = new Client();
        $name = $request->input('name');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $phone = $request->input('phone');

        $client->name = $name;
        $client->lastname = $lastname;
        $client->email = $email;
        $client->phone = $phone;
        $client->save();

        return redirect('/crud');
    }

    public function delete($id){

        DB::delete('DELETE FROM client WHERE id = (?)',[$id]);

        return redirect('/crud');
    }

    public function alter($id){

        $client_change = Client::find($id);

        return view('crud.alter')->with('client_change',$client_change);
    }

    public function update($id,Request $request){

        $client_change = Client::find($id);
        $name = $request->input('name_alter');
        $lastname = $request->input('lastname_alter');
        $email = $request->input('email_alter');
        $phone = $request->input('phone_alter');
        
        #$client->name = $name;  
        #$client->lastname = $lastname;
        #$client->email = $email;
        #$client->phone = $phone;

        DB::update('UPDATE client SET name = ?, lastname = ?, email = ?, phone = ? WHERE id = (?)',[$name,$lastname,$email,$phone,$id]);

        return redirect('/crud');
    }
}