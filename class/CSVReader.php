<?php

class CSVReader {
    private $data ;
    private $res;
    public function __construct($file) {
        
        $csv_file = new SplFileObject($file);

        $headers = $csv_file->fgetcsv();
        
        // var_dump($headers);
        // $row = $csv_file->fgetcsv();
        // var_dump($row);

        // var_dump(array_combine($headers,$row));

        $res = [];
        while (!$csv_file->eof()) {    
        
            $row_content = $csv_file->fgetcsv();
            if(count($row_content)!=1){

                $row = array_combine($headers,$row_content);   
                // var_dump($row_content);
                $res[] = $row;
            }
        }
        $this->data = $res;
    }

    public function getDataByKey($key,$value,$limit=0)
    {
        $res = array_filter($this->data,function($row) use ($key,$value){
                return $row[$key] == $value;
        });

        if($limit){
            $res = array_slice($res,0,$limit);
        }


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

    public function convertToJson()
    {
        $this->res = json_encode($this->res);
    }


    public function transform(callable $callback)
    {
        $this->res = array_map($callback,$this->data,array_keys($this->data));

        return $this;
    }

    /**
     * Get the value of data
     */ 
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the value of data
     *
     * @return  self
     */ 
    public function setData($data)
    {
        $this->data = $data;

        return $this;
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
