<?php

class Json {
    public static function from($data)
    {
        return json_encode($data);
    }
}

class UserRequest {
    protected static $rules = [
        'name' => 'string',
        'email' => 'string'
    ];

    public static function validate($data)
    {
        foreach (static::$rules as $property => $type) {
            if (gettype($data[$property]) !== $type) {
                throw new \Exception("User Property {$property} must be of Type {$type}");
            }
        }
    }
}

class User {
    public $name;
    public $email;

    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
    }
}

$data['name'] = 'yinka';
$data['email'] = 'y@gmail.com';

UserRequest::validate($data); // responsibility of validating user's request 

$user = new User($data); // responsibility of modelling the user

var_dump(Json::from($data)); // responsibility for formatting Json from the user object