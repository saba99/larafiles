<tr>

    
    <td>{{$photo->id}}</td>
    
    <td>{{$photo->name}}</td>
    <td><img src="{{$photo->path}}" class="img-responsive" style="width:100px;height:100px;"></td>
     <td>{{$photo->user->name}}</td>
    
    
    <td class="text-center">
     <form method="POST" action="{{route('photos.destroy',$photo->id)}}">
      @csrf 
<input type="hidden" name="_method" value="DELETE">

    <button type="submit" class="btn btn-danger">حذف</button>
  </form>
</a>
    </td>
</tr>