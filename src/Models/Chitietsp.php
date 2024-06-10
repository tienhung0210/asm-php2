<?php


namespace Admin\Test\Models;

use Admin\Test\Commons\Model;

class Chitietsp extends Model
{
    protected string $tableName = 'tb_san_pham';

    
    public function findByID($id)
    {
        
        return $this->queryBuilder
        ->select(
            '*'
        )
        ->from($this->tableName, 'sp')
        ->innerJoin('sp', 'tb_anh', 'a', 'a.id_san_pham = sp.id_san_pham')
        ->innerJoin('sp', 'tb_danh_muc', 'dm', 'dm.id_danh_muc = sp.id_danh_muc')
        ->where('sp.id_san_pham = ?')
        ->setParameter(0, $id)
        ->fetchAssociative();
}}