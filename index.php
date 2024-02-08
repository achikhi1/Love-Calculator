<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love Calculator</title>

    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/loading.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>

    <script defer src="./assets/js/loader.js"></script>

    <script defer src="./assets/js/calculateLove.js"></script>
    <script defer src="./assets/js/displayLoveResult.js"></script>
    <script defer src="./assets/js/generateLoveImage.js"></script>
    <script defer src="./assets/js/generateLovePercentage.js"></script>
    <script defer src="./assets/js/shareLoveResult.js"></script>

    <script defer src="./assets/js/sounds.js"></script>

</head>

<body>

    <button onclick="location.reload()">reload</button>
    <audio id="backgroundAudio" src="./assets/sounds/background.mp3" loop autoplay></audio>

    <script>
        var audio = document.getElementById("backgroundAudio");
        audio.volume = 0.09;
    </script>

    <div id="loadingDiv" style="opacity: 0;">
        <div class="loading">
            <i class="fa fa-heart fa-4x heart loading-logo"></i>
        </div>
    </div>

    <div id="mainContent" style="opacity: 1;">
        <h1>Love Calculator</h1>

        <div id="loveForm">
            <label for="name1">Name 1:</label>
            <input type="text" id="name1" required>

            <label for="name2">Name 2:</label>
            <input type="text" id="name2" required>

            <button type="button" onclick="calculateLove(); clickEffect.play()">Calculate Love</button>
            <button id="shareButton" onclick="shareLoveResult(); clickEffect.play()">Share</button>
        </div>

        <div id="result">
            <p id="heart">&#10084;</p>
            <p id="lovePercentage"></p>
            <div id="loveImageContainer" style="display: none;">
                <img id="loveImage" alt="Love Image">
            </div>
        </div>

    </div>

</body>

</html>