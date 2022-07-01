@extends('T_Food.layout')																
@section('content')																
<div class="w3-container">
  <h2>Show sản phẩm theo loại</h2>
  <p>Add a dropdown menu inside the navigation bar:</p>

  <div class="w3-bar w3-light-grey">
    <a href="#" class="w3-bar-item w3-button">Home</a>
    <a href="#" class="w3-bar-item w3-button">Link 1</a>
    <div class="w3-dropdown-hover">
      <button class="w3-button">Dropdown</button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        @foreach($type_product as $type)
        <a href="#" class="w3-bar-item w3-button">{{$type->category}}</a>
        <a href="#" class="w3-bar-item w3-button">$type->category</a>
        <a href="#" class="w3-bar-item w3-button">$type->category</a>
        @endforeach
      </div>
    </div>
  </div>
</div>														
@endsection									