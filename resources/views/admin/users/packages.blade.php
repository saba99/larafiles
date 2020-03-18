@extends('admin.layouts.admin')




@section('content')

<table class="table table-bordered table-hover">
    <tr>
        <th>پکیج</th>
        <th>مبلغ پرداخت شده</th>
        <th>تاریخ پرداخت</th>
    </tr>
  @if($user_packages && count($user_packages)>0)


@foreach($user_packages as $package)

<tr>
    <td>{{$package->id}}</td>
    <td>{{$package->pivot->amount}}</td>
    <td>{{$package->created_at}}</td>
</tr>


@endforeach
@else 
<tr>
    <td colspan="3">
        <span>هیچ اطلاعاتی یافت نشد </span>
    </td>
</tr>
@endif  
</table>




@endsection