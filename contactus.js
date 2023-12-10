function myFunction() {
    document.getElementById("myForm").reset();
}

function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var title = document.getElementById("title").value;
    var message = document.getElementById("message").value;

    if (name.trim() === "" || email.trim() === "" || title.trim() === "" || message.trim() === "") {
        alert("Please fill in all required fields.");
        return false;
    }
    return true;
}