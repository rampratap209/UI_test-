<?php

include "db.php";

if($_SERVER["REQUEST_METHOD"]==="POST"){
$ful = $_POST["full_name"];
$email = $_POST["email"];
$password = password_hash($_POST["password"], PASSWORD_BCRYPT);
$confirm_password = $_POST["confirm_password"];

}

$sql = $conn -> prepare("INSERT into users VALUES(?,?,?,?)");

$sql -> bind_param("ssss",$full_name,$email, $password,$confirm_password);

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
            class="container col-5 rounded shadow my-4"
        >

        <h3 class = "text-center">Add Photograph</h3>
        Photograph Title   
        <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="formId1"
                    id="formId1"
                    placeholder=""
                />
                <label for="formId1">Photograph Title</label>
            </div>

            Photographer Name
            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="Photographer Name"
                    id="formId1"
                    placeholder=""
                />
                <label for="formId1">Photographer Name</label>
            </div>

            Photography Category
            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="Photography Category"
                    id="formId1"
                    placeholder=""
                />
                <label for="formId1">Photography Category</label>
            </div>

            Description
            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="Description"
                    id="formId1"
                    placeholder=""
                />
                <label for="formId1">Description</label>
            </div>

            Upload Photograph
            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name=" Upload Photograph"
                    id="formId1"
                    placeholder=""
                />
                <label for="formId1"> Upload Photograph</label>
            </div>

            <button
                type="submit"
                class="btn btn-primary my-1"
            >
                Add
            </button>
            
            
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
