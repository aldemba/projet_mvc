<?php
    
    function json_to_array(string $key):array{
        $dataJson = file_get_contents(PATH_DB);
        $data = json_decode($dataJson,true);
        return $data[$key];
    }
    
    function array_to_json(string $key, array $data){
        
    }

    
