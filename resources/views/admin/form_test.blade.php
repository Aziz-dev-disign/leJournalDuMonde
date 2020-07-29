<form action="{{route('test')}}" method="post">
    @csrf

    <input type="text" name="nom" id="">
<button type="submit">Enregistre</button>

</form>