<?php
    abstract class User{
        private $name;
        private $email;

        public function __construct($name, $email) {
            $this->name = $name;
            $this->email = $email;
        }
        
        abstract public function getRole();

        public function GetName(){
            return $this->name;
        }
        
        public function SetName($name){
            $this->name = $name;
        }

        public function GetEmail(){
            return $this->email;
        }
        
        public function SetEmail($email){
            $this->email = $email;
        }
    }

    class Student extends User {
        private $group;

        public function __construct($name, $email, $group) {
        parent::__construct($name, $email);
        $this->group = $group;
        }

        public function getRole() {
            return "Студент";
        }

        public function getGroup() {
            return $this->group;
        }

        public function setGroup($group) {
            $this->group = $group;
        }
    }

    class Teacher extends User {
        private $subject;

        public function __construct($name, $email, $subject) {
            parent::__construct($name, $email);
            $this->subject = $subject;
        }

        public function getRole() {
            return "Викладач";
        }

        public function getSubject() {
            return $this->subject;
        }

        public function setSubject($subject) {
            $this->subject = $subject;
        }
    }
    //phpinfo();
    $dbname = 'C:\Users\Tatakae\Desktop\Proga\php\USERDB.fdb';
    $user = 'SYSDBA';
    $password = 'masterkey';

    try {
        $dbh = new PDO("firebird:dbname=$dbname;charset=utf8", $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Ошибка подключения: " . $e->getMessage());
    }

    $query = "
        SELECT u.Id, u.Name, u.Email, u.Phone, u.RoleUser, 
            s.StudetGroup, t.Subject
        FROM Users u
        LEFT JOIN Student s ON u.Id = s.Student_Id
        LEFT JOIN Teachers t ON u.Id = t.Teacher_Id
    ";

    $stmt = $dbh->query($query);
    $users = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        if ($row['ROLEUSER'] == 0) 
            $users[] = new Student($row['NAME'], $row['EMAIL'], $row['STUDETGROUP']);
        elseif ($row['ROLEUSER'] == 1) 
            $users[] = new Teacher($row['NAME'], $row['EMAIL'], $row['SUBJECT']);
    }

    foreach($users as $user) {
        echo "Ім’я: " . $user->getName() . "<br>";
        echo "Email: " . $user->getEmail() . "<br>";
        echo "Роль: " . $user->getRole() . "<br>";
        if($user instanceof Student) 
            echo "Група: " . $user->getGroup() . "<br>";
        elseif($user instanceof Teacher) 
            echo "Предмет: " . $user->getSubject() . "<br>";
        echo "<hr>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facepunch</title>
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="container">
            <a href="/"><img src="img/img-rust.jpg" alt="Logo-Rust"></a>
            <div class="burger" onclick="toggleMenu()">☰</div>
            <nav class="navigation">
                <a href="/news">news</a>
                <a href="/OOP">companion</a>
                <a href="">mobile</a>
                <a href="">merch</a>
                <a href="">official skins</a>
                <a href="">redeem</a>
                <div style="background-color: red; padding: 0 8px; height: 44px;">
                    <a href="">buy rust</a>
                </div>
                <div style="background-color: red; padding: 0 8px; height: 44px;">
                    <a href="/login">Login</a>
                </div>
            </nav>
        </div>
    </header>
</body>