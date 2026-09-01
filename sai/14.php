<!DOCTYPE html>
<html>
<head>
    <title>Circle Calculator</title>
</head>
<body>

    <h2>Circle Calculator</h2>

    <label>Enter Radius:</label>
    <input type="number" id="radius">

    <button onclick="calculate()">Calculate</button>

    <p id="result"></p>

    <script>
        function calculate() {
            let r = parseFloat(document.getElementById("radius").value);

            let circumference = 2 * Math.PI * r;
            let area = Math.PI * r * r;

            document.getElementById("result").innerHTML =
                "Circumference = " + circumference.toFixed(2) +
                "<br>Area = " + area.toFixed(2);
        }
    </script>

</body>
</html>
