<?php 

class User {
    public $name;
    public $email;

    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
    }

    public function formatJson()
    {
        return json_encode(['name' => $this->name, 'email' => $this->email]);
    }

    public function validate($data)
    {
        if(!isset($data['name'])){
            throw new Exception('Bad Request, User requires a name');
        }

        if(!isset($data['email'])){
            throw new Exception('Bad Request, User Email Required');
        }
    }
}

$data['name'] = 'yinka';
$data['email'] = 'y@gmail.com';

$user = new User($data);
$user->validate($data);

var_dump($user->formatJson());

// we are actually doing three things here
// Our user is a model
// the model should not be validating the request data