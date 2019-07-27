<?php session_start(); ?>

<!DOCTYPE html>

<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <?php include('link_rel.php'); ?>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
<div class="container-login100" style="background-image: url('img/bg-01.jpg');">
<?php include('header.php'); ?>
<br>
<br>
<br>
<form action="entry.php" method="post">

    <h1>Entry Test</h1>
    <h2 align="center">Programming (Java)</h2>
    <br>

    <fieldset>
        <legend><span class="number">1</span>Basic Knowledge</legend>
        <label for="name">What is an IDE?</label>
        <input type="text" id="name" name="user_name">

        <label for="mail">What are some popular Java UI?</label>
        <input type="email" id="mail" name="user_email">

        <label for="password">Name 5 Design Patterns</label>
        <input type="password" id="password" name="user_password">

    </fieldset>

    <fieldset>
        <legend><span class="number">2</span>Programming</legend>
        <label for="bio">Generate the sentence, "Hello World!"</label>
        <textarea id="bio" name="user_bio"></textarea>
    </fieldset>
        <label>Interests:</label>
        <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Teaching</label><br>
        <input type="checkbox" id="design" value="interest_design" name="user_interest"><label class="light" for="design">Learning</label><br>

    </fieldset>
    <br>
    <button class="button" type="submit">Sign Up</button>
</form>
</div>
</body>
</html>