@extends('layout')
@section('content')
    <div class="create-blank">
        <h1 style="text-align: center;">{{ $test->name }}</h1>

        <form action="{{ route('test.save-result', $test->id) }}" method="post">
            <input type="hidden" name="test_id" value="{{ $test->id }}">
            @csrf
            @foreach ($questions as $question)
                <li class="test_question">
                    <h3 style="margin-bottom: 10px;">{{ $question->question }}</h3>
                    <p>1: <input type="radio" name="question_{{ $question->id }}"
                                 value="1">{{ $question->answer_1 }}</p>
                    <p>2: <input type="radio" name="question_{{ $question->id }}"
                                 value="2">{{ $question->answer_2 }}</p>
                    <p>3: <input type="radio" name="question_{{ $question->id }}"
                                 value="3">{{ $question->answer_3 }}</p>
                    <p>4: <input type="radio" name="question_{{ $question->id }}"
                                 value="4">{{ $question->answer_4 }}</p>
                </li>
            @endforeach

            <input class="create-button" type="submit" value="Узнать свой результат">
        </form>
    </div>
@endsection
