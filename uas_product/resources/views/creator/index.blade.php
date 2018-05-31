@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md">
        @if(Auth::user()->admin == 1)
        <a href="{{ url('/creator/create') }}" class="btn btn-primary">Add New Depositors <i class="fa fa-plus"></i></a>
        @endif
        <h1></h1>
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Name Depositors</th>
              <th>E-Mail Depositors</th>
              <th>Contact Depositors</th>
              @if(Auth::user()->admin == 1)
              <th>Option</th>
              @endif
            </tr>
          </thead>
          <tbody>
            @foreach($creators as $creator)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $creator->name_creator }}</td>
              <td>{{ $creator->email }}</td>
              <td>{{ $creator->no_hp }}</td>
              @if(Auth::user()->admin == 1)
              <td>
                <a href="{{ route('creator.edit', $creator) }}" class="btn btn-primary btn-sm" style="float:left;">Update</a>
                <form action="{{ route('creator.destroy',$creator) }}" method="post">
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