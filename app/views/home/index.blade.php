@extends('layout.main')

@section('content')

{!! Form::open(['id' => 'urlform']) !!}

@if(Session::has('emsg'))
    <div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        {{ Session::flash('emsg') }}
    </div>
@elseif(Session::has('smsg'))
    <div class="alert alert-success" role="alert">
        <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
        <span class="sr-only">Success:</span>
        {{ Session::flash('smsg') }}
    </div>
@endif

@if($errors->has('url'))
    <div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span>
        {{ $errors->first('url') }}
    </div>
@endif
<div class="form-group">
    {!! Form::label('url', 'URL to shorten:') !!}

    @if(Session::has('shorturl'))
        {!! Form::text('url', Session::flash('shorturl'), ['class' => 'form-control']) !!}
    @else
        @if(!is_null($input))
            {!! Form::text('url', $input['url'], ['class' => 'form-control']) !!}
        @else
            {!! Form::text('url', '', ['class' => 'form-control']) !!}
        @endif
    @endif

    {{-- {!! Form::text('url', '', ['class' => 'form-control']) !!} --}}
</div>

{!! Form::submit('Create Shortened URL', ['class' => 'btn btn-primary', 'id' => 'create']) !!}

{!! Form::close() !!}

<hr>

<div class="panel panel-primary">
    <div class="panel-heading">
        Forward
    </div>
    <div class="panel-body">
        <p>This application is built to create and distribute URLs anonymously with a shortened syntax.</p>
        <p>The URL ID is 6 characters long. A good ID that's short enough for distributing.</p>
        <p>To shorten a URL, type the long URL in the box, and press the button. Your URL will be created for you.</p>
    </div>
</div>

@stop
