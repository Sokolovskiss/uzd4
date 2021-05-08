function showMore(){
    var hiddenGrid = document.getElementsByClassName("hidden");
    var showMoreBut = document.getElementById("showMoreButton");
    var i;     
    for (i = 0; i < hiddenGrid.length; i++){
        hiddenGrid[i].style.display = 'block';
    }   
    showMoreBut.style.display = 'none';
}


function playVid(v, b){
	var playBut = document.getElementById(b);
	var vid = document.getElementById(v);
	
	if(vid.paused == true){
		vid.play();
		playBut.style.display = 'none';
		vid.controls = true;
	}else{
		vid.pause();
	}
}


$(document).ready(function() {
  resize_to_fit();
});

function resize_to_fit() {
  var fontsize = $('.imgText').css('font-size');
  $('div#outer div').css('fontSize', parseFloat(fontsize) - 1);

  if ($('div').height() >= $('div').height()) {
    resize_to_fit();
  }
}