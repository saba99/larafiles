<a href="{{route('admin.users.delete',$user->id)}}">
<button type="submit" class="btn btn-danger">حذف</button>
    
   <ion-icon name="trash-outline"></ion-icon>
</a>
<a href="{{route('admin.users.edit',$user->id)}}">
   <ion-icon name="reader-outline"></ion-icon>
   <button type="submit" class="btn btn-warning">ویرایش</button>
   
</a>
<a title="نمایش لیست پکیج های خریداری شده"  href="{{route('admin.users.packages',$user->id)}}">
   <ion-icon name="albums-outline">  </ion-icon>
   
</a>
</a>