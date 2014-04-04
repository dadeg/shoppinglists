@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Delete {{ $shoppinglist->name }} <small>Are you sure?</small></h1>
    </div>
    <form action="{{ action('ShoppinglistsController@handleDelete') }}" method="post" role="form">
        <input type="hidden" name="shoppinglist" value="{{ $shoppinglist->id }}" />
        <input type="submit" class="btn btn-danger" value="Yes" />
        <a href="{{ action('ShoppinglistsController@index') }}" class="btn btn-default">No way!</a>
    </form>
@stop
