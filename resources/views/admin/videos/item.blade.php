

   <tr> 
    <td>{{$video->id}}</td>
    <td>{{$video->title}}</td>
     <td><img src="{{ url('upload/images').'/'.$video->image }}"width="90" height="60"/></td>
                                
       <td "width:1000px;"><a href="{{ url('upload/images').'/'.$video->image }}"style="font-size:10px;">{{ "دانلود" }}</a></td> 
                                
    <td>{{$video->type}}</td>
    <td>{{$video->description}}</td>
    <td>{{$video->price}}</td>
    {{--  <td>{{$book->id}}</td>  --}}
   
    <td></td>
    <td class="text-center">
      
       <a href="{{route('videos.edit',[$video->id])}}">
           
           <button type="submit" class="btn btn-warning">ویرایش</button>
        </a>
        <form action="{{route('videos.destroy',$video->id)}}" method="post">
           {{method_field('delete')}}
        @csrf
             <button type="submit" class="btn btn-danger">حذف</button>
            <td>    
                             
</form>

</a>

    </td>
</tr>