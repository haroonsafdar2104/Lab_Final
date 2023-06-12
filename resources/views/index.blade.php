@extends('layout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .row{
        padding-top:100px;
        padding-left:100px;
    }
    .custom-btn {
width:200px;
  font-size: 18px;
  padding: 12px 24px;
  border-radius: 50px;
  box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.2);
  transition: all 0.2s ease-in-out;
}

.custom-btn:hover {
  background-color: #0080ff;
  color: #fff;
  box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.4);
}
.card{
    width:80%;
    margin:0 auto;
}
</style>
<body>
<div class="card">
    <div class="card-header">Buttons Page</div>
<div class="card-body">
<div class="row">
  <div class="col-md-3 mb-3">
    <a href="{{ url('city/read') }}"  class="btn btn-primary btn-lg btn-block custom-btn">City</a>
  </div>
  <div class="col-md-3 mb-4">
    <a href="{{ url('customer/read') }}" class="btn btn-primary btn-lg btn-block custom-btn">Customer</a>
  </div>
  <div class="col-md-3 mb-4">
    <a href="{{ url('product/read') }}" class="btn btn-success btn-lg btn-block custom-btn">Product</a>
  </div>
  <div class="col-md-3 mb-4">
    <a href="{{ url('gaurantor/read') }}" class="btn btn-success btn-lg btn-block custom-btn">Gaurantor</a>
  </div>
  <div class="col-md-3 mb-4">
    <a href="{{ url('purchase/read') }}" class="btn btn-success btn-lg btn-block custom-btn">purchase</a>
  </div>
</div>
</div>
</div>
</body>
</html>