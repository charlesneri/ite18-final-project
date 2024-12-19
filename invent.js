    document.addEventListener('DOMContentLoaded', function () {

        const form = document.getElementById('form-prod');
        form.addEventListener('submit', function (event) {
          event.preventDefault();  

          const productName = document.getElementById('prod-name').value;
          const category = document.getElementById('category').value;
          const costPrice = document.getElementById('cost-price').value;
          const sellingPrice = document.getElementById('selling-price').value;
          const wholesale = document.getElementById('wholesale').value;
          const qty = document.getElementById('qty').value;

          if (!productName || !category || !costPrice || !sellingPrice || !wholesale || !qty) {
            alert("Please fill out all fields!");
            return;
          }

          console.log('Product added:', {
            productName,
            category,
            costPrice,
            sellingPrice,
            wholesale,
            qty
          });

          alert('Product added successfully!');

          form.reset();
        });

        const fileInput = document.getElementById('add-file');
        fileInput.addEventListener('change', function () {
          const fileName = fileInput.files[0]?.name;
          if (fileName) {
            console.log('Selected file:', fileName);
            alert('You selected: ' + fileName);
          }
        });

        const cancelButton = document.getElementById('cancel');
        cancelButton.addEventListener('click', function () {
          if (confirm('Are you sure you want to cancel?')) {
            window.location.href = '/html/inventory.html';  
          }
        });

        const searchInput = document.getElementById('search');
        searchInput.addEventListener('input', function () {
          const searchTerm = searchInput.value.trim();
          console.log('Search term:', searchTerm);
        });

        const scanButton = document.getElementById('scan');
        scanButton.addEventListener('click', function () {
          alert('Simulating barcode scan... (This can be extended to use a real scanner)');
        });

      });