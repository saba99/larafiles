<tr>

    
    <td>{{$category->id}}</td>
    
    <td>{{$category->name}}</td>
   
    <td></td>
    <td class="text-center">
      
       <a href="{{route('admin.categories.edit',[$category->id])}}">
           <ion-icon name="create-outline"></ion-icon>
        </a>
        <a href="{{route('admin.categories.delete',$category->id)}}">

    
   <ion-icon name="trash-outline"></ion-icon>
</a>

    </td>
</tr>