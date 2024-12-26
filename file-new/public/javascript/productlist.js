document.addEventListener("DOMContentLoaded", function () {
  const addProductBtn = document.getElementById("addProductBtn");
  const addProductForm = document.getElementById("addProductForm");
  const exitButton = document.querySelector(".exit-button"); // Select the exit button

  // Toggle the Add Product Form
  addProductBtn.addEventListener("click", function (e) {
    e.preventDefault();
    addProductForm.style.display =
      addProductForm.style.display === "block" ? "none" : "block";
  });

  // Exit button functionality to close the form
  exitButton.addEventListener("click", function (e) {
    e.preventDefault();
    addProductForm.style.display = "none"; // Hide the form
  });

  // Calculate Total Function
  function calculateTotal() {
    // Get values from input fields
    const qty = parseFloat(document.getElementById("qty").value) || 0;
    const costPrice =
      parseFloat(document.getElementById("cost-price").value) || 0;
    const pesoAdd = parseFloat(document.getElementById("peso-add").value) || 0;
    const wholesale =
      parseFloat(document.getElementById("wholesale").value) || 0;
    const sellingPrice =
      parseFloat(document.getElementById("selling-price").value) || 0;
    const unitPeso = document.getElementById("unit-peso").value;
    const unitWholesale = document.getElementById("unit-wholesale").value;

    // Calculate the final selling price
    let finalSellingPrice = sellingPrice;
    if (unitPeso === "percent") {
      finalSellingPrice += sellingPrice * (pesoAdd / 100);
    } else if (unitPeso === "Peso") {
      finalSellingPrice += pesoAdd;
    }

    // Apply wholesale calculations
    if (unitWholesale === "percent") {
      finalSellingPrice += finalSellingPrice * (wholesale / 100);
    } else if (unitWholesale === "Peso") {
      finalSellingPrice += wholesale;
    }

    // Calculate total by quantity
    const totalByQuantity = qty * costPrice;

    // Display results
    const resultDisplay = document.getElementById("result-display");
    resultDisplay.innerHTML = `
      <span><b>Selling Price:</b> ${finalSellingPrice.toFixed(2)}</span><br>
      <span><b>QTY x Cost Price:</b> ${totalByQuantity.toFixed(2)}</span>
    `;
  }

  // Attach input event listeners to form elements
  document
    .querySelectorAll("#add-item input, #add-item select")
    .forEach((element) => {
      element.addEventListener("input", calculateTotal);
    });

  // Initial calculation on page load
  calculateTotal();
});
