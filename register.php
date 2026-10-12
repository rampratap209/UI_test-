<?php

include "db.php";

if($_SERVER["REQUEST_METHOD"]==="POST"){
$full_name = $_POST["full_name"];
$email = $_POST["email"];
$password =password_hash($_POST["password"], PASSWORD_BCRYPT);

}
$sql = $conn -> prepare("INSERT into users(full_name,email,password) VALUES(?,?,?)");

$sql -> bind_param("sss",$full_name,$email, $password);

if ($sql -> execute()) {
    header("location:login.php");
}
?>



<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>

        <div
            class="container col-5 shadow my-5"
        >
            <form action="" method = "POST">


            <h3 class = "text-center">Registration</h3>
            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="full_name"
                    id="formId1"
                    placeholder=""
                />
                <label for="formId1">Full Name</label>
            </div>
            

        

          <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="email"
                    id="formId1"
                    placeholder=""
                />
                <label for="formId1">Email</label>
            </div>
            

        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input
                type="password"
                class="form-control"
                name="password"
                id=""
                placeholder=""
            />
        </div>
        
 
        <div class="mb-3">
            <label for="" class="form-label">Confirm Password</label>
            <input
                type="password"
                class="form-control"
                name="confirm_password"
                id=""
                placeholder=""
            />
        </div>
        
        
            <button
                type="submit"
                class="btn btn-primary my-1"
            >
                Submit
            </button>
            
            </form>
        </div>
        


        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
