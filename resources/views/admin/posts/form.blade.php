
<form action="{{route('posts.store')}}" method="post" >

@csrf

<div class="row">
   
   <div class="col-xs-12 col-md-6">
      @include('admin.partials.errors')
    <div class="form-group">

   <lable for="title">عنوان پست:</lable>
   
   <input type="text" class="form-control" name="title"  value="{{old('title',isset($postItem) ? $postItem->title : '')}}">
</div>  
 <div class="form-group">

   <lable for="slug">نام مستعار:</lable>
   
   <input type="text" class="form-control" name="slug"  value="{{old('slug',isset($postItem) ? $planItem->slug : '')}}">
</div>  
 
    <div class="form-group">

   <lable for="file">تصویر:</lable>
   
   <input type="file" class="form-control" name="file"  value="{{old('file',isset($postItem) ? $postItem->file : '')}}">
</div> 


 <div class="form-group">
 
   <lable for="description">توضیحات:</lable>
   
   {{-- <textarea id="default" name="description" class="form-control">
     
    </textarea> {!! old('content', $content) !!}--}}
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<textarea  name="description"  class="form-control my-editor"></textarea>
<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    
    plugins: [
      " directionality advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media|ltr rtl",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
  var route_prefix = "url-to-filemanager";
lfm('lfm', 'image', {prefix: route_prefix});
lfm('lfm2', 'file', {prefix: route_prefix});
</script>
   
   {{-- <input type="text"  name="description"  class="form-control" value="{{old('description',isset($postItem) ? $postItem->description : '')}}"> --}}
</div>  
<div class="form-group">

   <lable for="meta_keywords">کلمه کلیدی:</lable>
   
   <input type="text" class="form-control" name="meta_keywords"  value="{{old('meta_keywords',isset($postItem) ? $postItem->meta_keywords : '')}}">
</div>
<div class="form-group">

   <lable for="meta_description">توضیحات متا:</lable>
   
   <input type="text" class="form-control" name="meta_description"  value="{{old('meta_description',isset($postItem) ? $postItem->meta_description : '')}}">
</div>



   <div class="form-check">
      <label for="my-input" class="form-check-label">منتشر شده</label>
      <input id="my-input" class="form-check-input" type="checkbox" name="status" value="true">
      <label for="my-input" class="form-check-label">منتشر نشده</label>
      <input id="my-input" class="form-check-input" type="checkbox" name="status" value="true">
      
   </div>


 <div class="form-group ">
   
    <button type="submit" class="btn btn-success " >
       ذخیره اطلاعات
    </button>
 </div>
   </div>
</div>


</form>

