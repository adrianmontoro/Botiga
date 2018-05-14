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
             	<th>Quantitat Actual</th>
              <th>Nova quantitat</th>
              <th>Act. quantitat </th>
             	<th>Preu</th>
              <th style="text-align:center;"> Accions </th>
         	</tr>
     	</thead>

     	<tbody>

     		<?php foreach($content as $row) :?>

          <tr>
              <td>
                  <p><strong>{{$row->name}}</strong></p>
              </td>
              <td><label type="text" style="text-align:center;">{{ $row->qty }}</td>
            	<form method="post" action="{{route('cart_store',['rowid' => $row->rowId])}}">
                @csrf
                <td><input name="qty" type="text" style="width:50px;text-align:center;" value="{{ $row->qty }}"></td>
                <td><button type="submit "class="btn btn-success" style="width=15px;height:45px;">Act.</button></td>
              </form>
              <td><label type="text">{{ $row->price }}</td>
              <td><a href="{{route('cart_delete',['rowid' => $row->rowId])}}" class="btn btn-danger">Eliminar</a> </td>

              <td></td>
              <td style="font-color:black;"></td>
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
  <a href="{{route('paywithpaypal')}}" class="btn btn-success" style="align:right;"> Finalitzar comanda </a>


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
