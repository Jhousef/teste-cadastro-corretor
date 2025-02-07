<?php

namespace App\Http\Controllers;

use App\Models\Broker;
use Illuminate\Http\Request;

class BrokerController extends Controller
{

    protected $model;

    public function __construct(Broker $broker) {
        $this->model = $broker;
    }

    public function index() {
        $brokers = $this->model::all();

        $title = 'Listagem de Corretores';
        return view('brokers.index', compact('brokers'));
    }

    public function store(Request $request) {

        $this->model::create($request->all());

        return redirect()->route('brokers.index')->with('success', 'Corretor cadastrado com sucesso!');
    }

    public function update($id, Request $request) {

        $broker = $this->model::find($id);

        $broker->update($request->all());

        return redirect()->route('brokers.index')->with('success', 'Corretor atualizado com sucesso!');
    }

    public function edit() {

    }

    public function destroy() {

    }
}
