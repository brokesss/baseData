<?php

class UserData
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function insertUser($dataUser)
    {
        $stmt = $this->pdo->prepare("INSERT INTO users (name_user,login,password)
values (:name_user,:login,:password)");
        if ($stmt->execute([
            "name_user" => $dataUser["name"],
            "login" => $dataUser["login"],
            "password" => $dataUser["pass"]
        ])) {
            return $this->pdo->lastInsertId();
        };
        return -1;
    }

    public function getUser($data)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE id=:id ");
        if ($stmt->execute([
            "id" => $data["id"]

        ])) {
            return $stmt->fetch();
        };
        return null;
    }

    public function getUserLogin($login)
    {
        $stmt = $this->pdo->prepare("select * from users where login =:login");
        if ($stmt->execute(["login" => $login])) {
            return $stmt->fetchAll();
        };
        return null;

    }

    public function authUser($data)
    {
        $stmt = $this->pdo->prepare("select * from users 
where login=:login and password=:password");
        if ($stmt->execute([
            "login" => $data["login"],
            "password" => $data["pass"]
        ])) {
            if ($stmt != null) return $stmt->fetch();
            else return null;
        }
        return null;
    }


}