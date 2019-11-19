@extends('setup')
@section('content')
    <div class="container main-table">
        <div class="box">
            <h1 class="title">Guest book Comments</h1>
            @if (count ($comments) > 0)
                <table class="table is-striped is-hoverable">
                    <thead>
                    <tr>
                        <th>User</th>
                        <th>Comment</th>
                        <th>Date</th>
                        <th>Likes</th>
                        <th>Dislikes</th>
                    </tr>
                    </thead>
                    <tr>
                    @foreach ($comments as $c)
{{--declaring the comments--}}
                        <tr>
                            <td>{{ $c -> user }}</td>
                            <td>{{ $c -> comments }}</td>
                            <td>{{ $c -> created_at -> format ('D jS F') }}</td>
                            <td>{{ $c -> likes }}</td>
                            <td>{{ $c -> dislikes }}</td>
                        </tr>

                    <tr class="icon heart">
                        <td><a class="button" href="/comment/{{ $c -> id }}/like/"><ion-icon name="md-heart"></ion-icon></a></td>
                        <td><a class="button" href="/comment/{{ $c -> id }}/dislike/"><ion-icon name="md-heart-empty"></ion-icon></a></td>
                    </tr>
                        @endforeach
                </table>
                {{ $comments -> links () }} {{-- Setting pagination--}}
                        @else
                <div class="notification is-info">
                    <p>
                        The Guest book is empty. Why not add a comment?
                    </p>
                </div>
            @endif
        </div>
    </div>
@endsection
