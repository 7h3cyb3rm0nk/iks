document.getElementById('form').addEventListener('submit', function(event) {
    let searchField = document.getElementById('textInput');
    let value = searchField.value.trim();
   
    let regex = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?0-9]/;
   
    console.log(value);
    if(value === '') {
        event.preventDefault();
    } else if(regex.test(value)) {
       event.preventDefault();
       alert('Only alphabets are allowed in the search field');
    }
});
