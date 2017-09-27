<?php
namespace Models;
use App\DB\MySQL;

class User {
    private $data =
        ['id'=>'',
        'name'=>'',
        'firstname'=>'',
        'lastname'=>'',
        'email'=>''];

    public function __get($var) {
        return $this->data[$var];
    }

    public function __set($var, $value) {
        if (array_key_exists($var, $this->data))
            $this->data[$var] = $value;
    }

    public static function FindById($id) {
        $cnn = new MySQL();
        $sql = sprintf("select * from users where id=%d",$id);
        $rst = $cnn->query($sql);
        
        if (!$rst) {
            die('Error en la consulta');
        } elseif ($rst->num_rows == 1) {
            $u = $rst->fetch_assoc();
            $user = new User();
            $user->id = $id;
            $user->name = $u['name'];
            $user->firstname = $u['firstname'];
            $user->lastname = $u['lastname'];
            $user->email = $u['email'];
            return $user;
        } else {
            return false;
        }
    }
        public static function ALL() { 
            $cnn= new mysql();
            $sql="SELECT id,name,firstname,lastname,email,FROM users";
            $rst=$cnn>query($sql);
            $cnn->close(); 
    
            if(!$rst) {
                die('Error en la conulta');
            } elseif($rst->num_rows >0)
        {
        $users=array();
        while($u=$rst->fetch_assoc()){
            $user=new user();
            $user->id=$u['id'];
            $user->name=$u['name'];
            $user->firstname=$u['firstname'];
            $user->lastname=$u['lastname'];
            $user->email=$u['email'];
            array_push($users,$user);
        }
           return $users;
    } else{
        return false;
    }
}   
            
        public static function create($name,$firstname,$lastname,$email,$passwd) 
            {
                if (!user::ValidateExistingUser($name ,$email))
                {
                $cnn =new mysql(); 
                $sql = "INSERT INTO users (name,firstname,lastname,email,password)";
                $sql.= sprintf("values ('%s','%s','%s','%s','%s')", $name,$firstname,$lastname, $email,$passwd);
                $rst = $cnn->query($sql);
               
             
                if (!$rst){
                    die('error en consulta');
                } else {
                    $user = new user();
                    $user->id =$cnn->insert_id;
                    $user->name=$name;
                    $user->firstname=$firstname;
                    $user->lastname=$lastname;
                    $user->email=$email;
                    $cnn->close();
                    return $user;
                }
             }
    
            } 
            /*
            * ValidateExistingUser
            *
            *param $name string
            *param $email string
            *
            * return bool
            *true= no permitir crear nuevo usuario
            *false= permitir crear nuevo usuario (no existe)
            */
    
             private static function ValidateExistingUser($name, $email) {
                $cnn =new mysql(); 
                $sql = sprintf("SELECT id FROM users WHERE name= '%s' OR email='%s", $name, $email);
                $rst = $cnn->query($sql);
                $cnn->close();
        
                if (!$rst) {
                    die('Error en la consulta');
    
                } elseif ($rst->num_rows > 0) {
                    return true;
                } else {
                    return false;
                }
    
             }
    
             public static function Login($name, $passwd) {
                $cnn =new mysql(); 
                $sql = sprintf("SELECT id,firstname,lastname,email FROM users WHERE ");
                $rst = $cnn->query($sql);
                $cnn->close();
    
                if (!$rst) { //pregunta si falla la conexion, ejecucion-
                    die('Errorr en la consulta');
                 }elseif($rst->num_rows == 1) {
                     $u = $rst->fetch_assoc();
                     $user =new user();
                     $user ->id =$u['id'];
                     $user ->name =$name;
                     $user ->firstname =$u['firstname'];
                     $user ->lastname =$u['lastname'];
                     $user ->email =$u['email'];
                     return $user;
                 }else{
                     return false;
                 }
                
             }
            
             public static function Delete($id) {
                 $cnn = new MySQL();
                 $sql = sprintf("DELETE FROM users WHERE id=%d",$id);
                 $rst = $cnn->query($sql);
                 $cnn->close();

                 if (!$rst) {
                     die("Error en la consulta: $sql");
                 }
             }
             public function Update(){
                $cnn = new MySQL();
                $sql = sprintf("UPDATE users SET firstname='%s',lastname='%s' WHERE id=%d",$this->firstname,$this->lastname,$this->id);
                $rst = $cnn->query($sql);
                $cnn->close();

                if (!$rst) {
                    die("Error en la consulta: $sql");
                } else{
                    return $rst;
                }
             }
             public function ChangePassword($password){
                $cnn = new MySQL();
                $sql = sprintf("UPDATE users SET password=sha('%s') WHERE id=%d",$password,$this->id);
                $rst = $cnn->query($sql);
                $cnn->close();

                if (!$rst) {
                    die("Error en la consulta: $sql");
                } else{
                    return $rst;
                }
             }
    
}