<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Cnpj extends Component
{
    public $cnpj;
    public $name;
    public $phone;
    public $email;
    public $zipcode;
    public $street;
    public $number;
    public $complement;
    public $neighborhood;
    public $city;
    public $state;

    public function getCnpj($cnpj)
    {
        $response = Http::get('https://www.receitaws.com.br/v1/cnpj/'.$cnpj);

        $data = $response->json();

        if(!empty($data['status'] == 'ERROR')){
            session()->flash('message', 'CNPJ inválido.');
            return redirect()->route('dashboard');
        }else{
            $this->name = $data['nome'];
            $this->phone = $data['telefone'];
            $this->email = $data['email'];
            $this->zipcode = $data['cep'];
            $this->street = $data['logradouro'];
            $this->number = $data['numero'];
            $this->complement = $data['complemento'];
            $this->neighborhood = $data['bairro'];
            $this->city = $data['municipio'];
            $this->state = $data['uf'];

        }
    }


    public function render()
    {
        return view('livewire.cnpj');
    }
}
