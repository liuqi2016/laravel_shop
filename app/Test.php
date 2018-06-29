<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class Test extends Model
{
    use Searchable;
    protected $table = 'tests';
    /**
     * 获取模型的索引名称.
     *
     * @return string
     */
    public function searchableAs()
    {
        return 'tests_index';
    }
    /**
     * 获取模型的索引数据数组
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();

        // 自定义数组...

        return $array;
    }
}
