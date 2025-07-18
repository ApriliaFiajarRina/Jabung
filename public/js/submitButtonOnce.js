const form = document.getElementById('submitOnce');
const button = document.getElementById('btn-submitOnce')

form.addEventListener('submit', function(event) {
    if (this.classList.contains('submitted')) {
        event.preventDefault(); // Prevent form submission if already submitted
        console.log("Already submit, try again later")
    } else {
        button.ariaDisabled = true

        this.classList.add('submitted'); // Add 'submitted' class to form
    }
});