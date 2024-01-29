<h1>My folder and My page</h1>
<h1>
    {{$val_a . ' ' . $val_b}}
</h1>
<form method="post" action="/my-route">
    @csrf
    <input type="text" name = "myinput">
    <button type = "summit" >Summit </button>
</form>
