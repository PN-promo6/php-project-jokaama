<?php

namespace Entity;

use ludk\Utils\Serializer;

class User
{
    public $mail;
    public $nickname;
    public $password;
    public $id;
    use Serializer;
}
