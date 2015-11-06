<?php
class Theme {
    public $id = 0;
    public $theme = "";
    public function validate(){
        if($this->theme != ""){
            return true;
        }else{
            return false;
        }
    }
    public function toString(){
        return "Theme: $this->theme";
    }
}
?>