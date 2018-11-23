@extends('backend.layouts.layout')
@section('abc')
<div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Forms</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Form Example</div>
            <div class="card-body">
              <form class="form-horizontal" method="post" action="{{url('savepost')}}">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label >Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title Here">
                  </div>
                  
                </div>
                <div class="form-group">
                  <label for="inputAddress">Description</label>
                  <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                  
                </div>
                
                <button type="submit" class="btn btn-primary">Add</button>
              </form>
            </div>
            
          </div>

          

        </div>
@stop