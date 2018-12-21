<?php
class Singleton
{
    private static $instance = NULL;
    private $data;

    private function __construct(){}
    private function __clone(){}

    public static function Instance()
    {
        if ( self::$instance === NULL )
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function SetData($value)
    {
        $this->data = $value;
    }

    public function GetData()
    {
        return $this->data;
    }
}

$value = 10;
Singleton::Instance()->SetData($value);
echo "Data =  ", Singleton::Instance()->GetData();