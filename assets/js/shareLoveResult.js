function shareLoveResult() {
    var loveImage = document.getElementById("loveImage").src;

    fetch("upload.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
        },
        body: "image=" + encodeURIComponent(loveImage),
    })
        .then(response => response.json())
        .then(data => {
            var imageUrl = window.location.origin + '/archive/lovecalculator/' + data.filePath;

            document.getElementById("loveImage").src = imageUrl;

            if (navigator.share) {
                navigator.share({
                    // haal deze weg en kijk of die nog werkt
                    title: "Love Test Result",
                    text: "Check out our love test result!",
                    url: imageUrl,
                })
                    .then(() => console.log("Shared successfully"))
                    .catch((error) => console.error("Error sharing:", error));
            } else {
                alert("Sharing is not supported on this browser.");
            }
        })
        .catch(error => console.error("Error uploading image:", error));
}