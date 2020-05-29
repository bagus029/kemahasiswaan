<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "uploaddatadukung".
 *
 * @property int $iddatadukung
 * @property int|null $iddetailkeg
 * @property string|null $namadatadukung
 * @property string|null $filedatadukung
 * @property string|null $tanggalupload
 * @property string|null $tanggalupdate
 * @property int|null $statusdatadukung
 *
 * @property Detailkegiatan $iddetailkeg0
 */
class Uploaddatadukung extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'uploaddatadukung';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['iddatadukung'], 'required'],
            [['iddatadukung', 'iddetailkeg', 'statusdatadukung'], 'integer'],
            [['tanggalupload', 'tanggalupdate'], 'safe'],
            [['namadatadukung'], 'string', 'max' => 50],
            [['filedatadukung'], 'string', 'max' => 100],
            [['iddatadukung'], 'unique'],
            [['iddetailkeg'], 'exist', 'skipOnError' => true, 'targetClass' => Detailkegiatan::className(), 'targetAttribute' => ['iddetailkeg' => 'iddetailkeg']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'iddatadukung' => 'Iddatadukung',
            'iddetailkeg' => 'Iddetailkeg',
            'namadatadukung' => 'Namadatadukung',
            'filedatadukung' => 'Filedatadukung',
            'tanggalupload' => 'Tanggalupload',
            'tanggalupdate' => 'Tanggalupdate',
            'statusdatadukung' => 'Statusdatadukung',
        ];
    }

    /**
     * Gets query for [[Iddetailkeg0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIddetailkeg0()
    {
        return $this->hasOne(Detailkegiatan::className(), ['iddetailkeg' => 'iddetailkeg']);
    }
}
