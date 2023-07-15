@extends("layouts.layout")

@section("content")
    <div class="login" id="login">
        <h1>Choose a temporary Username to Join the Room.</h1>
        <form id="formJoinRoom" action="{{route("login")}}" method="post">
        @csrf
        <input type="text" name="username" id="username" placeholder="Choose Your Username"><br>
        <button id="joinRoom">Join Room</button>
        </form>
    </div>
@endsection