@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Questionnaire</div>

                <div class="card-body">

                    <h1>{{ $questionnaire->title }}</h1>

                    <form action="#" method="post">

                        @csrf

                        @foreach($questionnaire->questions as $key => $question)
                            <div class="card mt-4">
                                <div class="card-header"><strong>{{ $key + 1}} </strong>{{ $question->question }}</div>

                                <div class="card-body">
                                    <ul class="list-group">
                                        @foreach($question->answers as $answer)
                                            <label for="answer{{ $answer->id }}">
                                                <li class="list-group-item">
                                                    <input type="radio" name="#" id="answer{{ $answer->id }}"
                                                       class="mr-2">
                                                    {{ $answer->answer }}</li>
                                            </label>
                                        @endforeach

                                    </ul>
                                </div>

                            </div>
                        @endforeach

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter title">
                            <small id="emailHelp" class="form-text text-muted">Give your questionnaire a title that attracts attention.</small>

                            @error('title')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="purpose">Purpose</label>
                            <input name="purpose" type="text" class="form-control" id="purpose" aria-describedby="purposeHelp" placeholder="Enter Purpose">
                            <small id="purposeHelp" class="form-text text-muted">Give a purpose will increase responses.</small>

                            @error('purpose')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                       <button type="submit" class="btn btn-primary">Create Questionnaire</button>

                    </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
