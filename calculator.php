<div id="calculator">
  <div class="display" id="result">0</div>

  <div class="inputs">
    <input id="num1" type="number" placeholder="First">
    <select id="operator">
      <option value="+">+</option>
      <option value="-">−</option>
      <option value="*">×</option>
      <option value="/">÷</option>
    </select>
    <input id="num2" type="number" placeholder="Second">
  </div>

  <div class="buttons">
    <button class="clear" onclick="clearCalc()">C</button>
    <button class="equal" onclick="calculate()">=</button>
  </div>
</div>
