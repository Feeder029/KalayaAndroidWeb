function sendEmail(event) {
    event.preventDefault();
    let details = {
        name : document.getElementById("name").value,
        email : document.getElementById("email").value,
        message : document.getElementById("message").value,
    }
    emailjs.send("service_37a45tt","template_wofbzes",details).then(alert("Email Sent!"))
    setTimeout(() => location.reload(), 300);
}