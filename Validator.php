<?php
include_once("Constants.php");

class Validator {
    public function validateRequest($validation_password, $request) {
        if ($validation_password != Constants::VALIDATION_PASSWORD) {
            echo "Password is incorrect given password is $validation_password";
            exit;
        } else if ($request == null) {
            echo "Request is incorrect.";
            exit;
        }
    }
}

?>