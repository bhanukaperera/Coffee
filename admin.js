function updatePrice(product) {
    var newPrice = document.querySelector('input[name="new_price_' + product.toLowerCase() + '"]').value;
    // AJAX request to update price in the database
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "update_product.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle response
            alert(xhr.responseText);
        }
    };
    xhr.send("product=" + product + "&new_price=" + newPrice);
}

function deleteProduct(product) {
    // AJAX request to delete product from the database
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "delete_product.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle response
            alert(xhr.responseText);
        }
    };
    xhr.send("product=" + product);
}