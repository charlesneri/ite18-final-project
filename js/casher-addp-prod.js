// Wait for the DOM to be fully loaded before running the script
document.addEventListener("DOMContentLoaded", function () {
    // Get the 'Add Product' link and the form
    const addProductLink = document.getElementById("addProductLink");
    const addProductForm = document.getElementById("addProductForm");
  
    // Add an event listener to the 'Add Product' link
    addProductLink.addEventListener("click", function (e) {
      e.preventDefault(); // Prevent the link from navigating
      
      // Toggle the visibility of the Add Product form
      if (addProductForm.style.display === "none" || addProductForm.style.display === "") {
        addProductForm.style.display = "block"; // Show the form
      } else {
        addProductForm.style.display = "none"; // Hide the form
      }
    });
  });
  