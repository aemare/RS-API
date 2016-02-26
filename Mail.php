<?php
include_once("Constants.php");

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: ' . Constants::SERVER_NAME . ' <rs-api@' . Constants::SERVER_DOMAIN. '>' . "\r\n";

class Mail{

    public function writeOutput($email, $user, $validation_password, $request, $request_id) {
        try {
            $validator = new Validator();
            $validator->validateRequest($validation_password, $request);
        } catch (Exception $e) {
            throw $e;
        }
        global $headers;
        $replace = array("%server_name%", "%user%", "%request%");
        $replacement = array(Constants::SERVER_NAME, $user, $request);
        switch ($request_id) {
            case 0:
                $subject = "Activation of your " . Constants::SERVER_NAME . " account.";
                break;
            case 1:
                $subject = "Requested password change of your ". Constants::SERVER_NAME ." account.";
                break;
        }
        $text = str_replace($replace, $replacement, file_get_contents("formats/$request_id.html"));
        mail($email, $subject, $text, $headers);
    }
}
?>