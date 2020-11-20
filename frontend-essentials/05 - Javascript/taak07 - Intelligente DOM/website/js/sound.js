let poster1 = document.querySelector("#poster1");
let poster2 = document.querySelector("#poster2");
let poster3 = document.querySelector("#poster3");

poster1.addEventListener("mousedown", playSound);
poster2.addEventListener("mousedown", playSound);
poster3.addEventListener("mousedown", playSound);

let audiofiles = document.querySelectorAll("audio");

function playSound(event){
    let audio = this.querySelector("audio");
    
    audiofiles.forEach(audioP=> {
        audioP.pause();
    });
    
    audio.currentTime = 0;
    audio.play();
}