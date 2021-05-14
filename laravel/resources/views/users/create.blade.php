<div class="form-group">
    <form class="form-signin" action="/users/post" method="POST">
        @csrf
        <input type="text" name="name" class="form-control" id="form-text" placeholder="name" required autofocus>
            <span role="alert" class="error-msg" id="errormsg_0_Passwd"></span>
        <input type="text" name="email" class="form-control" id="form-text" placeholder="email" required autofocus>
            <span role="alert" class="error-msg" id="errormsg_0_Passwd"></span>
        <input type="text" name="password" class="form-control" id="form-text" placeholder="password" required autofocus>
            <span role="alert" class="error-msg" id="errormsg_0_Passwd"></span>
        <span role="alert" class="error-msg" id="errormsg_0_Passwd"></span>
        <input type="submit" value="Registrar usuario" class="btn btn-lg btn-primary btn-block" />
        <span class="clearfix"></span>
    </form>
</div>
@extends('layouts.main')

@section('title', 'hdc')

@section('content')
    <td>{{$status ?? ''}}</td>
    <p1>{{$msg ?? ''}}</p1>

@endsection
