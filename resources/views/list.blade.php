<h1>Members List</h1>

<table border="1">
 <tr>
    <td>Id</td>
    <td>Name</td>
    <td>Email</td>
    <td>address</td>
</tr>
@foreach ($key as $k)
<tr>
    <td>{{$k->id}}</td>
    <td>{{$k->name}}</td>
    <td>{{$k->email}}</td>
    <td>{{$k->address}}</td>
</tr>

@endforeach
</table>
