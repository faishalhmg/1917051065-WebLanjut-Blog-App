<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class PasienModel extends Model
{
    protected $table = "pasien";
    protected $primaryKey = "id_pasien";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_pasien', 'nik','nama', 'jenis_kelamin', 'no_telp', 'email', 'wilayah','alamat','status'];

    
}
