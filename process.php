<!-- <!DOCTYPE html>
<html>
    <head>
    </head>

    <body>
    <?php

        if(isset($_POST['btnSubmit'])) {
            $to = 'ramazaniam20@gmail.com'; // Replace with your email address
            $subject = 'TA Consultation Request';
            $name = $_POST['txtName'];
            $email = $_POST['txtEmail'];
            $course = $_POST['txtPhone'];
            $message = $_POST['txtMsg'];
            
            $body = "Name: $name\nEmail: $email\nCourse: $course\nMessage:\n$message";
            
            $headers = "From: $email\n";
            $headers .= "Reply-To: $email\n";
            
            if(mail($to, $subject, $body, $headers)) {
                echo "Thank you for your consultation request. We will get back to you soon!";
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        ?>
    </body>

</html>

 -->
