<?php

namespace app;

require_once("config.php");
require_once("Image.php");

use mysqli;

class DBUtils
{
    private static function getConnection() //:\mysqli
    {
        $mysqli = new mysqli(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);

        if ($mysqli->connect_errno)
            echo "Не удалось подключиться к MySQL: " . $mysqli->connect_error;

        if(!$mysqli->set_charset("utf8"))
            echo "Не удалось установить кодировку utf8: " . $mysqli->error;

        return $mysqli;
    }

    public static function getAllImages()
    {
        $mysqli = DBUtils::getConnection();

        $query = "SELECT * FROM images;";
        $result = $mysqli->query($query);

        if($result->num_rows == 0)
        {
            $mysqli->close();
            return null;
        }

        $images = [];
        while($row = $result->fetch_assoc())
            $images[] = new Image($row['id'], $row['src'], $row['alt']);

        $mysqli->close();
        return $images;
    }

    public static function getImage($id)
    {
        $mysqli = DBUtils::getConnection();

        $query = "SELECT * FROM images WHERE id = $id;";
        $result = $mysqli->query($query);

        if($result->num_rows == 0)
        {
            $mysqli->close();
            return null;
        }

        $row = $result->fetch_assoc();
        $post = new Image($row['id'], $row['src'], $row['alt']);

        $mysqli->close();
        return $post;
    }

    public static function addImage($alt, $src)
    {
        if(getimagesize($src["tmp_name"]) !== false)
        {
            $str = '0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789';
            $newName = '';

            for ($i = 0; $i < 22; $i++)
                $newName .= $str[mt_rand(0, 72)];

            $newName .= substr($src['name'], strrpos($src['name'], '.'));
            $path = 'img/' . $newName;

            $image = file_get_contents($src['tmp_name']);
            $res = file_put_contents($path, $image);

            if($res !== false)
            {
                $mysqli = DBUtils::getConnection();
                $query = "INSERT INTO images (`src`, `alt`) VALUES ('$path', '$alt');";

                if ($mysqli->query($query))
                    $result = true;
                else
                    $result = '<h1 style="color:red">' . $mysqli->error . '</h1>';

                $mysqli->close();
                return $result;
            }
            else
                return '<h1 style="color:red">Не удалось сохранить файл</h1>';
        }
        else
            return '<h1 style="color:red">Файл не являеться картинкой</h1>';
    }

    public static function editImage($id, $src, $alt)
    {
        // If image don't changed
        if($src == null)
            $query = "UPDATE images SET alt='$alt' WHERE id=$id;";
        // If image changed
        else
        {
            if(getimagesize($src["tmp_name"]) !== false)
            {
                $image = file_get_contents($src['tmp_name']);
                $img = DBUtils::getImage($id);
                $res = file_put_contents($img->getSrc(), $image);

                if($res !== false)
                    $query = "UPDATE images SET alt = '$alt' WHERE id=$id;";
                else
                    return '<h1 style="color:red">Файл не являеться картинкой</h1>';
            }
            else
                return '<h1 style="color:red">Не удалось обновить файл</h1>';
        }

        $mysqli = DBUtils::getConnection();

        if($mysqli->query($query))
            $result = true;
        else
            $result = '<h1 style="color:red">' . $mysqli->error . '</h1>';

        $mysqli->close();
        return $result;
    }

    public static function deleteImage($id)
    {
        $mysqli = DBUtils::getConnection();
        $query = "DELETE FROM images WHERE id=$id;";

        if($mysqli->query($query))
            $result = true;
        else
            $result = false;
        $mysqli->close();

        unlink(DBUtils::getImage($id)->getSrc());

        return $result;
    }
}