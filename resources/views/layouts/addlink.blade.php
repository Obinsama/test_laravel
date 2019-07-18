@extends('layouts.layout')
@section('addLink')
<form>
    <div class="form-group col-sm-4 " style="display:block;margin-left: 35%">
        <label for="name">Nom<input class="form-control" type="text" id="name" name='name'></label>
        <label for="link">link<input class="form-control" type="text" id="link" name='link'></label>
        <button id="btn1" class="btn btn-info form-control" type="submit" value="envoyer">Envoyer</button>
    </div>
    @csrf
</form>
@endsection
