<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cauhinh".
 *
 * @property int $id
 * @property string $ghiChu
 * @property string|null $noiDung
 * @property string|null $name
 */
class Cauhinh extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cauhinh';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ghiChu'], 'required'],
            [['ghiChu', 'noiDung'], 'string'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ghiChu' => 'Ghi Chu',
            'noiDung' => 'Noi Dung',
            'name' => 'Name',
        ];
    }
}
