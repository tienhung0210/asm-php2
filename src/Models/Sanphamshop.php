<?php


namespace Admin\Test\Models;

use Admin\Test\Commons\Model;

class Sanphamshop extends Model
{
    protected string $tableName = 'tb_san_pham';

    public function all() {
        return $this->queryBuilder
            ->select(
                '*'
            )
            ->from($this->tableName, 'sp')
            ->innerJoin('sp', 'tb_anh', 'a', 'a.id_san_pham = sp.id_san_pham')
            ->innerJoin('sp', 'tb_danh_muc', 'dm', 'dm.id_danh_muc = sp.id_danh_muc')
            ->orderBy('sp.id_san_pham', 'desc')
            ->fetchAllAssociative();
    }
    
}
