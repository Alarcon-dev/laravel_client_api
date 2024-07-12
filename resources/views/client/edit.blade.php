<h1>EDIT CLIENT</h1>
<form action="/update/{{$data['client']['id']}}" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="" value="{{$data['client']['name']}}">

    <label for="email">Email</label>
    <input type="text" name="email" id="" value="{{$data['client']['email']}}">

    <label for="phone">Phone</label>
    <input type="text" name="phone" id="" value="{{$data['client']['phone']}}">

    <label for="addres">Address</label>
    <input type="text" name="addres" id="" value="{{$data['client']['addres']}}">

    <input type="submit" value="Update">
</form>