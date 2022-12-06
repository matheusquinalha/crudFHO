<x-layout  title='Inicio'>
    <form action="/crud/submit" method="post">
        <table class='table table-bordered table-striped'>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Opções</th>
                </tr>
            </thead>
            @foreach ($clients as $clients)
            <tr>
                <th>{{$clients->id}}</th>
                <th>{{$clients->name}}</th>
                <th>{{$clients->lastname}}</th>
                <th>{{$clients->email}}</th>
                <th>{{$clients->phone}}</th>
                <th><a href="/crud/delete/{{ $clients->id }}" <button type="button" class="btn btn-danger"> Excluir </button>
                    <a href="/crud/alter/{{ $clients->id }}" type="button" class="btn btn-secondary" data-toggle='tooltip'>Alterar</a></th>
            </tr>
            @endforeach          
        </table>
    </form>
<a href="crud/create"><button type="button" class="btn btn-primary">Inserir</button></a>   

</x-layout>