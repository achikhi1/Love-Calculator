function displayLoveResult(name1, name2, lovePercentage) {
    var heartElement = document.getElementById("heart");
    var lovePercentageElement = document.getElementById("lovePercentage");
    var loveImageContainer = document.getElementById("loveImageContainer");

    heartElement.innerText = `${name1} ❤ ${name2}`;
    lovePercentageElement.innerText = `Love Percentage: ${lovePercentage}%`;

    var loveImageSrc = generateLoveImage(name1, name2, lovePercentage);
    document.getElementById("loveImage").src = loveImageSrc;

    loveImageContainer.style.display = "block";
    document.getElementById("shareButton").style.opacity = 1;
}