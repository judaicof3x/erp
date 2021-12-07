<?php

namespace App\Http\Controllers\Comercial;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Models\Address;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class ClientsController extends Controller
{

    private $client;
    private $address;

    public function __construct(Client $client, Address $address)
    {
        $this->client = $client;
        $this->address = $address;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = $this->client
            ->withoutTrashed()
            ->orderBy('created_at', 'desc')->get();
        return view('pages.comercial.clientes.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.comercial.clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
        $client = $this->client;

        $client->first_name = $request->first_name;
        $client->last_name = $request->last_name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->cell = $request->cell;
        $client->cpf = $request->cpf;
        $client->rg = $request->rg;
        $client->nationality = $request->nationality;
        $client->civil_status = $request->civil_status;
        $client->occupation = $request->occupation;
        $client->segment = $request->segment;
        $client->type = $request->type;
        if ($client->type == 'Pessoa Jurídica') {
            $client->tenant_fantasy_name = $request->tenant_fantasy_name;
            $client->tenant_cnpj = $request->tenant_cnpj;
            $client->tenant_corporate_reason = $request->tenant_corporate_reason;
            $client->tenant_email = $request->tenant_email;
            $client->tenant_phone = $request->tenant_phone;
            $client->tenant_cell = $request->tenant_cell;
        }

        $client->save();

        return redirect()->route('painel.clientes.index')
            ->with('success','Cliente cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = $this->client->find($id);
        $users = User::all();
        return view('pages.comercial.clientes.show', compact('client', 'users'));
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
    public function update(ClientRequest $request, $id)
    {
        $client = $this->client->find($id);

        $client->first_name = $request->first_name;
        $client->last_name = $request->last_name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->cell = $request->cell;
        $client->cpf = $request->cpf;
        $client->rg = $request->rg;
        $client->nationality = $request->nationality;
        $client->civil_status = $request->civil_status;
        $client->occupation = $request->occupation;
        $client->segment = $request->segment;
        $client->type = $request->type;
        if ($client->type == 'Pessoa Jurídica') {
            $client->tenant_fantasy_name = $request->tenant_fantasy_name;
            $client->tenant_cnpj = $request->tenant_cnpj;
            $client->tenant_corporate_reason = $request->tenant_corporate_reason;
            $client->tenant_email = $request->tenant_email;
            $client->tenant_phone = $request->tenant_phone;
            $client->tenant_cell = $request->tenant_cell;
        }

        $client->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$client = $this->client->find($id)){
            return redirect()->back();
        }

        $client->delete();
        return redirect()->route('painel.clientes.index');
    }
}
