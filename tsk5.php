<!DOCTYPE html>
<html>
<head>
    <title>Lab Task 05 - Text Analyzer</title>
    <style>
        body {
            font-family: Arial;
            background-color: lavender;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: blue;
        }

        textarea {
            width: 100%;
            height: 150px;
            margin-top: 10px;
            padding: 10px;
            border: 2px solid black;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #003366;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0055aa;
        }

        #result {
            margin-top: 20px;
            border: 2px solid black;
            background-color: wheat;
            padding: 15px;
            border-radius: 5px;
        }

        p {
            font-size: 16px;
        }
    </style>
</head>
<body>

    <h1>Text Analyzer Tool</h1>

    <form onsubmit="return false;">
        <textarea id="inputText" placeholder="Paste your text here..."></textarea><br>
        <button onclick="analyzeText()">Analyze Text</button>
    </form>

    <div id="result"></div>

    <script>
        function analyzeText() {
            var text = document.getElementById("inputText").value.trim();

            if (text === "") {
                document.getElementById("result").innerHTML = "<p>Please enter some text.</p>";
                return;
            }

            var charCount = text.length;
            var words = text.split(" ");
            var wordCount = words.length;
            var reversedText = text.split("").reverse().join("");

            document.getElementById("result").innerHTML =
                "<p><b>Total Characters:</b> " + charCount + "</p>" +
                "<p><b>Total Words:</b> " + wordCount + "</p>" +
                "<p><b>Reversed Text:</b> " + reversedText + "</p>";
        }
    </script>

</body>
</html>