
function Add(id) {
    var clicks = parseInt(document.getElementById(id).innerHTML);
    clicks += 1;
    document.getElementById(id).innerHTML = clicks;
 };

 function Sub(id) {
    var clicks = parseInt(document.getElementById(id).innerHTML);
    if (clicks > 0) {
       clicks -= 1;
    }
    document.getElementById(id).innerHTML = clicks;
 };

function New() {
    // Save data to db
    Clear();
}

function Clear() {
   document.getElementById('A').innerHTML = 0;
   document.getElementById('B').innerHTML = 0;
}


/*
AJAX - STUFF
*/
$(document).ready(function(){
   $(document).on('click', '#sub_a', function(){
     $.ajax({
       url: 'db.php',
       type: 'POST',
       data: {
         'save': 1,
         'player': 'player_a',
         'point': '-1',
       },
       success: function(response){
         $('#name').val('');
         $('#comment').val('');
         $('#display_area').append(response);
       }
     });
   });
 });
 /******/
 

// check this for charts: https://www.youtube.com/watch?v=5-ptp9tRApM
