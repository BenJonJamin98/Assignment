@extends('setup')
@section('page_title')
    Guestbook
@endsection
@section('page_heading')
    <h2>Guestbook Comments</h2>
@endsection
@section('content')
{{--    <a class="button" href="/comment/create/"><ion-icon name="create"></ion-icon></a>--}}
@if (count ($comments) > 0)
                <table class="table is-striped is-hoverable">
                    <thead>
                    <tr>
                        <th><h4>User</h4></th>
                        <th><h4>Comment</h4></th>
                        <th><h4>Date</h4></th>
                        <th><h4>Likes</h4></th>
                        <th><h4>Dislikes</h4></th>
                    </tr>
                    </thead>
                    <tr>
                    @foreach ($comments as $c)
                        <tr>
                            <td><p>{{ $c -> user }}</p></td>
                            <td><p>{{ $c -> comments }}</p></td>
                            <td><p>{{ $c -> created_at -> format ('D jS F') }}</p></td>
                            <td><p>{{ $c -> likes }}</p></td>
                            <td><p>{{ $c -> dislikes }}</p></td>
                        </tr>

                    <tr class="icon heart">
                        <td><a class="button" href="/comment/{{ $c -> id }}/"><ion-icon name="eye"></ion-icon></a></td>
                        <td><a class="button" href="/comment/{{ $c -> id }}/edit/"><ion-icon name="create"></ion-icon></a></td>
                        <td><a class="button" href="/comment/{{ $c -> id }}/delete/"><ion-icon name="trash"></ion-icon></a></td>
                        <td><a class="button" href="/comment/{{ $c -> id }}/like/"><ion-icon name="md-heart"></ion-icon></a></td>
                        <td><a class="button" href="/comment/{{ $c -> id }}/dislike"><ion-icon name="md-heart-empty"></ion-icon></a></td>
                    </tr>
                        @endforeach
                </table>
                {{ $comments -> links () }}
                        @else
                <div class="notification is-info">
                    <p>
                        The Guest book is empty. Why not add a comment?
                    </p>
                </div>
            @endif

{{--{{ dd($comments) }}--}}
@endsection
