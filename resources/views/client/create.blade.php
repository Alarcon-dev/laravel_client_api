<h1>Create Client</h1>
<form action="/store/{{$data['client']['id']}}" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="">

    <label for="email">Email</label>
    <input type="text" name="email" id="">

    <label for="phone">Phone</label>
    <input type="text" name="phone" id="">

    <label for="addres">Address</label>
    <input type="text" name="addres" id="">

    <input type="submit" value="Crear">
</form>