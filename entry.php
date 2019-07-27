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
<form action="login.php" method="post">

    <h1>Entry Test</h1>
    <h2 align="center">Software (Java)</h2>
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
    <legend><span class="number">3</span>Self-Assessment</legend>
    <label for="self">How would you rate your programming skills out of 10?</label>
    <select>
        <?php
        for ($i=1; $i<=10; $i++)
        {
            ?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option>
            <?php
        }
        ?>
    </select>
    </fieldset>
    <br>
    <button class="button" type="submit">Submit Answers</button>
</form>
</div>
</body>
</html>