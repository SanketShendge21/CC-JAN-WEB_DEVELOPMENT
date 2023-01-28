console.log("Welcome to apple music");
let audioElement = new Audio('songs/1.mp3');

let songIndex = 0;
let masterPlay = document.getElementById('masterPlay');
let myProgressBar =  document.getElementById('myProgressBar');
let gif = document.getElementById('playGif');
let songItem = Array.from(document.getElementsByClassName('songItem'));
let masterSongName = document.getElementById('masterSongName');



let songs = [
    {songName: "Imagine Dragons - Believer", filePath:"songs/believer.mp3", coverPath:"covers/believer.jpg",duration:"03:36"},
    {songName: "Neffex - Cold", filePath:"songs/Cold.mp3", coverPath:"covers/cold.jpg",duration:"03:06"},
    {songName: "Alan Walker - Faded", filePath:"songs/Faded.mp3", coverPath:"covers/faded.png",duration:"03:32"},
    {songName: "Neffex - Coming For You", filePath:"songs/Coming For You.mp3", coverPath:"covers/comingforyou.jpg",duration:"03:15"},
    {songName: "Sun Urban - Cradles", filePath:"songs/Cradles.mp3", coverPath:"covers/cradles.jpg",duration:"03:29"},
    {songName: "Lost Sky - Fearless", filePath:"songs/Fearless.mp3", coverPath:"covers/fearless.jpg",duration:"03:14"},
    {songName: "Legends Never Die", filePath:"songs/Legends Never Die.mp3", coverPath:"covers/legendsneverdie.jpg",duration:"03:54"},
    {songName: "Melanie Martinez - Play Date", filePath:"songs/Playdate.mp3", coverPath:"covers/playdate.jpg",duration:"02:59"},
    {songName: "Shaed - Trampoline", filePath:"songs/Trampoline.mp3", coverPath:"covers/trampoline.png",duration:"03:05"},
    {songName: "Carryminati - Yalgaar", filePath:"songs/Yalgaar.mp3", coverPath:"covers/yalgaar.jpg",duration:"03:15"},
];

songItem.forEach((element,i)=>{
    console.log(element,i);
    element.getElementsByTagName("img")[0].src = songs[i].coverPath;
    element.getElementsByClassName("songName")[0].innerText = songs[i].songName;
    element.getElementsByClassName("timestamp")[0].innerText = songs[i].duration;
});

// audioElement.play(); 

masterPlay.addEventListener('click',()=>{
    if(audioElement.paused || audioElement.currentTime<=0)
    {
        audioElement.play();
        masterPlay.classList.remove('fa-circle-play');
        masterPlay.classList.add('fa-circle-pause');
        gif.style.opacity = 1;
    }
    else
    {
        audioElement.pause();
        masterPlay.classList.remove('fa-circle-pause');
        masterPlay.classList.add('fa-circle-play');
        gif.style.opacity = 0;
        makeAllPlays();
    }
});

audioElement.addEventListener('timeupdate',()=>{
    let progress = parseInt((audioElement.currentTime/audioElement.duration)*100);
    myProgressBar.value = progress;
});

myProgressBar.addEventListener('change',()=>{
    audioElement.currentTime = (myProgressBar.value * audioElement.duration)/100;
});

const makeAllPlays = () =>{
    Array.from(document.getElementsByClassName("songItemPlay")).forEach((element)=>{
        element.classList.remove('fa-circle-pause');
        element.classList.add('fa-circle-play');
    });
}

Array.from(document.getElementsByClassName("songItemPlay")).forEach((element)=>{
    element.addEventListener('click',(e)=>{
        makeAllPlays();
        songIndex = parseInt(e.target.id);
        e.target.classList.remove('fa-circle-play');
        e.target.classList.add('fa-circle-pause');
        audioElement.src = `songs/${songIndex+1}.mp3`;
        masterSongName.innerText = songs[songIndex].songName;
        audioElement.currentTime = 0;
        audioElement.play();
        gif.style.opacity = 1;
        masterPlay.classList.remove('fa-circle-play');
        masterPlay.classList.add('fa-circle-pause');
    });
});



document.getElementById('next').addEventListener('click',()=>{
    if (songIndex >=9) {
        songIndex = 0;
    }
    else
    {
        songIndex += 1;
    }
    audioElement.src = `songs/${songIndex+1}.mp3`;
    masterSongName.innerText = songs[songIndex].songName;
    audioElement.currentTime = 0;
    audioElement.play();
    masterPlay.classList.remove('fa-circle-play');
    masterPlay.classList.add('fa-circle-pause');
});

document.getElementById('previous').addEventListener('click',()=>{
    if (songIndex <= 0) {
        songIndex = 0;
    }
    else
    {
        songIndex -= 1;
    }
    audioElement.src = `songs/${songIndex+1}.mp3`;
    masterSongName.innerText = songs[songIndex].songName;
    audioElement.currentTime = 0;
    audioElement.play();
    masterPlay.classList.remove('fa-circle-play');
    masterPlay.classList.add('fa-circle-pause');
});