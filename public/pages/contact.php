<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../public/css/contact.css?v=1.0.1">
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>
    <script type="text/javascript">
    (function(){
        emailjs.init({
            publicKey: "VEEIT17g3yzky8mXj",
        });
    })();
    </script>
    <script src="../public/js/contact.js"></script>
</head>
<body>
    <section id="contact">
        <h2>Contact</h2>
        <form>
            <input type="text" id="name" placeholder="Name">
            <input type="email" id="email" placeholder="Email">
            <textarea rows="4" id="message" placeholder="Message"></textarea>
            <button type="submit" id="btn-send-email" onclick="sendEmail(event)">Send Message</button>
        </form>
    </section>
</body>
</html>