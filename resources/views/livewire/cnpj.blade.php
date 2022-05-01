<div class="p-4">

    <div>
        <x-jet-label for="cnpj" value="{{ __('CNPJ') }}" />
        <x-jet-input wire:change='getCnpj($event.target.value)' id="cnpj" class="block mt-1 w-full" type="text" name="cnpj" :value="old('cnpj')" required autofocus autocomplete="cnpj" />
    </div>

    <div>
        <x-jet-label for="name" value="{{ __('Nome') }}" />
        <x-jet-input wire:model='name' id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
    </div>

    <div>
        <x-jet-label for="telefone" value="{{ __('Telefone') }}" />
        <x-jet-input wire:model='phone' id="telefone" class="block mt-1 w-full" type="text" name="telefone" :value="old('telefone')" required autofocus autocomplete="telefone" />
    </div>

    <div>
        <x-jet-label for="contact" value="{{ __('Contato') }}" />
        <x-jet-input wire:model='contact' id="contact" class="block mt-1 w-full" type="text" name="contact" :value="old('contact')" required autofocus autocomplete="contact" />
    </div>

    <div>
        <x-jet-label for="email" value="{{ __('E-Mail') }}" />
        <x-jet-input wire:model='email' id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus autocomplete="email" />
    </div>

    <div>
        <x-jet-label for="cep" value="{{ __('CEP') }}" />
        <x-jet-input wire:model='zipcode' id="cep" class="block mt-1 w-full" type="text" name="cep" :value="old('cep')" required autofocus autocomplete="cep" />
    </div>

    <div>
        <x-jet-label for="logradouro" value="{{ __('Rua') }}" />
        <x-jet-input wire:model='street' id="logradouro" class="block mt-1 w-full" type="text" name="logradouro" :value="old('logradouro')" required autofocus autocomplete="logradouro" />
    </div>

    <div>
        <x-jet-label for="numero" value="{{ __('Número') }}" />
        <x-jet-input wire:model='number' id="numero" class="block mt-1 w-full" type="text" name="numero" :value="old('numero')" required autofocus autocomplete="numero" />
    </div>

    <div>
        <x-jet-label for="complemento" value="{{ __('Complemento') }}" />
        <x-jet-input wire:model='complement' id="complemento" class="block mt-1 w-full" type="text" name="complemento" :value="old('complemento')" required autofocus autocomplete="complemento" />
    </div>

    <div>
        <x-jet-label for="bairro" value="{{ __('Bairro') }}" />
        <x-jet-input wire:model='neighborhood' id="bairro" class="block mt-1 w-full" type="text" name="bairro" :value="old('bairro')" required autofocus autocomplete="bairro" />
    </div>

    <div>
        <x-jet-label for="municipio" value="{{ __('Municipio') }}" />
        <x-jet-input wire:model='city' id="municipio" class="block mt-1 w-full" type="text" name="municipio" :value="old('municipio')" required autofocus autocomplete="municipio" />
    </div>

    <div>
        <x-jet-label for="uf" value="{{ __('Estado') }}" />
        <x-jet-input wire:model='state' id="uf" class="block mt-1 w-full" type="text" name="uf" :value="old('uf')" required autofocus autocomplete="uf" />
    </div>

</div>
