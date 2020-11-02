<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "loaiditich".
 *
 * @property int $id
 * @property string|null $TenLoaiDiTich
 * @property string|null $MoTa
 * @property string|null $Code
 *
 * @property DiaDanh[] $diadanhs
 */
class LoaiDiTich extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'loaiditich';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MoTa'], 'string'],
            [['TenLoaiDiTich'], 'string', 'max' => 250],
            [['Code'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'TenLoaiDiTich' => 'Tên loại di tích',
            'MoTa' => 'Mô tả',
            'Code' => 'Code',
        ];
    }

    /**
     * Gets query for [[Diadanhs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDiadanhs()
    {
        return $this->hasMany(DiaDanh::className(), ['LoaiDiTich_id' => 'id']);
    }
    public function beforeSave($insert)
    {
        $this->TenLoaiDiTich=trim($this->TenLoaiDiTich);
        $this->Code=API_H17::createCode($this->TenLoaiDiTich);
        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }
    public function beforeDelete()
    {
        DiaDanh::deleteAll(['LoaiDiTich_id' => 'id']);
        return parent::beforeDelete(); // TODO: Change the autogenerated stub
    }
}