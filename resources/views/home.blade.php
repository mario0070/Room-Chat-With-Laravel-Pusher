@extends("layouts.layout")

@section("content")

  <div class="container" id="container">
    <div class="header">
      <h2>Join Conversation {{session("username")}}</h2>
    </div>

    <div class="msgBody" id="msgBody">

      <div class="wrap1">
        <div>
            <div class="msgBodys">
                <p>lol message Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium impedit nihil eligendi, voluptatem ut nam eaque facere deserunt, quis odit fugiat ex reiciendis, molestiae dignissimos quibusdam aspernatur consectetur sed earum?</p>
                <div class="time">{{session("username")}}</div>
            </div> 
        </div>
      </div>
      

    </div>

    <div class="form">
      <form method="POST" id="formSubmit" class="formSubmit">
        @csrf
        <input type="text" id="name"><br><br>
        <button id="submit">Send</button>
      </form>
    </div> 

  </div>


@endsection