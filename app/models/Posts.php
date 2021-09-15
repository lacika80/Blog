<?php

namespace App\models;

use App\Lib\Config;
use mysqli;
use App\models\dbconnect;

class Posts extends dbconnect
{
    private $conn;

    public function __construct()
    {
        $dbcon = new parent();
        $this->conn = $dbcon->connect();
    }

    public function select($where = '', $other = '')
    {
        $sql = "SELECT * FROM  POST " . $where . " " . $other;
        $result = mysqli_query($this->conn, $sql);
        if (empty($result)) {
            $query = "CREATE TABLE POST (
                      ID int(11) AUTO_INCREMENT,
                      TITLE varchar(255) NOT NULL,
                      CONTENT varchar(255) NOT NULL,
                      METADESCRIPTION varchar(255) NOT NULL,
                      METAKEYWORDS varchar(255) NOT NULL,
                      METATITLE varchar(255) NOT NULL,
                      URL varchar(255) NOT NULL,
                      PRIMARY KEY  (ID)
                      )";
            $result = mysqli_query($this->conn, $query);
        }

        $sele = mysqli_fetch_all($result, MYSQLI_ASSOC);
        print_r(mysqli_fetch_all($result, MYSQLI_ASSOC));
        return $sele;
    }

    public function create($TITLE, $CONTENT, $METADESCRIPTION = "", $METAKEYWORDS ="", $METATITLE = "")
    {
        $URL = "";
        $sql = "SELECT * FROM  POST ";
        $sql = "INSERT INTO POST (TITLE, CONTENT, METADESCRIPTION, METAKEYWORDS, METATITLE, URL) VALUES ('$TITLE', '$CONTENT', $METADESCRIPTION, $METAKEYWORDS, $METATITLE, $URL)";
        $result = mysqli_query($this->conn, $sql);
        if (empty($result)) {
            $query = "CREATE TABLE POST (
                      ID int(11) AUTO_INCREMENT,
                      TITLE varchar(255) NOT NULL,
                      CONTENT varchar(255) NOT NULL,
                      METADESCRIPTION varchar(255) NOT NULL,
                      METAKEYWORDS varchar(255) NOT NULL,
                      METATITLE varchar(255) NOT NULL,
                      URL varchar(255) NOT NULL,
                      PRIMARY KEY  (ID)
                      )";
            $result = mysqli_query($this->conn, $query);
        }

        $sele = mysqli_fetch_all($result, MYSQLI_ASSOC);
        print_r(mysqli_fetch_all($result, MYSQLI_ASSOC));
        return $sele;
    }

















    private static $DATA = [];

    public static function all()
    {
        return self::$DATA;
    }

    public static function add($post)
    {
        $post->id = count(self::$DATA) + 1;
        self::$DATA[] = $post;
        self::save();
        return $post;
    }

    public static function findById(int $id)
    {
        foreach (self::$DATA as $post) {
            if ($post->id === $id) {
                return $post;
            }
        }
        return [];
    }

    public static function load()
    {
        $DB_PATH = Config::get('DB_PATH', __DIR__ . '/../../db.json');
        /*  $DB_CONN = Config::get('DB_CONN', __DIR__ . '/../../db.json');
        if ($DB_CONN) {
            $sql = 'SELECT * FROM posts';
            $result = mysqli_query($DB_CONN, $sql);
            self::$DATA = mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            echo "conn error: " . mysqli_connect_error();
        } */
        self::$DATA = json_decode(file_get_contents($DB_PATH));
    }

    public static function save()
    {
        $DB_PATH = Config::get('DB_PATH', __DIR__ . '/../../db.json');
        file_put_contents($DB_PATH, json_encode(self::$DATA, JSON_PRETTY_PRINT));
    }
}
