<?php

class Payment_model extends Model {

    public function __construct() {
        parent::__construct();
        $this->setHead();
    }

    function init() {
        for ($index = 1; $index < 12; $index++) {
            $this->db->insert("school_fees", array("class" => $index, "1st" => 30000, "2nd" => 30000, "3rd" => 40000)); 
        }
    }

    public function doshit() {
        for ($i = 2015; $i < 2100; $i++) {
//            for ($j = 2016; $j < 2100; $j++) {
            $j = $i + 1;
            $namie = $i . "/" . $j;
            $param = array(
                "name" => $namie
            );
            $this->db->insert("sessions", $param);
//            }
        }
        $this->getNotifier("kop");
    }

    public function setHead() {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
        header('Access-Control-Max-Age: 1000');
        header('Access-Control-Allow-Headers: Content-Type');
    }

    public function getM($e) {

        $sth = $this->db->select("select * from talks where `recpt` = :recpt", array(":recpt" => $e));
        echo json_encode($sth);
    }

    public function allWorkers() {
        return $this->db->select("select * from users");
    }

    public function fileTrans() {
        $_POST['msg'] = FILES . $_POST['msg'];
        $this->db->insert("talks", $_POST);
        echo "Sent!";
    }

    public function getme($param) {
        $sth = $this->db->select("select  `id`, `fName`, `sName`, `uName`, `pWord`, `gender`, `pix`, `status` from details where uName =  :username LIMIT 1", array(':username' => $param));
        $sth = $sth[0];
        $temp = $sth["pix"];
        $resp = array();
        $resp["id"] = $sth["id"];
        $resp["fName"] = $sth["fName"];
        $resp["sName"] = $sth["sName"];
        $resp["uName"] = $sth["uName"];
        $resp["pWord"] = $sth["pWord"];
        $resp["gender"] = $sth["gender"];
        $resp["pix"] = file_get_contents($temp);
        echo json_encode($resp);
    }

    public function registerUser() {
        $this->setHead();
        $sth = $this->db->select("select  `name`  from innies where name =  :username LIMIT 1", array(':username' => $_POST['name']));
        if (count($sth) > 0) {
//echo 'logged In';
            echo '30';
//            echo json_encode($sth);
        } else {
            $ret = array();
//            echo json_encode(array('Response' => "User Does Not Exist"));
            $param = $_POST["name"];
            $pix = $_POST["pix"];
            $data = explode(',', $pix);
//    fwrite($ifp, base64_decode($data[1])); 
            if (file_put_contents("dp/" . $_POST['name'] . $_POST['extt'], base64_decode($data[1]), FILE_USE_INCLUDE_PATH)) {
                $_POST["pix"] = "dp/" . $_POST['name'] . $_POST['extt'];
            }
            unset($_POST['extt']);
            $this->flushNotifier($_POST['notifier']);
//            $this->updateNotifier($user, $notifier);
            $this->db->insert("innies", $_POST);
//            print_r( 'Success');
//            $st = $this->db->select("select  *  from innies where name = :username LIMIT 1", array(':username' => $param));
//            $st = $this->db->select("select  `name`,`pix`,`gender`,`notifier` from innies where name != :username", array(':username' => $param));
//                   echo json_encode($st);
            $this->getusers($param);
//            print_r($st);
//            foreach ($st as $sth) {
////            $sth = $st[0];
////                 print_r($sth);
//                $temp = $sth["pix"];
//                $resp = array();
//                $resp["name"] = $sth["name"];
////                $resp["sName"] = $sth["pix"];
//                $resp["gender"] = $sth["gender"];
//                $resp["notifier"] = $sth["notifier"];
//                $resp["pix"] = file_get_contents($temp);
//                array_push($ret, $resp);
////                print_r();
//            }
//            echo json_encode($ret);
        }
//        json
//        $_POST['pix'] = FILES . $_POST['pix'];
//        $this->db->insert("details", $_POST);
//        echo 'Registration Completed!';
    }

    public function getNow($param) {
        $sth = $this->db->select("select  `id`, `fName`, `sName`, `uName`, `pWord`, `gender`, `pix`, `status` from details where uName =  :username LIMIT 1", array(':username' => $param));
        echo json_encode($sth);
    }

