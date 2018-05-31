@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md">
        @if(Auth::user()->admin == 1)
        <a href="{{ url('/categori/create') }}" class="btn btn-primary">Add New Category <i class="fa fa-plus"></i></a>
        @endif
        <h1></h1>
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Name Category</th>
              @if(Auth::user()->admin == 1)
              <th>Option</th>
              @endif
            </tr>
          </thead>
          <tbody>
            @foreach($categoris as $categori)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $categori->name_categori }}</td>
              @if(Auth::user()->admin == 1)
              <td>
                <a href="{{ route('categori.edit', $categori) }}" class="btn btn-primary btn-sm" style="float:left;">Update</a>
                <form action="{{ route('categori.destroy',$categori) }}" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger btn-sm" style="margin-left:3px;">Delete</button>
                </form>
              </td>
              @endif
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection()