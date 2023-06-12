@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

</head>
<body>
  <div class="card">
  <h1>Product Purchase System</h1>
  <div class="card-header">Product buying Form</div>
  <div class="card-body">
      
      <form action="{{ url('customer_product/store') }}" method="post">
        {!! csrf_field() !!}
        <label>Customer Name</label></br>
        <select id="customer" name="customer_id">
        @foreach(App\Models\Customer::all() as $customer)
        <option value="{{$customer->id}}">
        {{$customer->name}}
        </option>
        @endforeach
        </select>
        </br>
        <label>Gaurantor Name</label></br>
        <select id="gaurantor" name="Gaurantor_id">
        @foreach(App\Models\Gaurantor::all() as $gaur)
        <option value="{{$gaur->id}}">
        {{$gaur->name}}
        </option>
        @endforeach
        </select></br>
        <label>Password</label></br>
        <select id="customer" name="customer_id">
        @foreach(App\Models\Product::all() as $product)
        <option value="{{$product->id}}">
        {{$product->name}}
        </option>
        @endforeach
        </select></br>
        <label for="quantity">Quantity: &nbsp;</label>
        <input type="text" name="quantity" id="quantity" class="form-control">
        <br><br>
        <input type="submit" value="Save" class="btn btn-success"></br>
        @if (isset($status))
          <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          {{ $status }}
          </div>
        @endif
        @if (is_null('status'))
        <!-- Display nothing if no search has been performed -->
        @endif
    </form>
   
  </div>
</div>
@stop
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>