<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>caser site</title>
    <link rel="stylesheet" href="/botsrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/casher.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />
  </head>
  <body>
    <header>
      <nav class="navbar">
        <div class="container-fluid">
          <div class="group-center">
            <img src="/logo123.png" class="logo" alt="logo" />
            <h1 class="pos">POS SYSTEM</h1>
            <br />
            <span class="casher">Casher Name:</span>
            <span class="namedrop">Charles Neri</span
            ><!--dri mugawas ang name sacasher once makalogin-->
          </div>

          <div class="dropdown">
            <button type="menu" class="dropbtn float-end">
              <i class="fa-solid fa-bars"></i>
            </button>
            <div class="dropdown-content">
              <a href="#" id="addProductLink">Add product</a>
              <a href="/html/log-in.html">Log-out</a>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <section>
        <div class="container-fluid holder">
          <div class="item col-1">
            <label for="search" role="search" id="search"></label>
            <input type="search" name="" id="search" />
            <button type="button" id="search-btn">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
            <button type="button" id="zooom">
              <i class="fa-solid fa-maximize"></i>
            </button>
          </div>
          <div class="item col-2">
            <table class="tables">
              <thead>
                <tr class="prods-head">
                  <th class="prod">Item</th>
                  <th class="prod">Stock before purchase</th>
                  <th class="prod">stock after purchace</th>
                  <th class="prod">QTY</th>
                  <th class="prod">Price</th>
                  <th class="prod">Total</th>
                </tr>
              </thead>
            </table>
          </div>
          <div class="item row-cols-1"></div>
          <div class="item row-cols-2">
            
             
              <div id="paybtns">
                <form action="" method="get"></form>
                <div class="total">Total: <span id="total">0</span></div>
                <div class="buttons-pay">
                  <label for="code-entry" name="code-entry"></label>
                  <input type="text" id="code-entry" placeholder="Enter barcode">
              
                  <div class="pay-cancel">
                    <button class="cancel" id="cancelButton">Cancel</button>
                    <button class="pay" id="payButton">Pay</button>
                  </div>
                </div>
              </div>
              
            </div>
          </div>

          <!-- Add Product Form (Hidden initially) -->
<div class="add-product-form" id="addProductForm">
  <h1>Add Products</h1>
  <div class="drag">
    <form action="" method="post" id="add-item">
      <!-- Serial No., Product Name, and Category -->
      <div class="drags">
        <label class="dragon" for="serial-no">Serial No.</label>
        <input type="text" id="serial-no" placeholder="Serial No." />
      </div>

      <div class="drags">
        <label class="dragon" for="prod-name">Product Name</label>
        <input type="text" id="prod-name" placeholder="Product Name" />
      </div>

      <div class="drags">
        <label class="dragon" for="category">Category</label>
        <input type="text" id="category" placeholder="Enter Category" />
      </div>

      <!-- Quantity and Unit -->
      <div class="drags">
        <label class="dragon" for="qty">Quantity</label>
        <input type="number" id="qty" class="size" placeholder="Quantity" />
      </div>

      <div class="drags">
        <label class="dragon" for="unit">Unit</label>
        <select name="unit" id="unit">
          <option value="title" disabled selected>Unit</option>
          <option value="kilogram">Kilogram</option>
          <option value="grams">Grams</option>
          <option value="pieces">Pieces</option>
        </select>
      </div>

      <!-- Cost Price -->
      <div class="drags">
        <label class="dragon" for="cost-price">Cost Price/Upon Purchase</label>
        <input type="number" id="cost-price" class="size" placeholder="Enter Cost Price" />
      </div>

      <!-- Peso Added -->
      <div class="drags">
        <label class="dragon" for="peso-add">%/Peso Added</label>
        <input type="number" id="peso-add" class="size" placeholder="Enter % or Peso Added" />
      </div>

      <div class="drags">
        <label class="dragon" for="unit-peso">Unit</label>
        <select name="unit-peso" id="unit-peso">
          <option value="" disabled selected>Unit</option>
          <option value="Peso">Peso</option>
          <option value="percent">Percent</option>
        </select>
      </div>

      <!-- Selling Price -->
      <div class="drags">
        <label class="dragon" for="selling-price">Selling Price</label>
        <input type="number" id="selling-price" class="size" placeholder="Enter Selling Price" />
      </div>

      <div class="drags">
        <label class="dragon" for="unit-sell">Unit</label>
        <select name="unit-sell" id="unit-sell">
          <option value="title" disabled selected>Unit</option>
          <option value="kilogram">Kilogram</option>
          <option value="grams">Grams</option>
          <option value="pieces">Pieces</option>
        </select>
      </div>

      <!-- Wholesale -->
      <div class="drags">
        <label class="dragon" for="wholesale">%/Peso Added Wholesale</label>
        <input type="number" id="wholesale" class="size" placeholder="Enter Wholesale % or Peso Added" />
      </div>

      <div class="drags">
        <label class="dragon" for="unit-wholesale">Unit</label>
        <select name="unit-wholesale" id="unit-wholesale">
          <option value="" disabled selected>Unit</option>
          <option value="Peso">Peso</option>
          <option value="percent">Percent</option>
        </select>
      </div>

      <!-- Barcode -->
      <div class="drags mybar">
        <label class="dragon" for="bar" class="scan">Bar Code</label>
        <input type="number" id="bar" class="size" placeholder="Enter Bar Code" />
        <button type="button" id="scan">
          <i class="fa-solid fa-camera"></i> Scan
        </button>
      </div>

      <!-- Total Display and Calculate Button -->
      <div class="drags1">
        <div id="result-display"><span>Total: </span></div>
      </div>

      <button type="submit" class="btn btn-primary float-end">Submit</button>
    </form>
  </div>
</div>



        </div>
      </section>
    </main>
    <script src="/js/casher-addp-prod.js"></script>
  </body>
</html>