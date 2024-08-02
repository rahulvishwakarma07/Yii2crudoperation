<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public static function tableName()
    {
        return 'product'; // Name of your table
    }

    public function rules()
    {
        return [
            [['title', 'description', 'category'], 'required'],
            [['description'], 'string'],
            [['category'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }
}
?>