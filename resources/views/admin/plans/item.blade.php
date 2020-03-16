<tr>

    <td>{{$plan->id}}</td>
    <td>{{$plan->plan_title}}</td>
    <td>{{$plan->plan_limit_download_count}}</td>
    <td>{{$plan->plan_price}}</td>
    <td>{{$plan->plan_days_count}}</td>
    <td>
      
       <a href="{{route('admin.plans.edit',[$plan->id])}}">
           <ion-icon name="create-outline"></ion-icon>
        </a>
    </td>
</tr>