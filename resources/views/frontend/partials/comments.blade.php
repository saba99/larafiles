@foreach($comments as $comment)
<div class="media depth-2 reply-comment">
 <div class="media-left">
   <a href="#">
    <img class="media-object" src="/assets/images/new/m2.png" alt="Commentator Avatar">
                                                    </a>
       </div>
      <div class="media-body">
     <form action="{{route('comment.reply')}}" class="comment-reply-form">
         <input type="hidden" name="package_id" value="{{$comment->parent_id}}">
         <input type="hidden"  name="parent_id" value="{{$comment->package_id}}">
  <textarea  name="description" placeholder="نظر خود را بنویسید "></textarea>
     <button class="btn btn--sm btn--round" type="submit">ارسال نظر </button>
          </form>
        </div>
   </div>


    @endforeach