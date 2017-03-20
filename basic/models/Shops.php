<?php

namespace app\models;
use yii\db\ActiveRecord;

class Shops extends ActiveRecord
{
    public static function tableName()
    {
        return 'shops';  //Имя таблицы в БД shops
    }

}