<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "diadanhdanhmuc".
 *
 * @property int $id
 * @property int $Diadanh_id
 * @property int $Danhmuc_id
 */
class DiaDanhDanhMuc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'diadanhdanhmuc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Diadanh_id', 'Danhmuc_id'], 'required'],
            [['Diadanh_id', 'Danhmuc_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Diadanh_id' => 'Diadanh ID',
            'Danhmuc_id' => 'Danhmuc ID',
        ];
    }
}
