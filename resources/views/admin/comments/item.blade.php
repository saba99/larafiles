

   <tr> 
    <td>{{$comment->id}}</td>
    
    {{-- <td>{{$comment->title}}</td> --}}
     <td>{{$comment->package->package_title}}</td> 
     <td>{{$comment->file->file_title}}</td> 
    <td >{{Str::limit($comment->description,50)}}</td>
                   
                 @if($comment->status == 0)
                    <td>
                        
                        {!! Form::open(['method' => 'POST', 'route' => ['comments.actions', $comment->id]]) !!}
                        <div class="form-group">
                            {!! Form::hidden('action', 'approved') !!}
                           
                            {!! Form::submit('تایید', ['class'=>'btn btn-success']) !!}
                        </div>
                        </form>
                    </td>
                @else
                    <td>
                        {!! Form::open(['method' => 'POST', 'route' => ['comments.actions', $comment->id]]) !!}
                        <div class="form-group">
                            {!! Form::hidden('action', 'rejected') !!}
                            {!! Form::submit('عدم تایید', ['class'=>'btn btn-danger']) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                @endif
            
                       
                    <td class="text-center">{{$comment->created_at}}</td>
   
    <td></td>
    <td class="text-center ">
      
       <a href="{{route('admin.comments.edit',[$comment->id])}}">
           <ion-icon name="create-outline"></ion-icon>
           <button type="submit" class="btn btn-warning">ویرایش</button>
        </a>
        <a>
            <form action="/administrator/comments/{{$comment->id}}" method="POST" style="display: inline-block;">
                                            
                      @csrf
                         <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">حذف</button>
                        
                      </form>
           
                    </td>  
                </a>  

</tr>