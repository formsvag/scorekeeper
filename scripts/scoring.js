
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

/*
  Function to save previous week/session to db
 */
function New() {
    // Save data to db
    Clear();
}

function Clear() {
   document.getElementById('A').innerHTML = 0;
   document.getElementById('B').innerHTML = 0;
}