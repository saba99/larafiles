<tr>

    
    <td>{{$package->package_title}}</td>
    
    <td>{{$package->package_price}}</td>
    <td>{{$package->files()->get()->count()}}</td>
    
    <td class="text-center">
      
       <a href="{{route('admin.packages.edit',[$package->id])}}">
           <ion-icon name="create-outline"></ion-icon>
        </a>
        <a href="{{route('admin.packages.delete',$package->id)}}">

    
   <ion-icon name="trash-outline"></ion-icon>
</a>
<a href="{{route('admin.packages.sync_files',$package->id)}}">

    
   <ion-icon name="document-outline"></ion-icon>
</a>
    </td>
</tr>