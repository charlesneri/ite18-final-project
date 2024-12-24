// JavaScript to toggle the Add Product form visibility

// Select the Add Product button and form elements
const addProductButton = document.getElementById("addProductBtn");
const addProductForm = document.getElementById("addProductForm");
const overlay = document.createElement("div");

// Create and configure the overlay element
overlay.id = "overlay";
overlay.style.display = "none";
document.body.appendChild(overlay);

// Function to show the Add Product form
function showAddProductForm() {
  addProductForm.classList.add("active");
  overlay.classList.add("active");
}

// Function to hide the Add Product form
function hideAddProductForm() {
  addProductForm.classList.remove("active");
  overlay.classList.remove("active");
}

// Event listener to show the form when the button is clicked
addProductButton.addEventListener("click", showAddProductForm);

// Event listener to hide the form when the overlay is clicked
overlay.addEventListener("click", hideAddProductForm);

// Function to open the form
function openForm() {
  document.querySelector(".add-product-form").classList.add("active");
  document.getElementById("overlay").classList.add("active");
}

// Function to close the form
function closeForm() {
  document.querySelector(".add-product-form").classList.remove("active");
  document.getElementById("overlay").classList.remove("active");
}

/* Updated calculateTotal function */
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
  resultDisplay.innerHTML = `
    <span><b>Selling Price:</b> ${finalSellingPrice.toFixed(2)}</span><br>
    <span><b>QTY x Cost Price:</b> ${totalByQuantity.toFixed(2)}</span>
  `;
}

// Add event listeners to input fields and dropdowns
document
  .querySelectorAll("#add-item input, #add-item select")
  .forEach((element) => {
    element.addEventListener("input", calculateTotal);
  });

// Ensure the initial calculation runs on page load
document.addEventListener("DOMContentLoaded", calculateTotal);
