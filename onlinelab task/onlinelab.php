<!DOCTYPE html>
<html>
<head>
  <title>Simple Calculator</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f0f8ff;
    }

    .calculator {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }

    #display {
      width: 100%;
      height: 40px;
      margin-bottom: 10px;
      text-align: right;
      padding: 5px;
      font-size: 18px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .buttons {
      display: grid;
      grid-template-columns: repeat(4, 60px);
      gap: 10px;
    }

    button {
      padding: 15px;
      font-size: 18px;
      border: none;
      border-radius: 5px;
      background-color: #003366;
      color: white;
      cursor: pointer;
    }

    button:hover {
      background-color: #0055aa;
    }
  </style>
</head>
<body>
  <div class="calculator">
    <input type="text" id="display" disabled>
    <div class="buttons">
      <button onclick="appendValue('7')">7</button>
      <button onclick="appendValue('8')">8</button>
      <button onclick="appendValue('9')">9</button>
      <button onclick="setOperator('/')">/</button>

      <button onclick="appendValue('4')">4</button>
      <button onclick="appendValue('5')">5</button>
      <button onclick="appendValue('6')">6</button>
      <button onclick="setOperator('*')">*</button>

      <button onclick="appendValue('1')">1</button>
      <button onclick="appendValue('2')">2</button>
      <button onclick="appendValue('3')">3</button>
      <button onclick="setOperator('-')">-</button>

      <button onclick="appendValue('0')">0</button>
      <button onclick="clearDisplay()">C</button>
      <button onclick="calculate()">=</button>
      <button onclick="setOperator('+')">+</button>
    </div>
  </div>

  <script>
    let num1 = "";
    let num2 = "";
    let operator = "";

    function appendValue(val) {
      let display = document.getElementById("display");
      display.value += val;

      if (operator === "") {
        num1 += val;
      } else {
        num2 += val;
      }
    }

    function setOperator(op) {
      operator = op;
      document.getElementById("display").value += op;
    }

    function clearDisplay() {
      document.getElementById("display").value = "";
      num1 = "";
      num2 = "";
      operator = "";
    }

    function calculate() {
      let result = 0;

      if (operator === "+") {
        result = parseFloat(num1) + parseFloat(num2);
      } else if (operator === "-") {
        result = parseFloat(num1) - parseFloat(num2);
      } else if (operator === "*") {
        result = parseFloat(num1) * parseFloat(num2);
      } else if (operator === "/") {
        result = parseFloat(num1) / parseFloat(num2);
      }

      document.getElementById("display").value = result;
      num1 = result.toString();
      num2 = "";
      operator = "";
    }
  </script>
</body>
</html>