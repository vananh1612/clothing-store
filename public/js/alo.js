
document.addEventListener("DOMContentLoaded", function() {
  const products = document.querySelectorAll(".product");
  products.forEach(function(product, index) {
    if (index < 6) {
      product.style.display = "block";
    } else {
      product.style.display = "none";
    }
  });
  
  const loadMoreBtn = document.getElementById("loadMore");
  if (loadMoreBtn) {
    loadMoreBtn.addEventListener("click", function(e) {
      e.preventDefault();
      const hiddenProducts = document.querySelectorAll(".product:not([style*='display: block'])");
      hiddenProducts.forEach(function(product, index) {
        if (index < 4) {
          product.style.display = "block";
        }
      });
      const remainingProducts = document.querySelectorAll(".product:not([style*='display: block'])");
      if (remainingProducts.length == 0 && loadMoreBtn.classList.contains("noProduct") == false) {
        loadMoreBtn.textContent = "Đã xem hết sản phẩm";
        loadMoreBtn.classList.add("noProduct");
      }
    });
  }
});


