function playVideo(){
	playButton = document.getElementById("playBut");
	video = document.getElementById("vidPlayer");
	if(video.paused == true){
		video.play();
		playButton.style.display = 'none';
		video.controls = true;
	}else{
		video.pause();
	}
}