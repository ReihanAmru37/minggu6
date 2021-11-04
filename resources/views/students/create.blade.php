@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('STUDENT DATA') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="/students" method="post"> 
                        @csrf
                        <div class="form-group">
                            <label for="Kelas">Class</label>
                            <select class="form-control" name="Kelas">
                                @foreach($kelas as $class)
                                    <option value="{{$class->id}}" {{ $student>class_id == $class->id? "selected":"" }}>
                                        {{$class->class_name}}
                                    </option>
                                @endforeach
                            </select></br>
                        </div>
                        <button type="submit" name="add" class="btn btn-primary float-right">Add Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>