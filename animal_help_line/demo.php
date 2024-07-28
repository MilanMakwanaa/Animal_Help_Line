<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login.css">
    <title>Home</title>
</head>

<body>

    <div class="nav">
        <div class="logo">
            <p><a href="index.php">Home</a> </p>
        </div>

        <div class="right-links">
            <?php
            session_start();
            $con = mysqli_connect("localhost", "root", "", "animal_help_line") or die("Couldn't connect");

            
            
                if (isset($_POST['submit'])) {
                    $Animal_name = mysqli_real_escape_string($con, $_POST['Animal_name']);
                    $Animal_Problem = mysqli_real_escape_string($con, $_POST['Animal_Problem']);
                    $Location = mysqli_real_escape_string($con, $_POST['Location']);
                    $service = mysqli_real_escape_string($con, $_POST['service']);

             
                    $image = ""; 

                    if ($_FILES['images']['size'] > 0) {
                        $uploadDir = 'uploads/'; 
                        $uploadedFile = $uploadDir . basename($_FILES['images']['name']);

                        if (move_uploaded_file($_FILES['images']['tmp_name'], $uploadedFile)) {
                            $image = $uploadedFile;
                        } else {
                            echo "File upload failed.";
                        }
                    }

                    $data = "INSERT INTO form (`Animal_name`, `Animal_Problem`, `images`, `Location`, `service`) 
                            VALUES ('$Animal_name', '$Animal_Problem', '$image', '$Location', '$service')";

                    $result = mysqli_query($con, $data);

                    if ($result) {
                        echo "Data inserted successfully.";
                    } else {
                        echo "Error: " . mysqli_error($con);
                    }
                }

                echo '<a href="php/logout.php"> <button class="btn">Log Out</button> </a>';
            
            // else {
            //     header("Location: login.php");
            //     exit();
            // }
            
            
            ?>
        </div>
    </div>

    <main>
        <div class="container">
            <div class="box form-box">
                <form action="" method="post">
                    <div class="field input">
                        <label for="Animal_name">Animal Name:</label>
                        <input type="text" name="Animal_name" id="Animal_name" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="Problem">Animal Problem:</label>
                        <textarea name="Animal_Problem" id="Problem" rows="2" cols="50" autocomplete="off" required></textarea>
                    </div>

                    <div class="field input">
                        <label for="images">Upload image:</label>
                        <input type="file" accept="image/jpeg, image/png, image/jpg" name="images" id="images" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="Location">Your Location:</label>
                        <input type="text" name="Location" id="Location" autocomplete="off" required>
                    </div>

                    <div class="field select">
                        <label for="age">Services:</label>
                        <select name="service" id="service" style="padding: 10px;">
                            <option value="option0"></option>
                            <option value="option1">Need a doctor for treatment</option>
                            <option value="option2">Need an ambulance</option>
                            <option value="option3">Need a guidance for treatment</option>
                        </select>
                    </div>

                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="Register Your Problem" required>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>
