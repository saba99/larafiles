@extends('admin.layout.master')



@section('content')

<div class="content-wrapper" style="min-height: 920px;">
<div class="content">

<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">برند ها</h3>
              <div class="text-left">
              
                   <a class="btn btn-app" href="">
                        <i class="fa fa-plus ml-2"></i>جدید
                   </a>
            
              </div>
                   
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th class="text-center">شناسه</th>
                    <th class="text-center">عنوان</th>
                    <th class="text-center">توضیحات</th>
                    <th class="text-center">عکس</th>
                   <th class="text-center">تاریخ ایجاد</th>
                   <th class="text-center">عملیات</th>
                  </tr>
                  </thead>
                  <tbody>
               
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
           
          </div>


        </div>

</div>



@endsection