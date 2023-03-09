@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Blog Posts</h1>
                <hr>
                {{-- もし$postsがからであれば処理を実行しない --}}
                @if (isset($posts))
                    <p>There is no post.</p>
                @else
                    ポストはないみたい
                @endif
            </div>
        </div>
    </div>
@endsection
