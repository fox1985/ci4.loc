<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'blog';
    protected $primaryKey = 'id';

    protected $allowedFields = ['title', 'excerpt', 'content'];
    
    protected $useSoftDeletes =true;
     // Dates
     protected $useTimestamps = true;
     protected $dateFormat    = 'datetime';
     protected $createdField  = 'created_at';
     protected $updatedField  = 'updated_at';
     protected $deletedField  = 'deleted_at';
   
    
}





?>