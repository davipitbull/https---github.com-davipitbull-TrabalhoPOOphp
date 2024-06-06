<?php
abstract class AuthenticatorBase {
    abstract public function login($email, $password);
}
