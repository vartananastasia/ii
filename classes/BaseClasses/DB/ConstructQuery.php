<?
namespace BaseClasses\DB;

use BaseClasses\DB\DataBaseExecute as DB;

class ConstructQuery extends DB
{
    protected $query;

    public function insert($fields, $table)
    {
        $in_to = '';
        $what =  '';
        foreach ($fields as $key=>$field){
            $in_to .= ', '.$key;
            $what .= ', "'.$field.'"';
        }
        $this->query = 'INSERT INTO '.$table.'(  ID '.$in_to.')VALUES(0'.$what.');';
        return $this;
    }

    public function showColumns($table)
    {
        $this->query = 'show columns from '.$table.';';
        return $this;
    }

    public function select($table)
    {
        $this->query = 'select * from '.$table.';';
        return $this;
    }

    public function showTables()
    {
        $this->query = 'show tables;';
        return $this;
    }

    public function where($field, $value)
    {
        $this->query = str_replace(';', '', $this->query);
        $j = explode('_', $field);
        $field_spec = end($j);
        if ($field_spec == 'id'){
            $this->query .= ' where ' . $field . '=' . $value;
        }else {
            $this->query .= ' where ' . $field . '="' . $value . '"';
        }
        return $this;
    }

    public function CreateTable($tableName, $tableFields)
    {
        $fields = '';
        foreach ($tableFields as $key => $field){
            $fields .= $field.' varchar(255) DEFAULT NULL,';
        }
        $this->query = "CREATE TABLE feedback.form_" . $tableName . " (  ID int(11) NOT NULL AUTO_INCREMENT,  ". $fields ."  PRIMARY KEY (ID));";
        return $this;
    }

    public function setPrimaryKey($tableName, $key){
        $this->query = 'ALTER TABLE ' . $tableName . ' ADD PRIMARY KEY (' . $key . ');';
        return $this;
    }
}