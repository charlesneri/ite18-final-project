// Calculation logic
function calculateTotal() {
  // Get the values from input fields
  const qty = parseFloat(document.getElementById("qty").value) || 0;
  const costPrice =
    parseFloat(document.getElementById("cost-price").value) || 0;
  const pesoAdd = parseFloat(document.getElementById("peso-add").value) || 0;
  const wholesale = parseFloat(document.getElementById("wholesale").value) || 0;
  const sellingPrice =
    parseFloat(document.getElementById("selling-price").value) || 0;
  const unitPeso = document.getElementById("unit-peso").value;
  const unitWholesale = document.getElementById("unit-wholesale").value;

  // Calculate the final selling price after adding %/Peso
  let finalSellingPrice = sellingPrice;
  if (unitPeso === "percent") {
    finalSellingPrice += sellingPrice * (pesoAdd / 100);
  } else if (unitPeso === "Peso") {
    finalSellingPrice += pesoAdd;
  }

  // Calculate wholesale if selected
  if (unitWholesale && wholesale > 0) {
    if (unitWholesale === "percent") {
      finalSellingPrice += sellingPrice * (wholesale / 100);
    } else if (unitWholesale === "Peso") {
      finalSellingPrice += wholesale;
    }
  }

  // Calculate total based on Quantity and Cost Price
  const totalByQuantity = qty * costPrice;

  // Display results
  const resultDisplay = document.getElementById("result-display");
  resultDisplay.innerHTML = `Selling Price: ${finalSellingPrice.toFixed(
    2
  )} <br> QTY / Cost Price: ${totalByQuantity.toFixed(2)}`;
}

// Event listener for input changes to trigger calculation
document.querySelectorAll("input, select").forEach((element) => {
  element.addEventListener("input", calculateTotal);
});
