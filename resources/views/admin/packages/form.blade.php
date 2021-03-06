<form action="{{route('admin.packages.store')}}" method="post" >

@csrf
<div class="row">
   
   <div class="col-xs-12 col-md-6">
      @include('admin.partials.errors')
    <div class="form-group">

   <lable for="package_title">عنوان پکیج:</lable>
   
   <input type="text" class="form-control" name="package_title"  value="{{old('package_title',isset($packageItem) ? $packegeItem->package_title : '')}}">
</div>  
 

 <div class="form-group">

   <lable for="package_price">قیمت:</lable>
   
   <input type="text" class="form-control" name="package_price"  value="{{old('package_price',isset($packageItem) ? $packegeItem->package_price : '')}}">
</div>  
 <div class="form-group">

   <lable for="package_description">توضیحات:</lable>
      <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<textarea  name="package_description" class="form-control my-editor"></textarea>
<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    //directionality="rtl",
    plugins: [
      " advlist autolink lists link image charmap print preview hr anchor pagebreak",
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
</script>
   
   {{-- <input type="text" class="form-control" name="package_description"  value="{{old('package_price',isset($packageItem) ? $packegeItem->package_description : '')}}"> --}}
</div>
<div class="form-group">

   <lable for="package_price">دسته بندی ها:</lable>
  
   <select name="categories[]" class="select2 form-control" id="categories" multiple>
 @foreach($categories as $category)

<option value={{$category->id}}>{{$category->name}}</option>

@endforeach
</select>

</div>  

 <div class="form-group">
   
    <button type="submit" class="btn btn-success" >
       ذخیره اطلاعات
    </button>
 </div>
   </div>
</div>


</form> 
