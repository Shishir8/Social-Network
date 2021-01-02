@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5">
        <img src="https://instagram.fbir3-1.fna.fbcdn.net/v/t51.2885-19/s150x150/129735493_406808270674996_3309590159973674082_n.jpg?_nc_ht=instagram.fbir3-1.fna.fbcdn.net&_nc_ohc=Zc_-9hcUEqcAX_PVncP&tp=1&oh=713994e4d13679a4747794ca220ff91a&oe=6019D171" class="rounded-circle">
       </div>
       <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->name }}</h1>
                <a href="/post/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong>Posts</div>
                <div class="pr-5"><strong>153</strong>Followers</div>
                <div class="pr-5"><strong>13</strong>Following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
       </div>
       
       <div class="row pt-5">
       @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/post/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach
       </div>
   </div>
</div>
@endsection
