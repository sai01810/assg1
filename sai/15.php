<!DOCTYPE html>
<html>
<head>
    <title>Student Grade</title>
</head>
<body>

    <h2>Calculate Student Grade</h2>

    <label>Enter Marks (out of 1000): </label>
    <input type="number" id="marks">
    <button onclick="calculateGrade()">Calculate</button>

    <p id="result"></p>

    <script>
        function calculateGrade() {
            let marks = Number(document.getElementById("marks").value);
            let result = "";

            if (marks > 800 && marks <= 1000) {
                result = "Class I";
            }
            else if (marks > 600 && marks <= 800) {
                result = "Class II";
            }
            else if (marks > 400 && marks <= 600) {
                result = "Class III";
            }
            else if (marks >= 0 && marks <= 400) {
                result = "Fail";
            }
            else {
                result = "Invalid marks";
            }

            document.getElementById("result").innerHTML = "Grade: " + result;
        }
    </script>

</body>
</html>
