<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kegiatan".
 *
 * @property string $idkegiatan
 * @property int|null $idjeniskegiatan
 * @property string|null $namakegiatan
 * @property float|null $poinkegiatan
 * @property int|null $statuskegiatan
 *
 * @property Detailkegiatan[] $detailkegiatans
 * @property Jeniskegiatan $idjeniskegiatan0
 */
class Kegiatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kegiatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idkegiatan'], 'required'],
            [['idjeniskegiatan', 'statuskegiatan'], 'integer'],
            [['namakegiatan'], 'string'],
            [['poinkegiatan'], 'number'],
            [['idkegiatan'], 'string', 'max' => 5],
            [['idkegiatan'], 'unique'],
            [['idjeniskegiatan'], 'exist', 'skipOnError' => true, 'targetClass' => Jeniskegiatan::className(), 'targetAttribute' => ['idjeniskegiatan' => 'idjeniskegiatan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idkegiatan' => 'Idkegiatan',
            'idjeniskegiatan' => 'Idjeniskegiatan',
            'namakegiatan' => 'Namakegiatan',
            'poinkegiatan' => 'Poinkegiatan',
            'statuskegiatan' => 'Statuskegiatan',
        ];
    }

    /**
     * Gets query for [[Detailkegiatans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailkegiatans()
    {
        return $this->hasMany(Detailkegiatan::className(), ['idkegiatan' => 'idkegiatan']);
    }

    /**
     * Gets query for [[Idjeniskegiatan0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdjeniskegiatan0()
    {
        return $this->hasOne(Jeniskegiatan::className(), ['idjeniskegiatan' => 'idjeniskegiatan']);
    }
}
