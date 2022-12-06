<x-layout title="Inserir">
    <form action="/crud/submit" method="post">
        @csrf
        <div class="mb-3">
            <x-input label='Nome' type=text id=name name=name value=''></x-input>
        </div>
        <div class="mb-3">
            <x-input label='Sobrenome' type=text id=lastname name=lastname value=''></x-input>
        </div>
        <div class="mb-3">
            <x-input label='E-mail' type=text id=email name=email value=''></x-input>
        </div>
        <div class="mb-3">
            <x-input label='Telefone' type=text id=phone name=phone value=''></x-input>
        </div>        
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="/crud"><button type="button" class="btn btn-primary">Retornar</button> </a>
    </form>
</x-layout>