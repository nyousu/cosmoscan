@extends('layouts.admin')
@section('contents')
<form action="{{route('admin.logout')}}" method="POST">
        {{ csrf_field() }}
        <button id="btn-logout" class="btn btn-danger">ログアウト</button>
</form>

@endsection
