<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Cnpj extends Component
{
    public $cnpj;
    public $nome;
    public $telefone;
    public $email;
    public $cep;
    public $logradouro;
    public $numero;
    public $complemento;
    public $bairro;
    public $municipio;
    public $uf;

    public function getCnpj($cnpj)
    {
        $response = Http::get('https://www.receitaws.com.br/v1/cnpj/'.$cnpj);

        $data = $response->json();

        if(!empty($data['status'] == 'ERROR')){
            session()->flash('message', 'CNPJ inválido.');
            return redirect()->route('dashboard');
        }else{
            $this->nome = $data['nome'];
            $this->telefone = $data['telefone'];
            $this->email = $data['email'];
            $this->cep = $data['cep'];
            $this->logradouro = $data['logradouro'];
            $this->numero = $data['numero'];
            $this->complemento = $data['complemento'];
            $this->bairro = $data['bairro'];
            $this->municipio = $data['municipio'];
            $this->uf = $data['uf'];

        }
    }


    public function render()
    {
        return view('livewire.cnpj');
    }
}
