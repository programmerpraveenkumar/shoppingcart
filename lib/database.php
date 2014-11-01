<?php
class database{    
    /*database configuration files*/   
    protected $photoPath='photos';
    protected $photoPathHeader=HEADER_PATH;
    protected $photoPathGallery=GALLERY_PATH;
    public $mysql;
    var $db=array("user"=>"addressp","host"=>"localhost","pass"=>"","databasename"=>"estudy");    
    public function __construct(){        
        $this->mysql=new mysqli($this->db["host"],$this->db["user"],$this->db["pass"],$this->db["databasename"]);
    }
    public function storedProcedure($query){
        $qury='call '.$query;        //echo $qury;
       //die($qury);
        $res=$this->mysql->query($qury);
        if(!$res){ 
            error::developerError($this->mysql->error.'</br> '.$qury.$this->mysql->errno);
            if(DEBUG)
                echo "error data: ".$this->mysql->error.'</br> '.$qury.$this->mysql->errno;
            //die("error data: ".$this->mysql->error.'</br> '.$qury.$this->mysql->errno);
                    
        }
        return $res;        
    } 
    protected function getSql(){
        return $this->mysql;
    }
    private function error(){
    die($this->mysql->error);
    }
    protected function numrowscheck($obj){
        if($obj->num_rows==0)
            return true;
        return false;
    }
    public function mail__initialcreate($data){
         $to = "$data[shopname] <$data[mailid]>";
$subject = "Successfully Created";

$message = "
<html>
<head>
<title>New Registration</title>
</head>
<body style=\"border 1px solid #e9e9e9\">
<p style=\"color:#EC5E27;font-size:18px;\">Thanks for creating a webpage for $data[shopname] with <a href=\"http://addresspager.com\">addresspager.com</a>!</p>
<p style=\"color:#EC5E27;font-size:18px;\">To Preview your webpage cick this link <a href=\"http://addresspager.com/$data[url]\">addresspager.com</a>!</p>
<table align=\"center\" width=\"600\" style=\"border 1px solid #e9e9e9\">

<tr><th>Features of using addresspager</th></tr>
<tr><td><span style=\"background-color:#1FFFAE;font-size:20px;padding:0 10px;\">Free web page for your shop</span></td></tr>
<tr><td><span style=\"font-size:20px;padding:0 10px;\">Create Your Menu</span><span style=\"color:red;\">free</span></td></tr>
<tr><td><span style=\"font-size:20px;padding:0 10px;\">Add content for the menu and page</span><span style=\"color:red;\">free</span></td></td></tr>
<tr><td><span style=\"font-size:20px;padding:0 10px;\">Add photos about your shop</span><span style=\"color:red;\">free</span></td></tr>
<tr><td><span style=\"font-size:20px;padding:0 10px;\">Get the feed back about your shop from customers </span><span style=\"color:red;\">free</span></td></tr>
<tr><td><span style=\"font-size:20px;padding:0 10px;\">Make your business to online</span><span style=\"color:red;\">free</span></td></tr>
<tr><td><span style=\"font-size:20px;padding:0 10px;\">Mobile application for your webpage</span><span style=\"color:red;\">free</span></td></tr>
<tr><td><a style=\"font-size:20px;padding:0 10px;color:#1661E6\" href=\"http://addresspager.com/login\"><strong>Click Here to Login</strong></a></td></tr>
</table>
<i>You have received this mail because you recently created a webpage for your shop This is a system-generated e-mail, please don't reply to this message</i>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From:addresspager.com <no-reply@addresspager.com>' . "\r\n";
$send=array("to"=>$to,"subject"=>$subject,"message"=>$message,"headers"=>$headers);
$this->mailsend($send);
    }
    private function mailsend($rec){        
        //print_r($rec);
       mail($rec["to"],$rec["subject"],$rec["message"],$rec["headers"]);
               
   }
    public function oneFetchstoredprocedure($query){
        $data=$this->storedProcedure($query);
        if($this->mysql->errno=='1062'){
            return (object)array("result"=>"exist");
        }
        return $data->fetch_object();
    }
    protected function redirectadmin($path){       
       //$val=session::get('shopname');       
        $this->redirect('admin/'.$path);        
    }
    protected function errorredirect(){
        $this->redirect('?msg=error');
    }
    protected function redirect($URL){
        header("location:".PATH.$URL);
    }
    public function DB_redirect($url){
        $this->redirect($url);
        return false;        
    }
    public function DB_adminredirect($URL){
            header("location:".ADMIN.$URL);
    }
    protected function getShopid(){        
        return session::get('admin_shopid');
    }
    public function freeresult(){
        $this->mysql->next_result();
    }
    protected function validation($getvalue){                            
        $tmp='';
            $string=explode(',',$getvalue);            
            foreach($string  as $val){                
                $tmp=trim($_POST[$val]);                
                $tmp=$this->mysql->real_escape_string($tmp);
                $tmp=addslashes($tmp);                
               $_POST[$val]=$tmp;
            }
            return $_POST;
    //    return true;
    }
    public function DB_refreshData($data){
        return $this->validation($data);
    }
    protected function createThunmbnail($width,$height,$src){
        return file_get_contents($src);
        
        //'__DEP__ due to compression done on while uploading'
//        if(list($width_org,$height_org,$typ)=getimagesize($src)){
//            //$height=($width/$width_org)*$height_org;
//        }else{
//        die('image is not in correct format from database php');    
//        }       
//        $tn=imagecreatetruecolor($width, $height);
//        $image=imagecreatefromjpeg($src);
//        imagecopyresized($tn, $image,0,0,0,0,$width, $height,$width_org,$height_org);
//        return imagejpeg($tn);        
    }
    public function photoStore($src,$path){
         if($fileType=getimagesize($src)){
             switch($fileType['mime']){
                    case 'image/jpeg':
                        $image=  imagecreatefromjpeg($src);
                     break;
                    case 'image/gif':
                        $image=  imagecreatefromgig($src);
                    break;
                    case 'image/png':
                        $image=  imagecreatefrompng($src);
                    break;
                    default :
                        $image='';
                    break;
            }//end switch
            if($image!=''){
               imagejpeg($image,$path,50);
              return true;                
            }
           }//end get image size
           else{
               error::developerError('image error from database.php(lib)');
               return FALSE;    
           }
    
    }//end funciton photo store
}
?>