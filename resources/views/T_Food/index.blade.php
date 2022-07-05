<body>
    @extends('T_Food.layout')
    @section('content')

    <div class="w3-container">
  <h2>This is my vegetable shop</h2>

  <table class="w3-table-all">
  <h5><a href="/addfood">Add new</h5>
    <thead>
      <tr class="w3-light-grey ww3-hover-green">
        <th>Name</th>
        <th>Description</th>
        <th>Image</th>
        <th>Category</th>
        <th>Price</th>
        <th>Discount</th>
        <th>Action</th>



      </tr>
    </thead>
    @foreach($vegetable as $vg)
    <tr class="w3-hover-green">
      <td>{{$vg->name}}</td>
      <td>{{$vg->description}}</td>
      <td><img src="source/image/product/{{$vg->image}}"style="width:150px"></td>
      <td>{{$vg->category}}</td>
      <td>{{$vg->price}}</td>
      <td>{{$vg->discount}}</td>
      <td><a href="/detail/{{$vg->id}}">Detail</td>

    </tr>
    @endforeach
  </table>
</div>
@endsection
</body>
</html>