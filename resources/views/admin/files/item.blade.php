<tr>

    <td>{{$file->id}}</td>
    <td>{{$file->file_title}}</td>
    <td>{{$file->file_type}}</td>
    <td>{{$file->file_name}}</td>
    <td>{{$file->file_size}}</td>
    <td>
      
       <a href="{{route('admin.files.edit',[$file->id])}}">
           <ion-icon name="create-outline"></ion-icon>
        </a>
    </td>
</tr>