document.getElementById('form').addEventListener('submit', function(event) {
    let searchField = document.getElementById('textInput');
    let value = searchField.value.trim();
   
    let regex = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?0-9]/;

    if(value == '') {
        event.preventDefault();
        document.getElementById('textInput').placeholder="Enter your health issue";
    }
    
    else if(regex.test(value)) {
        event.preventDefault();
        document.getElementById('textInput').value = '';
        document.getElementById('textInput').placeholder='Only alphabets are allowed in the search field';
    }
});
