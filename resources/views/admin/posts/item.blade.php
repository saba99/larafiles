<tr>

    
    <td>{{$post->title}}</td>
      <td><img src="{{'/storage/'.$post->file->file_name}}" class="img-responsive" style="width:100px;"></td>  
    <td>{{$post->slug}}</td>
    <td>{{Str::limit($post->description,70)}}</td>
    <td>{{$post->meta_description}}</td>
    <td>{{$post->meta_keywords}}</td>
     <td>{{$post->user->name}}</td> 
      {{--  <td>{{$post->category->name}}</td>  --}}
    <td>
        @if($post->status==0)
        <span  class="badge badge-pill badge-danger">منتشر نشده</span>
        @else
       <span  class="badge badge-pill badge-success">منتشر شده</span>
      @endif
    </td>
    <td>{{$post->created_at}}</td>
    <td>{{$post->updated_at}}</td>

    <td class="text-center ">
      
       <a href="{{route('posts.edit',[$post->id])}}">
          
            <button type="submit" class="btn btn-warning">ویرایش</button>
        </a>
        <form action="{{route('posts.destroy',$post->id)}}" method="POST">
           @csrf
                       
           <input type="hidden" name="_method" value="DELETE">
         <button type="submit" class="btn btn-danger">حذف</button>
        </form>
  
</a>
    </td>
</tr>