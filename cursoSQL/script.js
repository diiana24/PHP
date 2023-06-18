document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
      event.preventDefault();
  
      if (validateForm()) {
        form.submit();
      }
    });


    function validateForm() {
      const nombreInput = document.getElementById('nombre');
      const apellidoInput = document.getElementById('apellido');
      const emailInput = document.getElementById('email');
  
      if (nombreInput.value.trim() === '') {
        alert('Ingresar nombre');
        return false;
      }
  
      if (apellidoInput.value.trim() === '') {
        alert('Ingresar apellido');
        return false;
      }
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(emailInput.value)) {
        alert('Ingresar email valido');
        return false;
      }
      return true;
    }
  });