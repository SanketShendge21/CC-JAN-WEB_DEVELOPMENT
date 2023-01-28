<?php
include('includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice</title>
    <style>

       @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap'); 
html, body {
  height: 100%;
  background-color: #152733;
  overflow: hidden;
}


.form-holder {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    min-height: 100vh;
}

.form-holder .form-content {
  position: relative;
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 60px;
}

.form-content .form-items {
  border: 3px solid #fff;
  padding: 40px;
  display: inline-block;
  width: 100%;
  min-width: 540px;
  border-radius: 10px;
  text-align: left;
  transition: all 0.4s ease;
}

.form-content h3 {
  color: #fff;
  text-align: left;
  font-size: 28px;
  font-weight: 600;
  margin-bottom: 5px;
}

.form-content h3.form-title {
  margin-bottom: 30px;
}

.form-content p {
  color: #fff;
  text-align: left;
  font-size: 17px;
  font-weight: 300;
  line-height: 20px;
  margin-bottom: 30px;
}



.form-content input[type=text], .form-content input[type=textarea], .form-content input[type=date],
.form-content textarea{
  width: 100%;
  padding: 9px 20px;
  text-align: left;
  border: 0;
  margin-top: 10px;
  outline: 0;
  border-radius: 6px;
  background-color: #fff;
  font-size: 15px;
  font-weight: 300;
  color: #8D8D8D;
}


.btn-primary{
  background-color: #6C757D;
  color: #fff;
  outline: none;
  border: 0px;
  box-shadow: none;
  text-align: center;
  margin: 5px;
  height: 50px;
  font-family:'Poppins', sans-serif;

}

.btn-primary:hover, .btn-primary:focus, .btn-primary:active{
  background-color: #495056;
  outline: none;
  border: none;
  cursor: pointer;
  box-shadow: none;
}

    </style>
</head>
<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Add Notice</h3>
                        <p>Fill in the data below.</p>
                        <form action="action.php" method="post">
                            <div class="col-md-12">
                               <input class="form-control" type="text" name="title" placeholder="Title" required>
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" name="desc" placeholder="Description" required></textarea>
                            </div>

                           <div class="col-md-12">
                              <input class="form-control" type="date" name="date" placeholder="Date" required>
                           </div>

                            <div class="form-button mt-3">
                                <button id="submit" name="submit" type="submit" class="btn btn-primary">Add Notice</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include('includes/footer.php');
?>
</body>
</html>