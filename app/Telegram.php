<?php

namespace App;

class Telegram {
    public $text = null;
  

    public function __construct($text){
        $this->text = $text;
    }
    public function send($token,$chat_id){
        $txt = '';
        foreach($this->text as $key => $value){
            $txt .= "<b>".$key.":"."</b> ".$value."%0A";
          };
        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
    }
    public function newUser($token,$chat_id,$msg){
        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$msg}","r");
    }

}