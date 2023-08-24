@extends('layouts.app')

@section('main-content')
    <div>
        <div class="float-start">
            <h4 class="pb-3">Edit Task <span class="badge rounded-pill bg-warning text-dark">{{ $task->title }}</span></h4>
        </div>
        <div class="float-end">
            <a href="{{ route('index') }}" class="btn btn-warning">
                <i class="fa fa-arrow-left"></i> All Task
            </a>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="card card-body bg-light p-4">
        <form action="{{ route('task.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $task->title) }}">
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" class="form-control" id="description" name="description"
                          rows="5">{{ old('description', $task->description) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-control">
                    @foreach ($statuses as $status)
                        <option
                            value="{{ $status['value'] }}" {{  old('status', $task->status) === $status['value'] ? 'selected' : '' }}>
                            {{ $status['label'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="file" class="form-label">Current File</label>
                @if ($task->file)
                    <a class="badge rounded-pill bg-warning text-dark" href="{{ Storage::url($task->file) }}" >Download File</a>
                @else
                    No File Attached
                @endif
            </div>
            <div class="mb-3">
                <label for="file" class="form-label">Attachment</label>
                <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file">
                @error('file')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <a href="{{ route('index') }}" class="btn btn-secondary mr-2"><i class="fa fa-arrow-left"></i> Cancel</a>

            <button type="submit" class="btn btn-success">
                <i class="fa fa-check"></i>
                Save
            </button>
        </form>
    </div>

@endsection

