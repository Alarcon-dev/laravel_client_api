<h1>Clients list</h1>
<ul>
    @foreach ($data as $clients)
        <li>{{$clients['name']}}</li>
        <li>{{$clients['email']}}</li>
    @endforeach
</ul>