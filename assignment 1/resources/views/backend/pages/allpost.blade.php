@extends('backend.layouts.layout')
@section('abc')

<div class="container">
  <h2>Students</h2>            
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      @if(count($data)>0)
        @foreach($data as $d)
          <tr>
            <td>{{ $d->id }}</td>
            <td>{{ $d->title }}</td>
            <td>{{ $d->description }}</td>
           
          </tr>
        @endforeach
      @else

      @endif
     
      
    </tbody>
  </table>
</div>

@stop
