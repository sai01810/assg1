<!DOCTYPE html>
<html>
<head>
    <title>Word Counter</title>
</head>
<body>

<h2>Count Search Word</h2>

<label>Enter Paragraph:</label><br>
<textarea id="paragraph" rows="6" cols="50"></textarea><br><br>

<label>Enter Search Word:</label><br>
<input type="text" id="searchWord"><br><br>

<button onclick="countWord()">Count Word</button>

<p id="result"></p>

<script>
function countWord() {
    let paragraph = document.getElementById("paragraph").value;
    let word = document.getElementById("searchWord").value.trim();

    if (word === "") {
        document.getElementById("result").innerHTML =
            "Please enter a search word.";
        return;
    }

    // Escape special characters and search whole words, ignoring case
    let pattern = new RegExp("\\b" + word.replace(/[.*+?^${}()|[\]\\]/g, '\\$&') + "\\b", "gi");
    let matches = paragraph.match(pattern);

    let count = matches ? matches.length : 0;

    document.getElementById("result").innerHTML =
        "The word <b>" + word + "</b> occurs " + count + " time(s).";
}
</script>

</body>
</html>
