function generateLoveImage(name1, name2, lovePercentage) {
    var canvas = document.createElement("canvas");
    canvas.width = 400;
    canvas.height = 200;
    var ctx = canvas.getContext("2d");

    ctx.fillStyle = "pink";
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    ctx.font = "bold 24px Arial";
    ctx.fillStyle = "red";

    var totalTextWidth = ctx.measureText(`${name1} ❤ ${name2}`).width;

    var xCoordinate = (canvas.width - totalTextWidth) / 2;

    ctx.fillText(`${name1} ❤ ${name2}`, xCoordinate, 100);

    ctx.fillStyle = "black";
    ctx.font = "italic 16px Arial";
    var percentageText = `${lovePercentage}%`;
    var textWidth = ctx.measureText(percentageText).width;
    ctx.fillText(percentageText, (canvas.width - textWidth) / 2, 150);

    var base64Image = canvas.toDataURL("image/png");

    return base64Image;
}