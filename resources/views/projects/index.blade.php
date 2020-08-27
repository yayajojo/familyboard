@extends('layouts.nav')
@section('content')
<header class="flex items-end px-4 py-4 justify-between">
    <h1 class="text-xl px-2 ">My Projects</h1>
    <form class="text-sm px-2" action="{{route('project.create')}}" method="get">
        <button class="button-add" type="submit">
            Add Project
        </button>
    </form>
</header>
<div class="flex flex-wrap">
    @forelse($projects as $project)
    <div class="lg:w-1/3 px-2 py-2">
        <x-card :project="$project" />
    </div>
    @empty
    <div class="lg:w-1/3 card m-4">
        <h3 class="font-normal text-xl py-4">

            No project yet!

        </h3>
    </div>
    @endforelse
</div>

@endsection

<!-- @section('footer') -->
<!-- <!-- <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  
  <script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('bd77b92286237e3d3bfe', {
      cluster: 'ap3'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      location.reload();
    });

  </script> -->

@endsection -->