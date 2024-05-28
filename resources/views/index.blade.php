<h1>List Of Tasks</h1>

<div>
    @if(count($tasks))
    @foreach($tasks as $task)
    <div>
    <a href="{{ route('tasks.show',['id' => $task->id] )}}'">{{$task -> title}}</a>
    </div>
    @endforeach
    @else
    <div>Naaah there isn't any of them</div>
    @endif
</div>

<br>

<div>
    @forelse($tasks as $task)
    <div>
    <a href="{{ route('tasks.show',['id' => $task->id] )}}'">{{$task -> title}}</a>
        </div>
    @empty
    <div>Naaah there isn't any of them</div>
    @endforelse
</div>
