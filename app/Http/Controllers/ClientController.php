<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $url = env("URL_SERVER_API"); 
        $response = Http::get($url."clients"); 
        $data = $response->json(); 

        if($data){
            return view('/client.client', compact('data')); 
        }else{
            echo 'no hay datos';
        }
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $url = env('URL_SERVER_API'); 
        $response = Http::post($url.'clients', [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'addres' => $request->address,
        ]);

    

        if($response !== null){
            return redirect('/index')->with('success', 'client saved');
        }else{
            echo "Error, client didn't saved";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
   
        $url = env('URL_SERVER_API');  
        $response = Http::get($url.'clients/'.$id); 
        $data = $response->json();

    

        if($data != null){
            return view('client.getClient', compact('data'));
        }

        echo 'to tray get cleint error';

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $url = env('URL_SERVER_API'); 
        $response = Http::get($url.'clients/'.$id);

        $data = $response->json();

        if($data){
            return view('client.edit', compact('data'));
        }

        echo 'Error to edit client';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $url = env('URL_SERVER_API');
        
        $response = Http::put($url.'clients/'.$id, [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'addres' => $request->addres,
        ]);

        if($response){
            return redirect('/index');
        }

        echo 'Error to try client';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $url = env('URL_SERVER_API');
        $response = Http::delete($url.'clients/'.$id);

        $client = $response->json();


        if($client){
            return redirect('/index');
        }

        echo "error to attemp delete client";
        

    }
}
