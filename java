const form = document.querySelector('form');
form.addEventListener('submit', function(event) {
  event.preventDefault();
  
  const name = form.elements['name'].value;
  const email = form.elements['email'].value;
  const subject = form.elements['subject'].value;
  const message = form.elements['message'].value;
  
  // Verstuur de ingediende gegevens naar een database of opslagplaats
  // ...
  
  // Stuur de gebruiker door naar een bevestigingspagina
  window.location.href = 'confirmation.html';
});
