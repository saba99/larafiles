<tr>

    
    <td>{{$order->id}}</td>
    
    <td>{{$order->amount}}</td>
    <td>{{$order->packages()->get()->count()}}</td>
    @if($order->status==0)
     <td><span class="badge badge-pill badge-danger">پرداخت نشده</span></td>

     @else 

     <td><span class="badge badge-pill badge-success">پرداخت شده </span></td>
    @endif
    <td class="text-center">
      
       
        <a href="{{route('admin.packages.delete',$order->id)}}">

    
   <ion-icon name="trash-outline"></ion-icon>
</a>

<a href="{{route('admin.orders.delete',$package->id)}}">

    <button type="submit" class="btn btn-danger">حذف</button>
   <ion-icon name="document-outline"></ion-icon>
</a>
    </td>
</tr>