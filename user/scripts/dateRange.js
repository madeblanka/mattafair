 // Get the input elements
 const checkinDateInput = document.getElementById('checkinDate');
 const checkoutDateInput = document.getElementById('checkoutDate');
 const errorText = document.getElementById('error');

 // Add event listeners to input elements
 checkinDateInput.addEventListener('change', validateDates);
 checkoutDateInput.addEventListener('change', validateDates);

 function validateDates() {
     const checkinDate = new Date(checkinDateInput.value);
     const checkoutDate = new Date(checkoutDateInput.value);

     if (checkinDate > checkoutDate) {
         errorText.textContent = "Check-in date cannot be after Check-out date.";
         checkinDateInput.value = "";
         checkoutDateInput.value = "";
     } else {
         errorText.textContent = "";
     }
 }