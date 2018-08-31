<?php
namespace Jason\Validation;

class Validate
{
    public $validation = [];

    public $errors = [];

    private $data = [];

    public function email($value){
        if(filter_var($value, FILTER_VALIDATE_EMAIL)){
            return true;
        }

        return false;
    }

    public function notEmpty($value){

        if(!empty($value)){
            return true;
        }

        return false;
    }

    public function check($input){
        $this->data = $input;

        foreach(array_keys($this->validation) as $fieldName){
            $this->rules($fieldName);
        }
    }

    private function rules($field){

        foreach($this->validation[$field] as $rule){
            if($this->{$rule['rule']}($this->data[$field]) === false){
                $this->errors[$field] = $rule;
            }
        }

    }

    public function error($field){
        if(!empty($this->errors[$field])){
            return $this->errors[$field]['message'];
        }
    }

    public function userInput($field){
        return (!empty($this->data[$field])?$this->data[$field]:null);
    }
}