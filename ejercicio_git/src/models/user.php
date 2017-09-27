<?php
namespace models;
require_once '../app/db/mysql.php';

class user {
    private $data =
    [ 'id'=>'',
     'name'=>'',
     'firstname'=>'',
     'lastname'=>'', 
     'email'=>'',];
     public function __get($var){
          return $this->data[$var];
     }

     public function __set($var, $value) {
         if (array_key_exists($var->data))
        $this->data[$var]=$value;

     }

    public static function findbyid($id) {
        //crear una conexion a mysql
     $cnn =new mysql(); //cnn es un objeto de tipo mysql con conexion a base de datos biblioteca
     //definir la consulta
     $sql = sprintf("select * from users where id=%d",$id);

     //ejecutar consulta
     $rst = $cnn->query($sql);
     /*
     *el metodo query() de la clase myqli recibe como parametro la consulta a ejecutar,
     *con una conexion abierta, los posibles resultados son: false para cuando falla
     *la conexion, ejecucion, sintaxis, etc d   e la consulta, en caso de no fallar si
     * la consulta es SELECT, SHOW, EXPLAIN, el resultado seria un objeto de tipo myqli_result,
     *y en caso de ser INSERT, UPDATE, DELETE retorna bool (true)
     */

     //evaluar resultado
     if (!$rst) { //pregunta si falla la conexion, ejecucion-
         die('Errorr en la consulta');
      }elseif($rst->num_rows > 1) {
          $u = $rst->fetch_assoc();
          $user =new user();
          $user ->id =$u['id'];
          $user ->name =$u['name'];
          $user ->firstname =$u['firstname'];
          $user ->lastname =$u['lastname'];
          $user ->email =$u['email'];
          return $user;

      } else {
          return false;
      }
      
    }
    
    public static function all() { 
        $cnn= new mysql();
        $sql="SELCT id,name,firstname,lastname,email,FROM users";
        $rst=$cnn>query($sql);
        $cnn->close(); 

        if(!$rst) {
            die('Error en la conulta');
        } elseif($rst->num_rows >0)
    }
    $users=array();
    while($u=$rst->fetch_assoc()){
        $user=new user();
        $user=id=$u['id'];
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
    
        
    public static function create($name,$firstname,$lastname,$email,$passwd) 
        {
            if (!ValidateExistingUser()) 
            {
            $cnn =new mysql(); 
            $sql "INSERT INTO users (name,firstname,lastname,email,password)";
            $sql.= sprintf("values ('%s','%s','%s,'%s','%s')"), $name, $email;
            $rst = $cnn->query($sql);
           
         
            if (!$rst){
                die('error en consulta');
            } else {
                user = new user();
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
            $sql = ("SELECT id,firstname,lastname,email FROM users WHERE name= '%s' AND password='%s", $name, $passwd);
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
         }
    }