    public function getPix() {
        $sth = $this->db->select("select `picture`  from registration where username =  :username LIMIT 1", array(':username' => $_POST['uname']));
        echo$sth[0]["picture"];
    }

    public function bringFile() {
        $sth = $this->db->select("select `file` from sendfile where id = " . $_POST['id'] . " and status = 0");
        echo $sth[0]["file"];
    }

    public function logout() {
        $this->db->update('registration', array('status' => "1"), "`username`  =  '{$_POST['uname']}'");
        echo json_encode(array('Response' => "Done"));
    }

    public function sendFile() {
//        onlinemsg
        $this->db->insert("sendfile", $_POST);
        echo 'File Sent';
    }

    public function sendMsg() {
//        onlinemsg
//        unset($_POST["senderPix"]);
//        $myman = $this->getUser($_POST["receiver"]);
        $myman = 'APA91bGXRrDhce4d7Oo35v0VaWsAwn5vTbTlozLKPxAlftyz_C7Xt-owb8btnXgq4nnaR1kqewjxZIpwhvTyK6LzW9cVxcWY2nfqg8psgrTYClYF6VUbbdA6s4l3FrwwM0nVNvUrHui6';
//        
        $msg = "heyo";
//        echo $myman . " v " . $_POST["message"];
        $this->puShMessage($myman, $msg);
//        $this->db->insert("talks", $_POST);
    }

    public function getUser($param) {
        $sth = $this->db->select("select  `regId` from details where uName =  :username LIMIT 1", array(':username' => $param));
//          echo $sth[0]["regId"];
        $this->puShMessage($sth[0]["regId"], "test no");
//        return $sth[0]["regId"];
//        echo $sth[0]["regId"];
//          $this->puShMessage($sth[0]["regId"], "test no");
    }

    public function puShMessage($user, $message) {
        // Message to be sent
//$message = $_POST['message'];
// Set POST variables
        $url = 'https://android.googleapis.com/gcm/send';
        $fields = array(
            'registration_ids' => array("$user"),
            'data' => array("message" => $message),
        );
        $headers = array(
//            'Authorization: key=AIzaSyDNiAKDiggWtlMrJIWbuME97EZExHPjA-Q',
            'Authorization: key=AIzaSyBN9xEAw72FZoXOWFu5IA4pUg3wDgdWBLo',
//            AIzaSyBLLZ1X4SPXvprUFTRJRvvq_A0QrjZnAZ0
//            'Authorization: key=AIzaSyBLLZ1X4SPXvprUFTRJRvvq_A0QrjZnAZ0',
            'Content-Type: application/json'
        );

// Open connection
        $ch = curl_init();

// Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

// Execute post
        $result = curl_exec($ch);

// Close connection
        curl_close($ch);
        echo $result;
    }

    public function Offlineusers() {
        $sth = $this->db->select("select `id`, `firstname`, `secondname`, `username`, `password`, `gendar`, `status` from registration where status = 0");
        echo json_encode($sth);
    }

    public function users() {
        $sth = $this->db->select("select `id`, `firstname`, `secondname`, `username`, `password`, `gendar`, `status` from registration where status = 1");
        echo json_encode($sth);
    }

    public function getFiles() {
//        "select * from sendfile where receiver ='" + used + "' and status = 0"
//        echo $_POST['uname'];
//         `file`, `name`,
        $sth = $this->db->select("select `id`, `name`,`sender`,`receiver`,`direct`,`status` from sendfile where receiver = '" . $_POST['uname'] . "' and status = 0");
        echo json_encode($sth);
    }

    public function updateFiles() {
//            "update sendfile set status = 1 where name='" + d + "' and receiver ='" + used + "'"
        $this->db->update('talks', array('status' => "1"), "`id`  =  '{$_POST['id']}'");
        echo json_encode(array('Response' => "Done"));
    }

    public function updateFiles2() {
//            "update sendfile set status = 1 where name='" + d + "' and receiver ='" + used + "'"
        $this->db->update('talks', array('status' => "2"), "`id`  =  '{$_POST['id']}'");
        echo json_encode(array('Response' => "Done"));
    }

    public function updateFiles3() {
//            "update sendfile set status = 1 where name='" + d + "' and receiver ='" + used + "'"
        $this->db->update('talks', array('status' => "3"), "`id`  =  '{$_POST['id']}'");
        echo json_encode(array('Response' => "Done"));
    }

