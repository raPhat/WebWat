<?php

if (!defined("webStart")) {
    exit(0);
}

class Connect
{

    static private $mysqli;

    static private function _con()
    {
        $db_config = array(
            "host" => "localhost",
            "user" => "root",
            "pass" => "",
            "dbname" => "webwat",
            "charset" => "utf8"
        );
        Connect::$mysqli = @new mysqli($db_config["host"], $db_config["user"], $db_config["pass"], $db_config["dbname"]);
        Connect::$mysqli->set_charset($db_config["charset"]);
    }

    static function select($table, $where)
    {
        Connect::_con();
        $arr = array();
        $sql = "SELECT * FROM $table $where";
        $result = Connect::$mysqli->query($sql);
        if (!$result) {
            die("SQL Error: <br>" . $sql . "<br>" . Connect::$mysqli->error);
        }
        while($data= $result->fetch_assoc()) {
            $arr[]=$data;
        }
        Connect::$mysqli->close();
        return $arr;
    }

    static function insert($table, $data)
    {
        Connect::_con();
        $fields = "";
        $values = "";
        $i = 1;
        foreach ($data as $key => $val) {
            if ($i != 1) {
                $fields .= ", ";
                $values .= ", ";
            }
            $fields .= "$key";
            $values .= "'$val'";
            $i++;
        }
        $sql = "INSERT INTO $table ($fields) VALUES ($values)";
        if (Connect::$mysqli->query($sql)) {
            Connect::$mysqli->close();
            return true;
        } else {
            die("SQL Error: <br>" . $sql . "<br>" . Connect::$mysqli->error);
            return false;
        }
    }

    static function update($table, $data, $where)
    {
        Connect::_con();
        $modifs = "";
        $i = 1;
        foreach ($data as $key => $val) {
            if ($i != 1) {
                $modifs .= ", ";
            }
            if (is_numeric($val)) {
                $modifs .= $key . '=' . $val;
            } else {
                $modifs .= $key . ' = "' . $val . '"';
            }
            $i++;
        }
        $sql = ("UPDATE $table SET $modifs $where");
        if (Connect::$mysqli->query($sql)) {
            Connect::$mysqli->close();
            return true;
        } else {
            die("SQL Error: <br>" . $sql . "<br>" . Connect::$mysqli->error);
            return false;
        }
    }

    static function delete($table, $where)
    {
        Connect::_con();
        $sql = "DELETE FROM $table $where";
        if (Connect::$mysqli->query($sql)) {
            Connect::$mysqli->close();
            return true;
        } else {
            die("SQL Error: <br>" . $sql . "<br>" . Connect::$mysqli->error);
            return false;
        }
    }

}