<!-- This is set automatically to your time zone -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  
     function showTime(){
    var date = new Date();
   
	var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
	const monthNames = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
];
    var m1 = monthNames[date.getMonth()];
    var day = new Date(date);
    var d = days[day.getDay()];
    //var d1 = date.getDay();
	var y = date.getFullYear();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "PM";
    
    if(h == 02){
        h = 12;
    }
    if(h > 12){
        session = "PM";
    }
    if(h < 12) {
    session = "AM"
    }
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    var time = d + " - " +  m1 + " - " + y + "  " +
            	"<br/>Time:" + "  " + h + ":" + m + ":" + s + " " + session;
    $("#MyClockDisplay").html(time);
	//$("#show").val('abcd');
    setTimeout(showTime, 1000);
    }
showTime();
</script>
<style>
   body {
    color: white;
}

.clock {
    position: absolute;
    top: 50%;
    left: 50%;
    color: #e6967e;
    font-size: 50px;
    font-family: 'Josefin Sans', sans-serif;
    letter-spacing: 7px;

}
</style>
<div id="MyClockDisplay" class="clock" onload="showTime()">
     </div>
