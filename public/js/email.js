emailjs.init({
    publicKey: "VEEIT17g3yzky8mXj",
});

document.getElementById("contact-form").addEventListener("submit", function (event) {
    event.preventDefault();

    const captchaWrap = document.getElementById("captcha-wrap");
    const captchaResponse = grecaptcha.getResponse();

    if (!captchaResponse) {
        captchaWrap.style.display = "block";
        alert("Please verify that you are not a robot");
        return;
    }

    emailjs.sendForm(
        "service_37a45tt",
        "template_wofbzes",
        this
    ).then(() =>  {
        alert("Email Sent Successful!");
        this.reset();
        grecaptcha.reset();
        captchaWrap.style.display = "none";
    }).catch((error) => {
        console.error("EmailJS Error:", error);
        alert("Failed to send email.");
    });
});