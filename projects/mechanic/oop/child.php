<?php
include_once "index.php";
class Child extends Construction {


    public function IaMProtectedFunction()
    {
        parent::IaMProtectedFunction(); // TODO: Change the autogenerated stub
    }

}

$child = new Child();

$child->IaMProtectedFunction();