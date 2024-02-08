<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love Calculator</title>

    <link rel="stylesheet" href="./assets/css/styles.css">

    <script defer src="./assets/js/calculateLove.js"></script>
    <script defer src="./assets/js/displayLoveResult.js"></script>
    <script defer src="./assets/js/generateLoveImage.js"></script>
    <script defer src="./assets/js/generateLovePercentage.js"></script>
    <script defer src="./assets/js/shareLoveResult.js"></script>

</head>

<body>
    <h1>Love Calculator</h1>

    <div id="loveForm">
        <label for="name1">Name 1:</label>
        <input type="text" id="name1" required>

        <label for="name2">Name 2:</label>
        <input type="text" id="name2" required>

        <button type="button" onclick="calculateLove()">Calculate Love</button>
        <button id="shareButton" onclick="shareLoveResult()">Share</button>
    </div>

    <div id="result">
        <p id="heart">&#10084;</p>
        <p id="lovePercentage"></p>
        <div id="loveImageContainer" style="display: none;">
            <img id="loveImage" alt="Love Image">
        </div>
    </div>

</body>

</html>