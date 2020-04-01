

   <tr> 
    <td>{{$book->id}}</td>
    <td>{{$book->title}}</td>
     <td><img src="{{ url('upload/images').'/'.$book->image }}"width="90" height="60"/></td>
                                
       <td "width:1000px;"><a href="{{ url('upload/images').'/'.$book->image }}"style="font-size:10px;">{{ "دانلود" }}</a></td> 
                                
    <td>{{$book->type}}</td>
    <td>{{$book->description}}</td>
    <td>{{$book->price}}</td>
    {{--  <td>{{$book->id}}</td>  --}}
   
    <td></td>
    <td class="text-center">
      
       <a href="{{route('books.edit',[$book->id])}}">
           <ion-icon name="create-outline"></ion-icon>
           <button type="submit" class="btn btn-warning">ویرایش</button>
        </a>
        <form action="{{route('books.destroy',$book->id)}}" method="post">
           {{method_field('delete')}}
        @csrf
             <button type="submit" class="btn btn-danger">حذف</button>
            <td>    
                             
</form>

</a>

    </td>
</tr>