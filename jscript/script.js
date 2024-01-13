function calculateBill() {
    const customerName = document.getElementById('customerName').value;
    const unitsConsumed = parseFloat(document.getElementById('unitsConsumed').value);
    
    const ratePerUnit = 10; // Change this rate as per your requirement
    
    const totalBill = unitsConsumed * ratePerUnit;
    
    const billResult = `Dear ${customerName}, your total bill amount is $${totalBill.toFixed(2)}.`;
    
    document.getElementById('billResult').textContent = billResult;
  }
  