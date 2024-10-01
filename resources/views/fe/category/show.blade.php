@extends('layout')
@section('main')
    {{-- {{ $category }} --}}
    {{-- {{ $news }} --}}
    @foreach ($news as $item)
        <div class="bg-light p-4 rounded">
            <div class="row g-4 align-items-center">
                <div class="col-md-6">
                    <div class="rounded overflow-hidden">
                        <img src="{{ asset('img/news-2.jpg') }}" class="img-fluid rounded img-zoomin w-100" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-column">
                        <a href="{{ route('news.detail', $item->slug) }}" class="h3">{{ $item->title }}</a>
                        {{-- <p class="mb-0 fs-5"><i class="fa fa-clock"> 06 minute read</i> </p> --}}
                        <p class="mb-0 fs-5"><i class="fa fa-eye"> {{ $item->views }} Views</i></p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
