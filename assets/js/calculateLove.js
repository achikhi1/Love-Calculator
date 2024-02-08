function calculateLove() {
    var name1 = document.getElementById("name1").value.trim();
    var name2 = document.getElementById("name2").value.trim();

    if (name1 === "" || name2 === "") {
        alert("Please enter both names.");
        return;
    }

    var lovePercentage = generateLovePercentage(name1, name2);
    displayLoveResult(name1, name2, lovePercentage);
}