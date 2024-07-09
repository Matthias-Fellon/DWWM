<?php
require_once __DIR__ . "/../DB_Connect/MyDbConnection.php";

class User {
    public static function createUser($nom, $prenom, $email, $telephone, $password, $role, $image) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $pdo = MyDbConnection::getInstance();
        if($image =! ""){
            copy($image, "../Public/Images/".$image);
        }

        try {
            $stmt = $pdo->prepare('INSERT INTO users (nom, prenom, email, telephone, pwd, nomImage) VALUES (?, ?, ?, ?, ?, ?)');
            $stmt->execute([$nom, $prenom, $email, $telephone, $hashedPassword, $image]);

            $userId = $pdo->lastInsertId();

            $stmt = $pdo->prepare('INSERT INTO UserRoles (user_id, role) VALUES (?, ?)');
            $stmt->execute([$userId, $role]);

            return "Utilisateur ajouté avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public static function deleteUser($id) {
        $pdo = MyDbConnection::getInstance(); 

        try {
            $stmt = $pdo->prepare('DELETE FROM Users WHERE id = ?');
            $stmt->execute([$id]);
            return "Utilisateur supprimé avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public static function updateUser($id, $nom, $prenom, $email, $telephone, $role, $nomImage) {
        $pdo = MyDbConnection::getInstance();
      

        // try {
        //     $stmt = $pdo->prepare('SELECT nomImage FROM Users WHERE id = ?');
        //     $stmt->execute([$id]);
        //     $result = $stmt->fetch(PDO::FETCH_ASSOC);
        //     $nomImage = $result['nomImage'];
        // } catch (PDOException $e) {
        //     return "Erreur d'optention d'image : " . $e->getMessage();
        // }

        // //Renomer le fichier
        // // $imgnewfile=md5($imgfile).time().$extension;
        // // Code for move image into directory
        // move_uploaded_file($_FILES["profilepic"]["tmp_name"],"profilepics/".$imgnewfile);
        // // Query for data insertion
        // $query=mysqli_query($con, "insert into tblusers(FirstName,LastName, MobileNumber, Email, Address,ProfilePic) value('$fname','$lname', '$contno', '$email', '$add','$imgnewfile' )");
        // if ($query) {
        //     echo "<script>alert('You have successfully inserted the data');</script>";
        //     echo "<script type='text/javascript'> document.location ='index.php'; </script>";

        // } else{
        //     echo "<script>alert('Something Went Wrong. Please try again');</script>";
        // }

        $filePath = __DIR__ . '/../Public/Images/' . $nomImage;
        $realPath = realpath('./../Public/Images/');
        $path = $realPath . "\\" . $nomImage;
        echo"$realPath <br>";
        echo" $path <br>";
        if ($nomImage !== ""){
            if (file_exists($path)) {
                if (unlink($path)) {
                    echo "Fichier supprimé avec succès.";
                } else {
                    echo "Échec de la suppression du fichier.";
                }
              } else {
                  copy($image, $realPath); // Obtenir le chemin compler de l'image a uploader
                  echo "Le fichier n'existe pas à l'emplacement spécifié.";
            }
        }
        

        try {
            $stmt = $pdo->prepare('UPDATE Users SET nom = ?, prenom = ?, email = ?, telephone = ?, nomImage = ? WHERE id = ?');
            $stmt->execute([$nom, $prenom, $email, $telephone, $nomImage, $id]);

            $stmt = $pdo->prepare('UPDATE UserRoles SET role = ? WHERE user_id = ?');
            $stmt->execute([$role, $id]);

            return "Utilisateur mis à jour avec succès.";
        } catch (PDOException $e) {
            return "Erreur : " . $e->getMessage();
        }
    }

    public static function getUserById($id) {
        $pdo = MyDbConnection::getInstance(); 
        $stmt = $pdo->prepare('SELECT users.*, userroles.role FROM users JOIN userroles ON users.id = userroles.user_id WHERE users.id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public static function getAllUsers() {
        $pdo = MyDbConnection::getInstance(); 
        $stmt = $pdo->prepare('SELECT * FROM users');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getAllUsersWithRoles() {
        $pdo = MyDbConnection::getInstance(); 
        $stmt = $pdo->prepare('SELECT users.*, userroles.role FROM users JOIN userroles ON users.id = userroles.user_id');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
