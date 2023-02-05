<!DOCTYPE html>
<html>

<head>
    <title>Contact us</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    
</head>
<body>
    <form method="POST" action="sendmail.php">
        <div class="container">
            <div class="contact-box">
                <div class="left"></div>
                <div class="right">
                    <h2>Contact Us</h2>
                    <input type="text" name="name"  class="field" placeholder="Your Name" required>
                    <input type="email" name="email"    class="field" placeholder="Your Email" required>
                    <input type="tel"  name="phone"  class="field" placeholder="Your Phone Number" required minlength="10">
                    <textarea placeholder="Message"  name="message"  class="field" required></textarea>
                    <button class="btn" type="submit"  name="submit">Send</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>