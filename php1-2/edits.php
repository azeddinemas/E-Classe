<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    body {
    width: 100%;
    background: linear-gradient(90deg, rgba(64, 205, 235, 1) 46%, rgba(173, 245, 196, 1) 90%, rgba(243, 247, 174, 1) 100%);
}
.container {
    padding: 5px;
    border-radius: 20px;
    margin-top: 75px;
}
</style>


<body>

<!--start modifier-->

<?php
        include 'connect.php';
        if (isset($_GET['id'])) {

            $id = $_GET['id'];
            $sql = "SELECT * FROM students WHERE id='$id'";
            $query = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($query);
            
            $nom = $row['name'];
            $email = $row['email'];
            $phone = $row['phone'];
            $enroll = $row['enroll_number'];
            $date = $row['date_of_admission'];
            
        }
?>
                            <!--end modifie-->
<main style="max-width: 400px;" class="container bg-white shadow-lg">
    <form action="Students.php<?php  '?id='.$_GET['id'];?>" method="POST">
    
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <h1 class="titre m-3"><span class="text-info p-2">|</span>E-classe</h1>
        <h2 class="text-center mb-5">students</h2>
        <div class="">
            <label for="floatingInput">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $nom;  ?>" id="floatingInput" placeholder="username">        
        </div>
        <div class="">
            <label for="floatingInput">Email</label>
            <input type="email" class="form-control"name="email" value="<?php echo $email;?>" id="floatingInput" placeholder="name@example.com">
        </div>
        <div class="">
            <label for="floatingInput">Phone</label>
            <input type="number" class="form-control"name="phone" value="<?php echo $phone;?>" id="floatingInput" placeholder="number de phone">                                
        </div>        
        <div class="">
            <label for="floatingInput">Enroll Number</label>
            <input type="number" class="form-control"name="enroll_number" value="<?php echo $enroll;?>" id="floatingInput" placeholder="votre number">                                    
        </div>
        <div class="mb-3">
            <label for="floatingInput">Date of admission</label>
            <input type="date" class="form-control"name="date_of_admission" value="<?php echo $date; ?>" id="floatingInput"  placeholder="">                                    
        </div>
        <div class="d-grid pt-5">
           <input class="btn btn-info text-white" type="submit" value="modifie">
            <br>
        </div>
    </form>


</main>



 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 </body>
</html>