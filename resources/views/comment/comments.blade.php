{{--@extends('layout.master)--}}
{{--@section('content')--}}
    <div class="container main-table">
        <div class="box">
            <h1 class="title">Guestbook Comments</h1>
{{--            @if (count ($comments) > 0)--}}
                <table class="table is-striped is-hoverable">
                    <thead>
                    <tr>
                        <th>User</th>
                        <th>Comment</th>
                        <th>Date</th>
                        <th>Likes</th>
                        <th>DisLikes</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($comments as $c)
{{--declaring the comments--}}
                        <tr>
                            <td>{{ $c -> user }}</td>
                            <td>{{ $c -> comments }}</td>
                            <td>{{ $c -> created_at -> format ('D jS F') }}</td>
                            <td>{{ $c -> likes }}</td>
                            <td>{{ $c -> dislikes }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
{{--                {{ $comments -> links() }} {{-- Setting pagination--}}--}}
{{--                        @else--}}
                <div class="notification is-info">
                    <p>
                        The Guestbook is empty. Why not add a comment?
                    </p>
                </div>
{{--            @endif--}}
        </div>
    </div>
{{--@endsection--}}
