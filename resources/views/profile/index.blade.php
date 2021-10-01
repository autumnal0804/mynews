@extends('layouts.profile')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                               <div class="name">
                                   <h1>{{ str_limit($headline->name, 50) }}</h1>
                               </div>
                               <div class="gender">
                                   <p>{{ str_limit($headline->gender) }}</p>
                               </div>
                               <div class="hobby">
                                   <p>{{ str_limit($headline->hobby, 150) }}</p>
                               </div>
                               <div class="introduction">
                                   <p>{{ str_limit($headline->introduction, 150) }}</p>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="name">
                                    {{ str_limit($post->name, 50) }}
                                </div>
                                <div class="gender">
                                    {{ str_limit($post->gender) }}
                                </div>
                                <div class="hobby">
                                    {{ str_limit($post->hobby, 150) }}
                                </div>
                                <div class="introduction">
                                    {{ str_limit($post->introduction, 150) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection