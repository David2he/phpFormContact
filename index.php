<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' type='text/css' href='./main.css'>
</head>
<body>
    <main>
        <h1>Send Email</h1>
        <form class="contact-form" action="formulaire.php" method="post">
            <input type="text" name="name" placeholder="Full name required">
            <input type="text" name="mail" placeholder="Your E-mail">
            <input type="text" name="subject" placeholder="subject">
            <textarea name="message" placeholder="type your message" rows="8" cols="60"></textarea>
            <button type="submit" name="submit">Send Mail</button>
        </form>
    </main>
</body>
</html>