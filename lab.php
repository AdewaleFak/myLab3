<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link href="lab.css" rel="stylesheet">
    <?php include 'val.php'; ?>


</head>
<body>






<div id="wrapper">
    <?php include 'header.php'; ?>
    <?php include 'nav.php'; ?>

    <main>


        <fieldset>
            <legend><h1>Your Weather Feedback</h1></legend>


            <form action="" method="post"">
            <label >Your Name:</label>
            <input type="text" name="name" value="<?php if (isset($_POST['name']))echo $_POST['name']; ?>"><span style="color: red"> <?php echo $nameerr; ?></span><br />

            <label >Your E-mail:</label>
            <input type="text" name="email" value="<?php if (isset($_POST['email']))echo $_POST['email']; ?>"><span style="color: red"> <?php echo $emailerr; ?></span><br />

            <label >Country:</label>
            <input type="text" name="country" value="<?php if (isset($_POST['country']))echo $_POST['country']; ?>"><span style="color: red"> <?php echo $countryerr; ?></span><br /><br />

            <label >Please provide details of the weather problems around you:</label><br>

            <textarea type="text" name="comment" rows="7" cols="60"></textarea><br />


            <button type="reset">Reset</button>
            <input type="submit" value="Submit" name="button" ><br />

            </form>

        </fieldset>






</div>
</main>
<?php include 'footer.php'; ?>




</body>
</html>