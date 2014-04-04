@extends('layout')

@section('content')

<div class="page-header">
        <h1>All Shopping Lists <small>eat healthy!</small></h1>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <a href="{{ action('ShoppinglistsController@create') }}" class="btn btn-primary">Create Shopping List</a>
        </div>
    </div>

    @if ($shoppinglists->isEmpty())
        <p>There are no lists! :(</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($shoppinglists as $shoppinglist)
                <tr>
                    <td>{{ $shoppinglist->name }}</td>
                    
                    <td> 
			<a href="{{ action('ShoppinglistsController@details', $shoppinglist->id) }}" class="btn btn-default">View Details</a>
                        <a href="{{ action('ShoppinglistsController@edit', $shoppinglist->id) }}" class="btn btn-default">Edit</a>
                        <a href="{{ action('ShoppinglistsController@delete', $shoppinglist->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

@stop
