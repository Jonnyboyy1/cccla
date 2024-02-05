function submitForm() {
    const form = document.getElementById('contactForm');
  
    // Validate the form (you can add more validation logic)
    if (!form.checkValidity()) {
      alert('Please fill in all fields correctly.');
      return;
    }
  
    // Collect form data
    const formData = new FormData(form);
  
    // Send form data using AJAX
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'send-email.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        // Handle the server response (you can customize this part)
        alert('Form submitted successfully!');
        form.reset();
      }

      else{
        alert('Form not submitted!');
      }
    };
  
    xhr.send(new URLSearchParams(formData));
  }
  