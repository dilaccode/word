<?php namespace App\Models;

use CodeIgniter\Model;

class WordModel extends Model
{
    protected $table = 'word';

    public function getWords()
    {
        return $this->findAll();
    }
}