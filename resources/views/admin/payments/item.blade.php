<tr>
    <td>{{$payment->id}}</td>
    <td>{{$payment->user->name}}</td>
    <td>{{number_format($payment->payment_amount)}}</td>
    <td>{{$payment->payment_method_format() }}</td>
    <td>{{$payment->payment_gateway_name}}</td>
    <td>{{$payment->payment_res_num}}</td>
    <td>{{$payment->payment_ref_num}}</td>
    
    <td>{{\Morilog\Jalali\Jalalian::forge($payment->created_at)->format('Y-m-d H:i:s')}}</td>
 <td>{{$payment->status_format()}}</td>

    <td class="text-center">
      
        <a href="{{route('admin.payments.delete',$payment->id)}}">
<ion-icon name="trash-outline"></ion-icon>
<button type="submit" class="btn btn-danger">حذف</button>
    </a>
   

    </td>
</tr>