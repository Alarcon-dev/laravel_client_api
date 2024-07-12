<h1>Clients list</h1>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $client)
            <tr>
                <td>{{$client['name']}}</td>
                <td>{{$client['email']}}</td>
                <td>{{$client['phone']}}</td>
                <td>{{$client['addres']}}</td>
                <td>
                    <a href="/show/{{$client['id']}}">Ver</a>
                    <a href="/edit/{{$client['id']}}">Editar</a>
                    <a href="">Eliminar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
   
    
</table>