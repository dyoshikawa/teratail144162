<h1>ユーザーのShowページ</h1>　
  <div class="container">
    <div class="table-responsive">
        <table class="table table-striped">
                <tr>
                    <th>{{ __('Name') }}</th>
                    <td>{!! $user->name !!}</td>
                </tr>

                <tr>
                    <th>{{ __('Email') }}</th>
                    <td>{{ $user->email }}</td>
                </tr>
        </table>
    </div>

<br>

    <a href="/users/{{$user->id}}/edit" class="btn btn-primary">{{ Form::submit('Edit', ['class'=>'btn btn-primary']) }}</a>

    <a href="/users" class="btn btn-primary">{{ Form::submit('Back', ['class'=>'btn btn-primary']) }}</a>

    {!! Form::open(['url'=>['/users', $user->id], 'method'=>'POST', 'class'=>'pull-right']) !!}

    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Delete', ['class'=>'btn btn-danger']) }}
    {!! Form::close() !!}
</div>