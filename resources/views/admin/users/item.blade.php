
@section('ionicons')
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
@endsection


<tr>

    <td>{{$user->id}}</td>
   <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->wallet}}</td>
    <td>{{$user->packages()->count()}}</td>
    
    <td class="text-center">
        @include('admin.users.operations')
    </td>
</tr>