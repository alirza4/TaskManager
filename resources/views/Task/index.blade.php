@extends('layouts.app')

@section('main-content')
    <div>
        <div class="float-start">
            <h4 class="pb-3">My Tasks</h4>
        </div>
        <div class="float-end">
            <a href="{{ route('task.create') }}" class="btn bg-warning text-dark">
                <i class="fa fa-plus-circle"></i> Create Task
            </a>
        </div>
        <div class="clearfix"></div>
    </div>

    @foreach ($tasks as $task)
        <div class="card mt-3">
            <h5 class="card-header">
                @if ($task->status === 'Done' || $task->status === 'Rejected')
                    <del>{{ $task->title }}</del>
                @else
                    {{ $task->title }}
                @endif

                <span class="badge  bg-warning text-dark">
                    {{ $task->created_at->diffForHumans() }}
                </span>
                    <span class="badge  text-dark">
                    {{ $task->author }}
                </span>

            </h5>

            <div class="card-body">
                <div class="card-text">
                    <div class="float-start">
                        @if ($task->status === 'Done' || $task->status === 'Rejected')
                            <del>{{ $task->description }}</del>
                        @else
                            {{ $task->description }}
                        @endif
                        <br>

                        @if ($task->status === 'Todo')
                            <span class="badge rounded-pill bg-warning text-white">
                                Todo
                            </span>
                        @elseif ($task->status === 'Done')
                            <span class="badge rounded-pill bg-success text-white">
                                Done
                            </span>
                        @elseif ($task->status === 'Backlog')
                            <span class="badge rounded-pill bg-dark text-white">
                                Backlog
                            </span>
                        @elseif ($task->status === 'Qa')
                            <span class="badge rounded-pill bg-primary text-white">
                                Qa
                            </span>
                        @elseif ($task->status === 'Test')
                            <span class="badge rounded-pill  bg-info text-white">
                                Test
                            </span>
                        @elseif ($task->status === 'InProgress')
                            <span class="badge rounded-pill  bg-secondary text-white">
                                InProgress
                            </span>
                        @elseif ($task->status === 'Rejected')
                            <span class="badge rounded-pill  bg-danger text-white">
                                Rejected
                            </span>
                        @endif


                        <small>Last Updated - {{ $task->updated_at->diffForHumans() }} </small>
                    </div>
                    <div class="float-end">
                        <a href="{{ route('task.edit', $task->id) }}" class="btn btn-success">
                            <i class="fa fa-edit"></i>
                        </a>

                        <form action="{{ route('task.destroy', $task->id) }}" style="display: inline" method="POST"
                              onsubmit="return confirm('Are you sure to delete ?')">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    @endforeach

    @if (count($tasks) === 0)
        <div class="alert alert-danger p-2">
            No Task Found. Please Create one task
            <br>
            <br>
            <a href="{{ route('task.create') }}" class="btn btn-info">
                <i class="fa fa-plus-circle"></i> Create Task
            </a>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success" id="success-alert">
            {{ session('success') }}
        </div>
    @endif

    <script>
        setTimeout(function() {
            document.getElementById('success-alert').style.display = 'none';
        }, 3000);
    </script>
    <script>
        setTimeout(function() {
            document.getElementById('success-alert').style.display = 'none';
        }, 3000);
    </script>
@endsection
