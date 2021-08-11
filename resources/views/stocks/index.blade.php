@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('stock.create') }}" title="Create a product"><i class="fas fa-plus-circle"></i></a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
        @foreach ($stocks as $stock)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $stock->name }}</td>
                <td>{{ $stock->description }}</td>
                <td>{{ $stock->price }}</td>
            </tr>
        @endforeach
    </table>


@endsection
