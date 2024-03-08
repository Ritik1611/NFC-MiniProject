document.addEventListener("DOMContentLoaded", function () {
    // Function to handle card type selection
    function handleCardTypeSelection() {
      var cardTypes = document.getElementsByName("card-type");
  
      cardTypes.forEach(function (cardType) {
        cardType.addEventListener("change", function () {
          // You can add logic here based on the selected card type
          // For example, you can fetch and display products related to the selected card type
          generateProductListings(cardType.value);
        });
      });
    }
  
    // Function to generate product listings dynamically
    function generateProductListings(selectedCardType) {
      // You can use AJAX or fetch to get product data from the server based on the selected card type
      // For now, let's assume you have a sample data object
      var productsData = {
        premium: [
          { name: "Premium Product 1", price: "$50" },
          { name: "Premium Product 2", price: "$60" },
        ],
        standard: [
          { name: "Standard Product 1", price: "$30" },
          { name: "Standard Product 2", price: "$40" },
        ],
        platinum: [
          { name: "Platinum Product 1", price: "$70" },
          { name: "Platinum Product 2", price: "$80" },
        ],
      };
  
      var productsContainer = document.querySelector("#products .container");
      productsContainer.innerHTML = ""; // Clear previous listings
  
      var selectedProducts = productsData[selectedCardType];
  
      // Generate product HTML and append to the container
      if (selectedProducts) {
        selectedProducts.forEach(function (product) {
          var productHTML = `
            <div class="product">
              <h2>${product.name}</h2>
              <p>Price: ${product.price}</p>
              <!-- Add more product details as needed -->
              <button>Add to Cart</button>
            </div>
          `;
  
          productsContainer.insertAdjacentHTML("beforeend", productHTML);
        });
      }
    }
  
    // Initialize the card type selection handling
    handleCardTypeSelection();
  });
  