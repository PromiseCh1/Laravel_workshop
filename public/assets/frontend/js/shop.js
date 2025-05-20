// Update displayed category and render products
function setCategory(category) {
  document.getElementById('selected-category').textContent = `Categorie: ${category}`;
  renderProducts(category.toLowerCase());
}

const productData = {
  "t-shirt": [
    { title: "Blues 1", price: "$29.99", img: "../assets/Photos/Arrivals/Jackets/females/Tshirt/Blue 1.jpg", rating: "★★★★★" },
    { title: "Blue Floral", price: "$55.99", img: "/Photos/Arrivals/Jackets/females/Tshirt/Blue floral 1.jpg", rating: "★★★★★" },
    { title: "Jane Casual Pink Shirt", price: "$79.99", img: "/Photos/Arrivals/Jackets/females/Tshirt/Jane causal Pink Shirt 2.jpg", rating: "★★★★☆" },
    { title: "Jyacaranda full sleeve Tshirt", price: "$59.99", img: "/Photos/Arrivals/Jackets/females/Tshirt/Jyacaranda Full Sleeve Tshirt 1.jpg", rating: "★★★★☆" },
    { title: "Mint Chillama llama polo tee", price: "$39.99", img: "/Photos/Arrivals/Jackets/females/Tshirt/Mint Chillma llama polo tee 1.jpg", rating: "★★★★★" },
    { title: "Mode23 Brown Layered T-shirt", price: "$129.99", img: "/Photos/Arrivals/Jackets/females/Tshirt/Mode23 Brown Layered T-shirt 1.jpg", rating: "★★★★☆" }
  ],
  "hoodie": [
    { 
      title: "Love Yourself Quotes Embroidered Grey Zip-Up Hoodie", 
      price: "$59.99", 
      img: "/Photos/Arrivals/Jackets/females/hoodie/Love Yourself Quotes Embroidered Grey Zip-Up Hoodie 3.jpg", 
      rating: "★★★★☆" 
    },
    { 
      title: "Vintage Green Corduroy Hood Jacket", 
      price: "$64.99", 
      img: "/Photos/Arrivals/Jackets/females/hoodie/Vintage Green Corduroy Hood Jacket 1.jpg", 
      rating: "★★★★★" 
    },
    { 
      title: "Vintage Blue Corduroy Hood Jacket", 
      price: "$49.99", 
      img: "/Photos/Arrivals/Jackets/females/hoodie/Vintage Blue Corduroy Hood Jacket 1.jpg", 
      rating: "★★★☆☆" 
    }, 
    { 
      title: "Mode23 Black Zip Up Hoodie", 
      price: "$59.99", 
      img: "/Photos/Arrivals/Jackets/females/hoodie/Mode23 Black Zip up Hoodie 2.jpg", 
      rating: "★★★★☆" 
    },
    { 
      title: "Love Yourself Quotes Embroidered Black Zip-Up Hoodie", 
      price: "$64.99", 
      img: "/Photos/Arrivals/Jackets/females/hoodie/Love Yourself Quotes Embroidered Black Zip-Up Hoodie 1.jpg", 
      rating: "★★★★★" 
    },
    { 
      title: "Mode Brown Zip Up Hoodie", 
      price: "$49.99", 
      img: "/Photos/Arrivals/Jackets/females/hoodie/Mode Brown Zip up Hoodie 1.jpg", 
      rating: "★★★☆☆" 
    }
  ],
  
  "jacket": [
    { 
      title: "Mode Creamy Twill Jacket", 
      price: "$89.99", 
      img: "/Photos/Arrivals/Jackets/females/jacket/Mode Creamy Twill Jacket 3.jpg", 
      rating: "★★★★☆" 
    },
    { 
      title: "Sky Blue Varsity Jacket", 
      price: "$159.99", 
      img: "/Photos/Arrivals/Jackets/females/jacket/Dropout Academy Sky Blue Varsity 1.jpg", 
      rating: "★★★★★" 
    },
    { 
      title: "Willow Purple Corduroy Jacket", 
      price: "$119.99", 
      img: "/Photos/Arrivals/Jackets/females/jacket/Willow Purple Corduroy Jacket 1.jpg", 
      rating: "★★★☆☆" 
    },
    { 
      title: "Vintage Blue Corduroy Hood Jacket", 
      price: "$95.99", 
      img: "/Photos/Arrivals/Jackets/females/jacket/Vintage Blue Corduroy Hood Jacket 2.jpg", 
      rating: "★★★★☆" 
    },
    { 
      title: "Half Sporty Blue Jacket", 
      price: "$169.99", 
      img: "/Photos/Arrivals/Jackets/females/jacket/Half Sporty Blue Jacket 1.jpg", 
      rating: "★★★★★" 
    },
    { 
      title: "Grey Sherpa Jacket", 
      price: "$109.99", 
      img: "/Photos/Arrivals/Jackets/females/jacket/grey sherpa jacket 1.jpg", 
      rating: "★★★☆☆" 
    }
  ],
  
  "pant": [
    { 
      title: "Black Jeans", 
      price: "$54.99", 
      img: "/Photos/Arrivals/Jackets/females/pants/BLACK JEANS 2.jpg", 
      rating: "★★★★☆" 
    },
    { 
      title: "Rusted Black Jeans", 
      price: "$44.99", 
      img: "/Photos/Arrivals/Jackets/females/pants/Rusted black jeans 2.jpg", 
      rating: "★★★☆☆" 
    },
    { 
      title: "Blue Jeans", 
      price: "$64.99", 
      img: "/Photos/Arrivals/Jackets/females/pants/Blue jeans 2.jpg", 
      rating: "★★★★★" 
    },
    { 
      title: "KO Style Pants", 
      price: "$52.99", 
      img: "/Photos/Arrivals/Jackets/females/pants/KO 2.jpg", 
      rating: "★★★★☆" 
    },
    { 
      title: "Baggy Black Pants", 
      price: "$42.99", 
      img: "/Photos/Arrivals/Jackets/females/pants/baggy black.jpg", 
      rating: "★★★☆☆" 
    },
    { 
      title: "Astro Style Pants", 
      price: "$61.99", 
      img: "/Photos/Arrivals/Jackets/females/pants/astro 1.jpg", 
      rating: "★★★★★" 
    }
  ]
  
};

