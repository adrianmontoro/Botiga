  @extends('layouts.index')

  @section('content')

  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
  </head>
  <div class="container">
    <div class="row">
      <div class="semi2 center">
      <table align="center">
     	<thead>
         	<tr>
             	<th>Producte</th>
             	<th>Quantitat</th>
             	<th>Preu</th>
             	<th>Subtotal</th>
         	</tr>
     	</thead>

     	<tbody>

     		<?php foreach(Cart::content() as $row) :?>

          <tr>
              <td>
                  <p><strong>{{$product->name}}</strong></p>
              </td>
            	<td><input type="text" value="<?php echo $row->qty; ?>"></td>
              <td>{{$product->price}}</td>
              <td style="font-color:black;">{{$product->total}}</td>
          </tr>

  	   	<?php endforeach;?>

     	</tbody>

     	<tfoot>
     		<tr>
     			<td colspan="2">&nbsp;</td>
     			<td>Subtotal</td>
     			<td><?php echo Cart::subtotal(); ?></td>
     		</tr>
     		<tr>
     			<td colspan="2">&nbsp;</td>
     			<td style="color:black;">IVA</td>
     			<td><?php echo Cart::tax(); ?></td>
     		</tr>
     		<tr>
     			<td colspan="2">&nbsp;</td>
     			<td>Total</td>
     			<td><?php echo Cart::total(); ?></td>
     		</tr>
     	</tfoot>
  </table>
  <a href="{{route('cart_edit') }}" class="btn btn-success">Editar</a>
  <a href="{{route('cart_delete') }}" class="btn btn-success">Eliminar</a>

  </div>
    </div>
  </div>
  @endsection

  <style>
    table, th, td {
       border: 1px solid black;
       color:black;
       align:center;
    }
    .semi2 {
        background: rgba(255, 255, 255,0.5);
    }

  </style>
