document.getElementById("formSubmit").addEventListener("submit",(e)=>{
    e.preventDefault()
})



// append msg to the older msg
$(document).ready(()=>{
    var usernames = document.getElementById("name")

    $("#submit").on("click",()=>{ 
        $("#msgBody").scrollTop($(".container").height());
        usernames.value = ""
    })
})


// Enable pusher logging - don't include this in production
Pusher.logToConsole = true;
var pusher = new Pusher('ebcde4d7cdc47832ba13', {
  cluster: 'mt1'
});

var channel = pusher.subscribe('my-channel');
channel.bind('jamiuEvent', function(data) {
//   alert(JSON.stringify(data.data));
  $("#msgBody").append(`
    <div class="wrap1">
    <div class="">
        <div class="msgBodys">
            <p>${data.data}</p>
            <div class="time">3:03 AM</div>
        </div>
    </div>
    </div>`)

  $("#msgBody").scrollTop($(".container").height());
});



// send post request with axios
var http = window.axios;
var submitBtn = document.getElementById("submit")
var usernames = document.getElementById("name")
submitBtn.addEventListener("click",()=>{
    http.post("/",{
        names : usernames.value
    })
})


$(() => {
    $("#msgBody").scrollTop($("#msgBody").height()); 
});
