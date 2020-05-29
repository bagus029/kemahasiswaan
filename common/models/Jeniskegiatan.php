<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jeniskegiatan".
 *
 * @property int $idjeniskegiatan
 * @property string|null $jeniskegiatan
 * @property int|null $statusjeniskegiatan
 *
 * @property Kegiatan[] $kegiatans
 */
class Jeniskegiatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jeniskegiatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idjeniskegiatan'], 'required'],
            [['idjeniskegiatan', 'statusjeniskegiatan'], 'integer'],
            [['jeniskegiatan'], 'string', 'max' => 25],
            [['idjeniskegiatan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idjeniskegiatan' => 'Idjeniskegiatan',
            'jeniskegiatan' => 'Jeniskegiatan',
            'statusjeniskegiatan' => 'Statusjeniskegiatan',
        ];
    }

    /**
     * Gets query for [[Kegiatans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKegiatans()
    {
        return $this->hasMany(Kegiatan::className(), ['idjeniskegiatan' => 'idjeniskegiatan']);
    }
}
