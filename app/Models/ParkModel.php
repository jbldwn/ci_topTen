<?php
namespace App\Models;
use CodeIgniter\Model;

class ParkModel extends Model
{
    protected $table = 'list';
    protected $allowedFields = ['item', 'description', 'image'];
}
?>