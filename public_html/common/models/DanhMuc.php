<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "danhmuc".
 *
 * @property int $id
 * @property string|null $TenDanhMuc
 * @property string|null $Code
 * @property int|null $DanhMucCha_id
 *
 * @property Baivietdanhmuc[] $baivietdanhmucs
 * @property DanhMuc $danhMucCha
 * @property DanhMuc[] $danhMucs
 * @property Diadanh[] $diadanhs
 */
class DanhMuc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'danhmuc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['DanhMucCha_id'], 'integer'],
            [['TenDanhMuc'], 'required','message'=>'Tên danh mục không được để trống'],
            [['TenDanhMuc', 'Code'], 'string', 'max' => 200],
            [['DanhMucCha_id'], 'exist', 'skipOnError' => true, 'targetClass' => DanhMuc::className(), 'targetAttribute' => ['DanhMucCha_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'TenDanhMuc' => 'Tên danh mục',
            'Code' => 'Code',
            'DanhMucCha_id' => 'Danh mục cha',
        ];
    }

    /**
     * Gets query for [[Baivietdanhmucs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBaivietdanhmucs()
    {
        return $this->hasMany(BaiVietDanhMuc::className(), ['DanhMuc_id' => 'id']);
    }

    /**
     * Gets query for [[DanhMucCha]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDanhMucCha()
    {
        return $this->hasOne(DanhMuc::className(), ['id' => 'DanhMucCha_id']);
    }

    /**
     * Gets query for [[DanhMucs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDanhMucs()
    {
        return $this->hasMany(DanhMuc::className(), ['DanhMucCha_id' => 'id']);
    }

    /**
     * Gets query for [[Diadanhs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDiadanhs()
    {
        return $this->hasMany(DiaDanh::className(), ['DanhMuc_id' => 'id']);
    }
    public function beforeSave($insert)
    {
        $this->Code=API_H17::createCode($this->TenDanhMuc);
        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }
}
