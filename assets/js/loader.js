function playSound(){
    revealEffect.play()
}

function timeOut(){
    document.getElementById("loadingDiv").style.opacity = 0;
    document.getElementById("mainContent").style.opacity = 1;
    setTimeout(playSound,25)
}

function loader(){
    document.getElementById("loadingDiv").style.opacity = 1;
    document.getElementById("mainContent").style.opacity = 0;
    setTimeout(timeOut,3000)
}