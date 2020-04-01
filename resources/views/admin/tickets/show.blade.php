{{-- @extends('layouts.app') --}}

 @extends('admin.layout.master')

@section('title', $ticket->title)

@section('content')
<div class="content-wrapper" style="min-height:920px;">

    <div class="box box-info " style="min-height:500px; padding:100px;">
   <div class="box-body">
    <div class="row">
        <div class="col-md-6 col-md-offset-1 ml-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    #{{ $ticket->ticket_id }} - {{ $ticket->title }}
                </div>
                
                <div class="panel-body" >
                    @include('admin.partials.flash')

                    <div class="ticket-info">
                        <p>{{ $ticket->message }}</p>
                        <p>دسته بندی: {{ $category->name }}</p>
                        <p>
                        @if ($ticket->status === 'Open')
                            وضعیت: <span class="label label-success">{{ $ticket->status }}</span>
                        @else
                            وضعیت: <span class="label label-danger">{{ $ticket->status }}</span>
                        @endif
                        </p>
                        <p>ایجاد شده در تاریخ: {{ $ticket->created_at->diffForHumans() }}</p>
                    </div>

                    <hr>

                    <div class="comment-form">
                        <form action="{{ url('comment') }}" method="POST" class="form">
                            {!! csrf_field() !!}

                            <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">

                            <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                                <textarea rows="10" id="comment" class="form-control" name="comment"></textarea>

                                @if ($errors->has('comment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">ذخیره</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection