<?php

require("header.php");

function sendMail($to, $subject, $body) {
    $sent_mail = mail($to, $subject, $body);

    if($sent_mail){
        return "<div class=\"alert alert-success\" role=\"alert\">
            Your email has been sucessfully sent.
        </div>";

    }

    return "<div class=\"alert alert-danger\" role=\"alert\">
            Your email has not been sent due to internal error.
        </div>";
}

if(isset($_POST['subject'])){
    $to = "slstrange1@gmail.com";
    $subject = $_POST['subject'];
    $body = $_POST ['body'];
    echo sendMail($to, $subject, $body);

}

?>

<h1>Contact Me</h1>
<hr />

<form action="/contact.php" method="post">
    <div class="form-group">
    <label for="subject">Subject</label>
    <input name="subject" class="form-control" placeholder="Enter your email subject." />
    </div>
    <div class="form-group">
        <label for="body">Message</label>
        <textarea name="body" class="form-control" rows="10"></textarea>
    </div>
    <button class="btn btn-primary" type="submit">Send Email</button>    
</form>

<?php

require("footer.php");

