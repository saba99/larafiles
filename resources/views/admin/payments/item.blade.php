<tr>
    <td>{{$payment->id}}</td>
    <td>{{$payment->user->name}}</td>
    <td>{{number_format($payment->payment_amount)}}</td>
    <td>{{$payment->payment_method_format() }}</td>
    <td>{{$payment->payment_gateway_name}}</td>
    <td>{{$payment->payment_res_num}}</td>
    <td>{{$payment->payment_ref_num}}</td>
    
    <td>{{$payment->created_at}}</td>
 <td>{{$payment->status_format()}}</td>

    <td class="text-center">
      
        <a href="{{route('admin.payments.delete',$payment->id)}}">
<ion-icon name="trash-outline"></ion-icon>
    </a>
   

    </td>
</tr>