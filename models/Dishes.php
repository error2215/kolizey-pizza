<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 13.01.2019
 * Time: 17:17
 */

namespace app\models;


use yii\db\ActiveRecord;

class Dishes extends ActiveRecord
{
    public static function tableName()
    {
        return 'dishes';
    }

    public function getCategory(){
        $this->hasOne(Categories::className(), ['id' => 'category_id']);
    }
}