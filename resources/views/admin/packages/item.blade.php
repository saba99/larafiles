<tr>

    
    <td>{{$package->package_title}}</td>
    
    <td>{{$package->package_price}}</td>
    <td>{{$package->files()->get()->count()}}</td>
     <td>{{$package->package_description}}</td>
    
    
    <td class="text-center">
      
       <a href="{{route('admin.packages.edit',[$package->id])}}">
           <ion-icon name="create-outline"></ion-icon>
           <button type="submit" class="btn btn-warning">ویرایش</button>
        </a>
        <a href="{{route('admin.packages.delete',$package->id)}}">

    
   <ion-icon name="trash-outline"></ion-icon>
</a>
<a href="{{route('admin.packages.sync_files',$package->id)}}">

    <button type="submit" class="btn btn-primary">مشاهده فایل ها</button>
   <ion-icon name="document-outline"></ion-icon>
</a>
<a href="{{route('admin.packages.delete',$package->id)}}">

    <button type="submit" class="btn btn-danger">حذف</button>
   <ion-icon name="document-outline"></ion-icon>
</a>
    </td>
</tr>