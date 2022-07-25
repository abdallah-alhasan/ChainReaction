<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
<section id="contact__info">
    <div class="header">
        <h3>Hello, who's this?</h3>
    </div>
    <?php 
    if(isset($_SESSION['message'])):
    ?>
        <div class="alert alert-<?php echo $_SESSION['message'] == 'Successfully added' ? 'success' : 'danger';?>" role="alert">
            <strong><?php echo $_SESSION['message']?></strong>
        </div>
    <?php 
        session_unset();
        endif;
    ?>
    <div class="form__container">
        <form action="info.php" method="post" class="form">
            <label class="form__label" for="first_name">First name</label>
            <input class="form__input" type="text" name="first_name" id="first_name" placeholder="first name" required/>
            
            <label class="form__label" for="last_name">Last name</label>
            <input class="form__input" type="text" name="last_name" id="last_name" placeholder="last name" required/>
            
            <label class="form__label" for="phone_number">Phone number</label>
            <input class="form__input" type="text" name="phone_number" id="phone_number" placeholder="phone number" required/>

            <button type="submit">Submit</button>
        </form>
    </div>
</section>
</body>
</html>