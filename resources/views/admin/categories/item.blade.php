

   <tr> 
    <td>{{$category->id}}</td>
    
    <td>{{$category->name}}</td>
   
    <td></td>
    <td class="text-center">
      
       <a href="{{route('admin.categories.edit',[$category->id])}}">
           <ion-icon name="create-outline"></ion-icon>
           <button type="submit" class="btn btn-warning">ویرایش</button>
        </a>
        <a href="{{route('admin.categories.delete',$category->id)}}">
             <button type="submit" class="btn btn-danger">حذف</button>
            <td>    
                             

    
   <ion-icon name="trash-outline"></ion-icon>
</a>

    </td>
</tr>