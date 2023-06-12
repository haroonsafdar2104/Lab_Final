<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
<div class="card">
  <div class="card-header">Details of purchaase</div>
  <div class="card-body">
  <table class="table" >
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Customer Name</th>
                                        <th>Product Name</th>
                                        <th>Gaurantor Name</th>
                                        <th>Product PRice</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(App\Models\purchase::all() as $pur)
                                    <tr>
                                        <td>{{ $pur->id }}</td>
                                        <td>{{App\Models\Customer::find($pur->customer_id)->name}}</td>
                                        <td>{{ App\Models\Product::find($pur->product_id)->name }}</td>
                                        <td>{{App\Models\Gaurantor::find($pur->gaurantor_id)->name }}</td>
                                        <td>{{App\Models\Product::find($pur->product_id)->price }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
  </div>
    </hr>
  
  </div>
</div>
</div>
</body>
</html>