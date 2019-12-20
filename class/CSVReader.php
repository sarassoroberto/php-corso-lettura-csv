<?php

class CSVReader {
    private $data ;
    private $res;
    public function __construct($file) {
        
        $csv_file = new SplFileObject($file);

        $headers = $csv_file->fgetcsv();
        $res = [];
        while (!$csv_file->eof()) {    
            
            $row_content = $csv_file->fgetcsv();
            $res[] = array_combine($headers,$row_content);
        }
        $this->data = $res;
    }

    public function getDataByKey($key,$value)
    {
        $res = array_filter($this->data,function($row) use ($key,$value){
                return $row[$key] == $value;
        });

        $this->res = $res;
        return $this;
    }

    public function getDataByIndex($index)
    {
        $this->res = $this->data[$index];
        return $this;
    }

    public function getAllKeyValues($key){
        $this->res = array_unique (array_column($this->data,$key));
        return $this;
    }



    public function limit($limit=10)
    {
         
        $this->res = array_splice($this->res,0,$limit); 
        return $this;
    }

    public function getResult()
    {
        return $this->res;
    }

    public function count()
    {
        return count($this->res);
    }




}




function parseP($content){

    return "<p>".implode("</p><p>",array_filter(explode("-",$content)))."</p>";

}
function parseList($content){

    return "<ul><li>".implode("</li><li>",array_filter(explode("-",$content)))."</li></ul>";

}

function wordsLimit($s, $limit=10) {
    return preg_replace('/((\w+\W*){'.($limit-1).'}(\w+))(.*)/', '${1}', $s)."...";   
}
