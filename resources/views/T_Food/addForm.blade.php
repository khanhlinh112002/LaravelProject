@extends('T_Food.layout')
@section('content')
<div class="space50">&nbsp;</div>
<div class="container beta-relative">
    <div class="pull-left">
        <h2>Add Vegetable</h2>
    </div>

    <div class="space50">&nbsp;</div>
    <div class="container">
        <form action="{{route('add-food')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for='inputName'>Name</label>
                <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Enter name"
                    required>
            </div>

            <div class="form-group">
                <label for='inputPrice'>Price</label>
                <input type="number" min=15000 class="form-control" name="inputPrice" id="inputPrice"
                    placeholder="Enter price" required>
            </div>

            <div class="form-group">
                <label for='inputDiscount'>Discount</label>
                <input type="number" min=0 max=10000 class="form-control" name="inputDiscount" id="inputDiscount"
                    placeholder="Enter Discount">
            </div>

            <div class="form-group">
                <label for='inputDescription'>Description</label>
                <input type="textarea" class="form-control" name="inputDescription" id="inputDescription" placeholder="Enter Description"
                    required>
            </div>

            <div class="form-group">
                <label for='inputCategory'>Category</label>
                <input type="text" class="form-control" name="inputCategory" id="inputCategory" placeholder="Enter Category"
                    required>
            </div>

            <div class="form-group">
                <label for='inputImage'>Image file</label>
                <input type="file" class="form-control-file" name="inputImage" id="inputImage" required>
            </div>
            @include('T_Food.error')
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
    <div class="space50">&nbsp;</div>
</div>
@endsection