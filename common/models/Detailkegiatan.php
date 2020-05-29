<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "detailkegiatan".
 *
 * @property int $iddetailkeg
 * @property string|null $idkegiatan
 * @property string|null $nim
 * @property string|null $detailkegiatan
 * @property int|null $statusdetailkeg
 * @property string|null $tglkegiatan
 * @property string|null $tempatkegiatan
 * @property string|null $penyelenggara
 * @property int|null $validasi
 *
 * @property Kegiatan $idkegiatan0
 * @property Uploaddatadukung[] $uploaddatadukungs
 * @property Validasi[] $validasis
 */
class Detailkegiatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detailkegiatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['iddetailkeg'], 'required'],
            [['iddetailkeg', 'statusdetailkeg', 'validasi'], 'integer'],
            [['detailkegiatan', 'tempatkegiatan'], 'string'],
            [['tglkegiatan'], 'safe'],
            [['idkegiatan'], 'string', 'max' => 5],
            [['nim'], 'string', 'max' => 18],
            [['penyelenggara'], 'string', 'max' => 85],
            [['iddetailkeg'], 'unique'],
            [['idkegiatan'], 'exist', 'skipOnError' => true, 'targetClass' => Kegiatan::className(), 'targetAttribute' => ['idkegiatan' => 'idkegiatan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'iddetailkeg' => 'Iddetailkeg',
            'idkegiatan' => 'Idkegiatan',
            'nim' => 'Nim',
            'detailkegiatan' => 'Detailkegiatan',
            'statusdetailkeg' => 'Statusdetailkeg',
            'tglkegiatan' => 'Tglkegiatan',
            'tempatkegiatan' => 'Tempatkegiatan',
            'penyelenggara' => 'Penyelenggara',
            'validasi' => 'Validasi',
        ];
    }

    /**
     * Gets query for [[Idkegiatan0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdkegiatan0()
    {
        return $this->hasOne(Kegiatan::className(), ['idkegiatan' => 'idkegiatan']);
    }

    /**
     * Gets query for [[Uploaddatadukungs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUploaddatadukungs()
    {
        return $this->hasMany(Uploaddatadukung::className(), ['iddetailkeg' => 'iddetailkeg']);
    }

    /**
     * Gets query for [[Validasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getValidasis()
    {
        return $this->hasMany(Validasi::className(), ['iddetailkeg' => 'iddetailkeg']);
    }
}
