<x-layout title="Alterar">
    <form action="/crud/update/{{$client_change->id}}" method="get">    
        @csrf
        <div class="mb-3">
            <x-input label='Nome' type=text id=name_alter name=name_alter value="{{$client_change->name}}"></x-input>
        </div>
        <div class="mb-3">
            <x-input label='Sobrenome' type=text id=lastname_alter name=lastname_alter value="{{$client_change->lastname}}"></x-input>
        </div>
        <div class="mb-3">
            <x-input label='E-mail' type=text id=email_alter name=email_alter value="{{$client_change->email}}"></x-input>
        </div>
        <div class="mb-3">
            <x-input label='Telefone' type=text id=phone_alter name=phone_alter value="{{$client_change->phone}}"></x-input>
        </div>        
        <a href="/crud/update/{{$client_change->id}}"><button type="submit" class="btn btn-primary">Salvar</button></a>
        <a href="/crud"><button type="button" class="btn btn-primary">Retornar</button> </a>
    </form>
</x-layout>