    public function doLogin() {
//        $this->setHead();
//        print_r($_POST);
        $notifier = $_POST['notifier'];
        $user = $_POST['name'];
        $password = $_POST['peeword'];

//        $sth = $this->db->select("select  `id`, `fName`, `sName`, `uName`, `pWord`, `gender`, `pix`, `status` from details where uName =  :username LIMIT 1", array(':username' => $_POST['uname']));
        $sth = $this->db->select("select  `name`,`peeword`,`notifier`  from innies where name =  :username LIMIT 1", array(':username' => $user));

        if (count($sth) > 0) {
            $sth = $sth[0];
//            print_r($sth);
            if ($sth['peeword'] != $password) {
                echo '10';
                return;
            }
            $this->flushNotifier($notifier);
            $this->updateNotifier($user, $notifier);
//            echo json_encode($sth);
        } else {
            echo "50";
        }
    }

    public function flushNotifier($notifier) {
        $this->db->update('innies', array('notifier' => ""), "`notifier`  =  '$notifier'");
    }

    public function updateNotifier($user, $notifier) {
        $this->db->update('innies', array('notifier' => "$notifier"), "`name`  =  '$user'");
        $this->getusers();
//        echo 'logged in';
    }

    public function onlineMsgs() {
        $sth = $this->db->select("select * from talks where `recpt` = :recpt", array(":recpt" => $_POST["recpt"]));
        echo json_encode($sth);
    }

    public function UpdateStatus() {
        $this->db->update('details', array('status' => "0"), "`uName`  =  '{$_POST['uname']}'");
        echo json_encode(array('Response' => "Done"));
    }

    public function updateMsgs() {
//            "update onlinemsg set status =1 where id =" + rs.getInt("id")
        $this->db->update('talks', array('status' => "1"), "`id`  =  '{$_POST['id']}'");
        echo json_encode(array('Response' => "Done"));
    }

//get services categories
    public function process_service() {
        $sth = $this->db->select("SELECT * FROM service_category");
        return $sth;
    }

    public function addNewUsr() {
        $this->db->insert("users", $_POST);
        echo "User added";
    }

    public function getusers($user = null) {
        if ($user == null) {
            $nee = $this->db->select("SELECT * FROM `innies` ");
        } else {
            $nee = $this->db->select("SELECT * FROM `innies` WHERE `name` !=:user ", array(':user' => $user));
        }
        $reply = array();

        foreach ($nee as $sth) {
            $temp = $sth["pix"];
            $resp = array();
            $resp["name"] = $sth["name"];
            $resp["gender"] = $sth["gender"];
            $resp["notifier"] = $sth["notifier"];
            $resp["pix"] = base64_encode(file_get_contents($temp));
//            $curr["pix"] = file_get_contents($curr);
            array_push($reply, $resp);
        }
        echo json_encode($reply);
    }

    public function peeEm() {
        $this->setHead();
        $this->db->insert("talks", $_POST);
//        $this->db->select("talks", $_POST); 
        $sth = $this->db->select("select * from talks where `recpt` = :recpt", array(":recpt" => $_POST["recpt"]));
//        echo json_encode($sth);
        $this->puShMessage($this->getNotifier($_POST['recpt']), json_encode($sth));
//        echo "Sent!";
    }

    public function getNotifier($uname) {
        $sth = $this->db->select("SELECT notifier FROM `innies` WHERE `name`=:recpt", array(":recpt" => $uname));
        echo ($sth[0]['notifier']);
//        print_r($sth);
    }

    public function userProfile() {
        echo json_encode($this->db->select("SELECT * FROM `details` WHERE `uName`=:user ", array(':user' => $_POST['user'])));
    }

    public function get_notifier() {
        $tee = $this->db->select("SELECT notifier FROM `innies` WHERE `name`=:user ", array(':user' => $_POST['uname']));
//       echo $tee;
        echo $tee[0]["notifier"];
    }

    public function upDateRegId() {
        $this->db->update('details', array('regId' => " {$_POST['regId']}"), "`uName`  =  '{$_POST['uname']}'");
        echo json_encode(array('Response' => "Done"));
    }

}
