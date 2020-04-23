<?php

namespace Entity;

use Entity\User;

class Post
{
    public $id;
    public $description;
    public $year_event;
    public $category_sport;
    public $datepost;
    public $url_image;
    public User $user;
}
