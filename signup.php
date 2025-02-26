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
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
    <?php include('header.php'); ?>
    <br>
    <br>
    <br>
      <form action="entry.php" method="post">

        <h1>Sign Up</h1>

        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name">

          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email">

          <label for="password">Password:</label>
          <input type="password" id="password" name="user_password">

        </fieldset>

        <fieldset>
          <legend><span class="number">2</span>Your profile</legend>
          <label for="bio">Biography:</label>
          <textarea id="bio" name="user_bio"></textarea>
        </fieldset>
        <fieldset>
        <label for="job">Skill Field:</label>
        <select id="job" name="user_job">
          <optgroup label="Science">
            <option value="frontend_developer">Biology</option>
            <option value="php_developor">Chemistry</option>
            <option value="python_developer">Physics</option>
            <option value="rails_developer">Mathematics</option>
            <option value="web_designer">Medical</option>
            <option value="WordPress_developer">Software</option>
          </optgroup>
          <optgroup label="Art">
            <option value="Android_developer">Language</option>
            <option value="iOS_developer">Writing</option>
            <option value="mobile_designer">Architecture</option>
          </optgroup>
          <optgroup label="Business">
            <option value="business_owner">Commerce</option>
            <option value="freelancer">Accounting</option>
          </optgroup>
          <optgroup label="Other">
            <option value="secretary">Fine Arts</option>
            <option value="maintenance">Dancing</option>
          </optgroup>
        </select>

          <label>Interests:</label>
          <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Teaching</label><br>
            <input type="checkbox" id="design" value="interest_design" name="user_interest"><label class="light" for="design">Learning</label><br>

        </fieldset>
          <br>
        <button class="button" type="submit">Sign Up</button>
      </form>
        </div>
    </div>
    </body>
</html>