<?php

namespace Entity;

use ludk\Utils\Serializer;

use Entity\User;

class Post
{
    public $id;
    public $title;
    public $description;
    public $year_event;
    public $category_sport;
    public $datepost;
    public $url_image;
    public User $user;
    use Serializer;
}
