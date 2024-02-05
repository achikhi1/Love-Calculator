<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love Tester</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }

        #loveForm {
            margin-bottom: 20px;
        }

        #heart {
            font-size: 48px;
            color: red;
        }
    </style>
</head>
<body>
    <h1>Love Tester</h1>

    <form id="loveForm">
        <label for="name1">Name 1:</label>
        <input type="text" id="name1" required>

        <label for="name2">Name 2:</label>
        <input type="text" id="name2" required>

        <button type="button" onclick="calculateLove()">Calculate Love</button>
    </form>

    <div id="result">
        <p id="heart">&#10084;</p>
        <p id="lovePercentage"></p>
    </div>

    <script>
        function calculateLove() {
            var name1 = document.getElementById("name1").value.trim();
            var name2 = document.getElementById("name2").value.trim();

            if (name1 === "" || name2 === "") {
                alert("Please enter both names.");
                return;
            }

            var lovePercentage = generateLovePercentage(name1, name2);

            document.getElementById("lovePercentage").innerText = `Love Percentage: ${lovePercentage}%`;
        }

        function generateLovePercentage(name1, name2) {
            var hash = 0;
            for (var i = 0; i < name1.length; i++) {
                hash += name1.charCodeAt(i);
            }
            for (var j = 0; j < name2.length; j++) {
                hash += name2.charCodeAt(j);
            }

            var lovePercentage = hash % 101;
            return lovePercentage;
        }
    </script>
</body>
</html>
