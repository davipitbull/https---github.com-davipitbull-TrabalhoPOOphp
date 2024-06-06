<?php
abstract class DatabaseBase {
    abstract public function getUserByEmailAndPassword($email, $password);
}
