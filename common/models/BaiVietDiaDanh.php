<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "chitietbaiviet".
 *
 * @property int $id
 * @property int $DiaDanh_id
 * @property int $BaiViet_id
 *
 * @property Baiviet $baiViet
 * @property DiaDanh $diaDanh
 */
class BaiVietDiaDanh extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'baivietdiadanh';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DiaDanh_id', 'BaiViet_id'], 'required'],
            [['id', 'DiaDanh_id', 'BaiViet_id'], 'integer'],
            [['id'], 'unique'],
            [['BaiViet_id'], 'exist', 'skipOnError' => true, 'targetClass' => BaiViet::className(), 'targetAttribute' => ['BaiViet_id' => 'id']],
            [['DiaDanh_id'], 'exist', 'skipOnError' => true, 'targetClass' => DiaDanh::className(), 'targetAttribute' => ['DiaDanh_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'DiaDanh_id' => 'Dia Danh ID',
            'BaiViet_id' => 'Bai Viet ID',
        ];
    }

    /**
     * Gets query for [[BaiViet]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBaiViet()
    {
        return $this->hasOne(BaiViet::className(), ['id' => 'BaiViet_id']);
    }

    /**
     * Gets query for [[DiaDanh]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDiaDanh()
    {
        return $this->hasOne(DiaDanh::className(), ['id' => 'DiaDanh_id']);
    }
}