const grid = document.getElementById("productsGrid");

function renderProducts(categoryKey) {
  const items = productData[categoryKey];
  grid.innerHTML = ""; // Clear previous products

  if (!items || items.length === 0) {
    grid.innerHTML = "<p>No products found.</p>";
    return;
  }

  items.forEach(product => {
    const div = document.createElement("div");
    div.className = "product-card";
    div.innerHTML = `
      <div class="wishlist-icon">&#9825;</div>
      <img src="${product.img}" alt="${product.title}">
      <h3>${product.title}</h3>
      <p class="price">${product.price}</p>
      <div class="stars">${product.rating}</div>
      <button class="btn-add">Add to Cart</button>
    `;
    grid.appendChild(div);
  });
}

// Initial load: show T-Shirt category
renderProducts("t-shirt");


//index is redirected here
window.addEventListener("DOMContentLoaded", () => {
  const params = new URLSearchParams(window.location.search);
  const category = params.get("category");
  if (category) {
    setCategory(category.charAt(0).toUpperCase() + category.slice(1));
  }
});



  // Handle pagination clicks
  document.querySelectorAll(".page-btn").forEach(button => {
    button.addEventListener("click", () => {
      const currentActive = document.querySelector(".page-btn.active");
      if (currentActive) currentActive.classList.remove("active");

      if (!button.classList.contains("next")) {
        button.classList.add("active");
        const page = button.getAttribute("data-page");
        renderProducts(page);
      } else {
        const current = document.querySelector(".page-btn.active:not(.next)");
        const next = current.nextElementSibling;
        if (next && next.hasAttribute("data-page")) {
          next.click(); // Trigger click on next page
        }
      }
    });
  });

