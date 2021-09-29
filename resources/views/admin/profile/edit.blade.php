@extends('layouts.profile')
@section('title', 'プロフィールの編集')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィールの編集</h2>
                <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                    <ul>
                        @foreach($eroors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach    
                    </ul>
                @endif
                <div class="form-group row">
                    <label class="col-md-2">氏名</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="your_name" value="{{ $profile_form->name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">性別</label>
                    <div class="col-md-10">
                                <input type="radio" name="gender" value="男">男
                                <input type="radio" name="gender" value="女">女
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">趣味</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control-file" name="hobby" value="{{ $profile_form->hobby }}">
                    </div>
                </div>
                <div class="form-group row">
                        <label class="col-md-2">自己紹介文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="10">{{ $profile_form->introduction }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                            <p><input type="submit" class="form-control" value="編集"></p>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection