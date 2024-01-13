<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Electricity Billing System</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <header>
    <h1>Electricity Billing System</h1>
  </header>
  
  <main>
    <form id="billingForm">
      <label for="customerName">Customer Name:</label>
      <input type="text" id="customerName" name="customerName" required><br><br>
      
      <label for="unitsConsumed">Units Consumed:</label>
      <input type="number" id="unitsConsumed" name="unitsConsumed" required><br><br>
      
      <button type="button" onclick="calculateBill()">Calculate Bill</button>
    </form>
    
    <div id="billResult"></div>
  </main>

  <script src="../jscript/script.js"></script>
</body>
</html>
