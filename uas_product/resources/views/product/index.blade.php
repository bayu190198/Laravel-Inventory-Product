@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md">
      <a href="{{ url('/product/create') }}" class="btn btn-primary">Add New Product <i class="fa fa-plus"></i></a>
      <h1></h1>
      <table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Name Product</th>
            <th>Price</th>
            <th>Category</th>
            <th>Depositors</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $product->title }}</td>
            <td>Rp {{ $product->price }}</td>
            <td>{{ $product->name_categori }}</td>
            <td>{{ $product->name_creator }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection()