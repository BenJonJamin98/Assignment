@extends('setup')
@section('page_title')
@endsection
@section('page_heading')
    <h2>Guestbook Comments</h2>
@endsection
@section('content')
    <form action="/comment/{{ $comment -> id }}/edit/" method="POST">
        <fieldset>
            @csrf
            <label for="user">User</label>
            <input id="user" class="input" type="text" placeholder="" value="{{ $comment -> user }}" readonly>
            <label for="date">Date</label>
            <input id="date" class="input" type="text" placeholder="" value="{{ $comment -> created_at }}" readonly>
            <label for="comments">Comments</label>
            <input id="comments" name="comment" class="input" type="text" placeholder="" value="{{ $comment -> comments }}" autofocus>

            <button type="submit">Save Your Changes</button>
        </fieldset>
    </form>

{{--    {{dd($comment)}}--}}
@endsection
