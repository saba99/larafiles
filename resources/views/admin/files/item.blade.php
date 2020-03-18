<tr>

    <td>{{$file->id}}</td>
    <td>{{$file->file_title}}</td>
    <td>{{$file->file_type}}</td>
    <td>{{$file->file_name}}</td>
    <td>{{$file->file_size}}</td>
    <td>
      
       <a href="{{route('admin.files.edit',[$file->id])}}">
           <ion-icon name="create-outline"></ion-icon>
           <button type="submit" class="btn btn-warning">ویرایش</button>
        </a>
         <a href="{{route('admin.files.delete',$file->id)}}">
             <button type="submit" class="btn btn-danger">حذف</button>
            <td>    
                             

    
   <ion-icon name="trash-outline"></ion-icon>
</a>

    </td>
    
</tr>