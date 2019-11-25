@extends('setup')
@section('page_title')
    Guestbook | Comment from {{ $comment -> user }}
@endsection
@section('page_heading')
    <h2>{{$comment -> user }} comments</h2>
@endsection
@section('content')
    <table>
        <tbody>
{{--            <tr>--}}
{{--                <td>Name: </td>--}}
{{--                <td>{{ $comment -> user }}</td>--}}
{{--            </tr>--}}
        <tr>
            <td><h4>Comment: </h4></td>
            <td><p>{{ $comment -> comments }}</p></td>
        </tr>
        <tr>
            <td><h6>Date: </h6></td>
            <td><h6>{{ $comment -> created_at -> format ('l jS F') }}</h6></td>
        </tr>
        </tbody>
    </table>
    <div class="back-button">
        <p><a class="button" href="/">Back</a></p>
    </div>
@endsection
