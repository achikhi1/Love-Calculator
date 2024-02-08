function generateLovePercentage(name1, name2) {
    var hash = 0;
    for (var i = 0; i < name1.length; i++) {
        hash += name1.charCodeAt(i);
    }
    for (var j = 0; j < name2.length; j++) {
        hash += name2.charCodeAt(j);
    }

    var lovePercentage = hash % 101;
    loader()
    return lovePercentage;
}