<?php
    session_start(); // Iniciar a sessão
    include_once "conexao.php";

    // Verifica se a conexão foi bem sucedida
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = mysqli_query($con, "SELECT * FROM users WHERE email = '{$email}'");
            if (mysqli_num_rows($sql) > 0) {
                echo "This email already exists!";
            } else {
                if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                    $img_name = $_FILES['image']['name'];
                    $img_type = $_FILES['image']['type'];
                    $tmp_name = $_FILES['image']['tmp_name'];

                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode);
                    $extensions = ["jpeg", "png", "jpg"];
                    if (in_array($img_ext, $extensions)) {
                        $types = ["image/jpeg", "image/jpg", "image/png"];
                        if (in_array($img_type, $types)) {
                            $time = time();
                            $new_image_name = $time . $img_name;
                            if (move_uploaded_file($tmp_name, "images/" . $new_image_name)) {
                                $ran_id = rand(time(), 100000000);
                                $status = "Online";
                                $encrypt_pass = md5($password);
                                $insert_query = mysqli_query($con, "INSERT INTO users (unique_id, fname, lname, email, password, img, status) 
                                    VALUES ('{$ran_id}', '{$fname}', '{$lname}', '{$email}', '{$encrypt_pass}', '{$new_image_name}', '{$status}')");
                                if ($insert_query) {
                                    $select_sql2 = mysqli_query($con, "SELECT * FROM users WHERE email = '{$email}'");
                                    if (mysqli_num_rows($select_sql2) > 0) {
                                        $result = mysqli_fetch_assoc($select_sql2);
                                        $_SESSION['unique_id'] = $result['unique_id'];
                                        echo "success";
                                    } else {
                                        echo "This email address does not exist!";
                                    }
                                } else {
                                    echo "Error: " . mysqli_error($con);
                                }
                            } else {
                                echo "Failed to upload the image.";
                            }
                        } else {
                            echo "Please upload an image file - jpeg, jpg, png.";
                        }
                    } else {
                        echo "Please upload an image file - jpeg, png, jpg.";
                    }
                } else {
                    echo "Please select an image file.";
                }
            }
        } else {
            echo "$email is not a valid email!";
        }
    } else {
        echo "All input fields are required!";
    }
?>