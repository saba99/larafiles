<tr>

    
    <td>{{$plan->plan_title}}</td>
    <td>{{$plan->plan_limit_download_count}}</td>
    <td>{{$plan->plan_price}}</td>
    <td>{{$plan->plan_days_count}}</td>
    <td class="text-center">
      
       <a href="{{route('admin.plans.edit',[$plan->id])}}">
           <ion-icon name="create-outline"></ion-icon>
        </a>
        <a href="{{route('admin.plans.delete',$plan->id)}}">

    
   <ion-icon name="trash-outline"></ion-icon>
</a>
    </td>
</tr>