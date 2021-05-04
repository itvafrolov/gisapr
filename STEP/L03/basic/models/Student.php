<?php
namespace app\models;
use use yii\db\ActiveRecord;
class Student extends ActiveRecord
{
    public static function tablename()
    {
        return 'students';
    }
}
?>