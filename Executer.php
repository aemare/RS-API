<?php

include("Mail.php");
include("Validator.php");

class Executer {

    public function execute($user, $email, $validation_password, $request, $request_id) {
        try {
            $validator = new Validator();
            $validator->validateRequest($validation_password, $request);
        } catch (Exception $e) {
            throw $e;
        }
        $mail = new Mail();
        $mail->writeOutput($email, $user, $validation_password, $request, $request_id);
    }
}