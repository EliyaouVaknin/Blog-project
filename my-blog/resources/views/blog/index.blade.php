@extends('layouts.app')
@section('content')
    hello, {{ auth()->user()->name }}
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-10">
                        <h1 id="title" class="display-one">Bloop.</h1>
                        <label for="title">The best Blog website that ever made !</label>
                    </div>
                    <div class="col-2">
                        <a href="/blog/create/post" class="btn btn-primary btn-md">Add Post</a>
                    </div>
                </div>
                @forelse($posts as $post)
                    <ul>
                        <li><a href="./blog/{{ $post->id }}">{{ ucfirst($post->title) }}  {{ ucfirst($post->body) }}  {{ ($post->updated_at)->diffForHumans() }}</a>
                        <br/>
                        <a>{{ $post->user->name }}</a>
                        </li>
                    </ul>
                @empty
                    <p class="text-warning">No blog Posts available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
