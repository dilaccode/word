<?php namespace App\Models;

use CodeIgniter\Model;

class WordModel extends Model
{
    protected $table = 'word';

    public function getWords()
    {
        return $this->findAll();
    }
    public function GetWord($word){
        $wordObj = (object) $this->where('word', $word)
                   ->first();
        // update stat
        $wordObj->count++;
        $result = $this->db->query("update word set count=$wordObj->count
        where id=$wordObj->id");  
        return $wordObj;
    }
    public function GetLowSeeWords(){
        $limit = 5;
        return $this->db->query("select word,count from word 
        where count = (select min(count) from word)
        limit $limit")
        ->getResult();
    }
}