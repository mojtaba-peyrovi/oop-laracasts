<?php
/**
 *
 */
interface Animal
{
    public function communicate();
}
class Dog implements Animal{
    public function communicate()
    {
        return 'bark';
    }
}

class Cat implements Animal{
    public function communicate()
    {
        return 'meow';
    }
}
/**
 *
 */
interface Logger{
    public function execute($message);

}

class LogToFile implements Logger {
    public function execute($message)
    {
        var_dump('log the message to a file' . $message);
    }
}

class LogToDatabase implements Logger {
    public function execute($message)
    {
        var_dump('log the message to a database' . $message);
    }
}
class userController {
    protected $logger;

    public function __construct(Logger $logger)
    {
            $this->logger = $logger;
    }
    public function show()
    {
        $user = 'johnDoe';
        $this->logger->execute($user);
    }

}
$controller = new userController(new LogToDatabase);
$controller->show();
/////////
/**
 *
 */
interface CastsToJson
{
    public function toJson();
}
/**
 *
 */
class User implements CastsToJson
{

    function __construct(argument)
    {
        // code...
    }
}

class Collection implements CastsToJson
{

    function __construct(argument)
    {
        // code...
    }
}
