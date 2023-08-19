
const adult = document.getElementById('adult');
const child = document.getElementById('child');
const jml_kamar = document.getElementById('jml_kamar');

adult.addEventListener('input', function(event) {
  validateInput(adult);
});

child.addEventListener('input', function(event) {
  validateInputBaby(child);
});

jml_kamar.addEventListener('input', function(event) {
  validateInputKamar(jml_kamar);
});

function validateInputBaby(inputElement) {
  const value = parseInt(inputElement.value, 10);
  console.log(inputElement.value);
  if (value <= 0 || value > 30) {
    inputElement.value = ''; // Clear the input if it's not within the desired range
    inputElement.setCustomValidity('Please enter a value between 1 and 10.');
  } else {
    inputElement.setCustomValidity('');
  }
}
function validateInput(inputElement) {
  const value = parseInt(inputElement.value, 10);
  console.log(inputElement.value);
  if (value < 1 || value > 30) {
    inputElement.value = ''; // Clear the input if it's not within the desired range
    inputElement.setCustomValidity('Please enter a value between 1 and 10.');
  } else {
    inputElement.setCustomValidity('');
  }
}
function validateInputKamar(inputElement) {
  const value = parseInt(inputElement.value, 10);
  if (value < 1 || value > 100) {
    inputElement.value = ''; // Clear the input if it's not within the desired range
    inputElement.setCustomValidity('Please enter a value between 1 and 100.');
  } else {
    inputElement.setCustomValidity('');
  }
}
