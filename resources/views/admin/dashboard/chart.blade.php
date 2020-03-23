@extends('admin.layout.master')


@section('content')

<script src="{{asset('assets/js/vendor/chart.bundle.min.js')}}"></script> 

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>سفارشات جدید</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i> اطلاعات بیشتر </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>افزایش امتیاز</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i> اطلاعات بیشتر </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>کاربران ثبت شده</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i> اطلاعات بیشتر </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>بازدید های جدید</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-left"></i> اطلاعات بیشتر </a>          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
              <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
              <li class="pull-right header"><i class="fa fa-inbox"></i> فروش</li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->

              {{--  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
              <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>  --}}

              
<canvas id="myChart" width="100" height="100"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: {!! json_encode(array_keys($download_statistics)) !!},
        datasets: [{
            label: 'تعداد دانلود ',
            data: {!! json_encode(array_values($download_statistics)) !!},
            backgroundColor: [
                'rgba(255,116,140,0.2)',
                'rgba(255,141,161,,0.2)',
                'rgba(255,167,182,,0.2)',
                'rgba(255,55,90,,0.2)',
                'rgba(255,218,224,0.2)',
                'rgba(255,243,245,0.2)'
            ],
            borderColor: [
                'rgb(255,116,140)',
                'rgb(255,141,161)',
                'rgb(255,167,182)',
                'rgb(255,55,90)',
                'rgb(255,218,224)',
                'rgb(255,243,245)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
            </div> 
          </div>
          <!-- /.nav-tabs-custom -->

         


          <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-header">

              <h3 class="box-title">ارسال ایمیل</h3>

              <i class="fa fa-envelope"></i>
              
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="#" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="emailto" placeholder="ایمیل:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="عنوان">
                </div>
                <div>
                  <textarea class="textarea" placeholder="پیام" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </form>
            </div>
            <div class="box-footer clearfix">
              <button type="button" class="pull-left btn btn-default" id="sendEmail">ارسال
                <i class="fa fa-arrow-circle-left"></i></button>
            </div>
          </div>

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">


       

        

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  




@endsection 
