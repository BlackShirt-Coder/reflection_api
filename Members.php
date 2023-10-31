<?php
namespace App;
class Members
{
    private $is_auth=false;
    private $detailInfo=[
      "name"=>"mgmg",
      "age"=>23,
      "school"=>"Yangon"
    ];
    public function __construct()
    {
        echo "constructor";
    }

    public  function getDetailInfo(string &$data,$idx){

        echo "I'm beging invoked";
//        return $this->detailInfo;
    }
    public function setAuth($bol){
        $this->is_auth=$bol;
    }
    public function getAuth(){
        return $this->is_auth;
    }
}