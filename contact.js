document.addEventListener('DOMContentLoaded', function() {
    var sendButton = document.getElementById('sendButton');
    var popup = document.getElementById('popup');
    var nameInput = document.querySelector('.input-box input[placeholder="Enter your name"]');
    var emailInput = document.querySelector('.input-box input[placeholder="Enter your email"]');
    var messageInput = document.querySelector('.input-box.message-box input');
  
    if (sendButton && popup) {
        sendButton.addEventListener('click', function() {
            if (nameInput.value.trim() === '' || emailInput.value.trim() === '' || messageInput.value.trim() === '') {
                alert('Please fill in all fields before sending.');
            } else {
                popup.style.display = 'flex';
                setTimeout(function() {
                    closePopup();
                    clearFields(); // Clear fields after sending
                }, 1000);
            }
        });
    }
  
    function closePopup() {
        popup.style.display = 'none';
    }
  
    function clearFields() {
        nameInput.value = '';
        emailInput.value = '';
        messageInput.value = '';
    }
  });