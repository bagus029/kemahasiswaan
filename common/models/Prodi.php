<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "prodi".
 *
 * @property string $IDPRODI
 * @property int|null $KODEPRODI
 * @property int|null $KODEPRODIUNSOED
 * @property int|null $IDJENJANG
 * @property int|null $IDFAKULTAS
 * @property string|null $NAMAPRODI
 * @property string|null $ISAKTIF
 * @property string|null $KODEPRODILAMA
 *
 * @property Mahasiswa[] $mahasiswas
 * @property Fakultas $iDFAKULTAS
 * @property Jenjang $iDJENJANG
 */
class Prodi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prodi';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db3');
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDPRODI'], 'required'],
            [['KODEPRODI', 'KODEPRODIUNSOED', 'IDJENJANG', 'IDFAKULTAS'], 'integer'],
            [['IDPRODI', 'KODEPRODILAMA'], 'string', 'max' => 4],
            [['NAMAPRODI'], 'string', 'max' => 80],
            [['ISAKTIF'], 'string', 'max' => 1],
            [['IDPRODI'], 'unique'],
            [['IDFAKULTAS'], 'exist', 'skipOnError' => true, 'targetClass' => Fakultas::className(), 'targetAttribute' => ['IDFAKULTAS' => 'IDFAKULTAS']],
            [['IDJENJANG'], 'exist', 'skipOnError' => true, 'targetClass' => Jenjang::className(), 'targetAttribute' => ['IDJENJANG' => 'IDJENJANG']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDPRODI' => 'Idprodi',
            'KODEPRODI' => 'Kodeprodi',
            'KODEPRODIUNSOED' => 'Kodeprodiunsoed',
            'IDJENJANG' => 'Idjenjang',
            'IDFAKULTAS' => 'Idfakultas',
            'NAMAPRODI' => 'Namaprodi',
            'ISAKTIF' => 'Isaktif',
            'KODEPRODILAMA' => 'Kodeprodilama',
        ];
    }

    /**
     * Gets query for [[Mahasiswas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswas()
    {
        return $this->hasMany(Mahasiswa::className(), ['IDPRODI' => 'IDPRODI']);
    }

    /**
     * Gets query for [[IDFAKULTAS]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIDFAKULTAS()
    {
        return $this->hasOne(Fakultas::className(), ['IDFAKULTAS' => 'IDFAKULTAS']);
    }

    /**
     * Gets query for [[IDJENJANG]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIDJENJANG()
    {
        return $this->hasOne(Jenjang::className(), ['IDJENJANG' => 'IDJENJANG']);
    }
}
