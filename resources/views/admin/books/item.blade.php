

   <tr> 
    <td>{{$book->id}}</td>
    <td>{{$book->title}}</td>
    <td>{{$book->path}}</td>
    <td><img src="{{url('/upload/images').'/'.$book->image}}" class="img-responsive"></td>
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
        <a href="{{route('books.destroy',$book->id)}}">
             <button type="submit" class="btn btn-danger">حذف</button>
            <td>    
                             

    
   <ion-icon name="trash-outline"></ion-icon>
</a>

    </td>
</tr>