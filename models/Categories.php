<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 13.01.2019
 * Time: 17:16
 */

namespace app\models;


use yii\db\ActiveRecord;

class Categories extends ActiveRecord
{
    public static function tableName()
    {
        return 'categories';
    }

    public function getDishes(){
        return $this->hasMany(Dishes::className(),['category_id' => 'id'])->orderBy(['position' => SORT_ASC]);
    }
}