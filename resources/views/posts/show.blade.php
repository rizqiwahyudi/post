@extends('layouts.app')

@section('title', 'Show Post')

@section('content')
<!-- Ini Komentar Perubahan kedua -->
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card border-0 shadow-sm rounded">
            <div class="card-body">
                <img src="{{ asset('storage/posts/'.$post->image) }}" class="w-100 rounded">
                <hr>
                <h4>{{ $post->title }}</h4>
                <p class="tmt-3">
                    {!! $post->content !!}
                </p>
                <div class="mt-3">
                    <p class="text-right font-weight-bold">{{ $post->created_at }}</p>
                </div>
                @include('posts.komentar.show-komentar')
                <div class="mt-4">
                    <form action="{{url('/comment/store')}}" method="POST">
                        @csrf
                        <input type="hidden" name="post_id" id="post_id" 
                            value="{{ $post->id }}">
                        <div class="form-group">
                            <label class="font-weight-bold">KOMENTAR</label>
                            <input type="text" class="form-control 
                                @error('komentar') 
                                is-invalid @enderror" 
                                name="komentar" 
                                placeholder="Masukkan Komentar Post">
    
                            @error('komentar')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" 
                            class="btn btn-md btn-primary mb-4">
                            SIMPAN
                        </button>
                    </form>
                </div>
                <div class="mt-2">
                    <a href="{{ url('/posts') }}" class="btn btn-sm btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection