<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../public/css/contact.css?v=1.0.3">
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script> 
</head>
<body>
    <section id="contact">
        <h2>Contact</h2>
        <form id="contact-form">
            <input type="text" name="name" id="name" placeholder="Name" required>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <textarea rows="10" name="message" id="message" placeholder="Message" required></textarea>

            <div id="captcha-wrap">
                <div class="g-recaptcha" data-sitekey="6LeiSzQsAAAAABpJoHwRIUWtCVC6VV9t2HR5GFg5" data-theme="dark"></div>
            </div>
            
            <button type="submit" id="btn-send-email">Send Message</button>
        </form>
    </section>

    <script src="../public/js/email.js"></script>
</body>
</html>