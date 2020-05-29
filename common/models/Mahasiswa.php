<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property string $NIM
 * @property string|null $NAMA
 * @property string|null $TEMPATLAHIR
 * @property string|null $TGLLAHIR
 * @property string|null $NOHP
 * @property string|null $EMAIL
 * @property string|null $ALAMATASAL
 * @property string|null $NAMAAYAH
 * @property string|null $NAMAIBU
 * @property string|null $PENGHASILANAYAH
 * @property string|null $PENGHASILANIBU
 * @property string|null $JMLTANGGUNGAN
 * @property string|null $NAMAKABUPATEN
 * @property string|null $NAMAPROPINSI
 * @property string|null $TAHUNANGKATAN
 * @property int|null $IDAGAMA
 * @property string|null $IDPRODI
 * @property int|null $IDGOLDAR
 * @property string|null $IDJENDER
 *
 * @property Fileuploadfoto[] $fileuploadfotos
 * @property Groupsurisu[] $groupsurisus
 * @property Groupsurmag[] $groupsurmags
 * @property Groupsurperpk[] $groupsurperpks
 * @property Agama $iDAGAMA
 * @property Prodi $iDPRODI
 * @property Goldarah $iDGOLDAR
 * @property Jender $iDJENDER
 * @property Suratketerangan[] $suratketerangans
 * @property Surijincuti[] $surijincutis
 * @property Surijinpn[] $surijinpns
 * @property Surketnobeswa[] $surketnobeswas
 * @property Surpermk[] $surpermks
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa';
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
            [['NIM'], 'required'],
            [['ALAMATASAL'], 'string'],
            [['IDAGAMA', 'IDGOLDAR'], 'integer'],
            [['NIM'], 'string', 'max' => 10],
            [['NAMA', 'TEMPATLAHIR', 'EMAIL'], 'string', 'max' => 100],
            [['TGLLAHIR', 'NOHP', 'NAMAAYAH', 'NAMAIBU'], 'string', 'max' => 50],
            [['PENGHASILANAYAH', 'PENGHASILANIBU', 'JMLTANGGUNGAN'], 'string', 'max' => 15],
            [['NAMAKABUPATEN', 'NAMAPROPINSI'], 'string', 'max' => 30],
            [['TAHUNANGKATAN', 'IDPRODI'], 'string', 'max' => 4],
            [['IDJENDER'], 'string', 'max' => 1],
            [['NIM'], 'unique'],
            [['IDAGAMA'], 'exist', 'skipOnError' => true, 'targetClass' => Agama::className(), 'targetAttribute' => ['IDAGAMA' => 'IDAGAMA']],
            [['IDPRODI'], 'exist', 'skipOnError' => true, 'targetClass' => Prodi::className(), 'targetAttribute' => ['IDPRODI' => 'IDPRODI']],
            [['IDGOLDAR'], 'exist', 'skipOnError' => true, 'targetClass' => Goldarah::className(), 'targetAttribute' => ['IDGOLDAR' => 'IDGOLDAR']],
            [['IDJENDER'], 'exist', 'skipOnError' => true, 'targetClass' => Jender::className(), 'targetAttribute' => ['IDJENDER' => 'IDJENDER']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'NIM' => 'Nim',
            'NAMA' => 'Nama',
            'TEMPATLAHIR' => 'Tempatlahir',
            'TGLLAHIR' => 'Tgllahir',
            'NOHP' => 'Nohp',
            'EMAIL' => 'Email',
            'ALAMATASAL' => 'Alamatasal',
            'NAMAAYAH' => 'Namaayah',
            'NAMAIBU' => 'Namaibu',
            'PENGHASILANAYAH' => 'Penghasilanayah',
            'PENGHASILANIBU' => 'Penghasilanibu',
            'JMLTANGGUNGAN' => 'Jmltanggungan',
            'NAMAKABUPATEN' => 'Namakabupaten',
            'NAMAPROPINSI' => 'Namapropinsi',
            'TAHUNANGKATAN' => 'Tahunangkatan',
            'IDAGAMA' => 'Idagama',
            'IDPRODI' => 'Idprodi',
            'IDGOLDAR' => 'Idgoldar',
            'IDJENDER' => 'Idjender',
        ];
    }

    /**
     * Gets query for [[Fileuploadfotos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFileuploadfotos()
    {
        return $this->hasMany(Fileuploadfoto::className(), ['NIM' => 'NIM']);
    }

    /**
     * Gets query for [[Groupsurisus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroupsurisus()
    {
        return $this->hasMany(Groupsurisu::className(), ['NIM' => 'NIM']);
    }

    /**
     * Gets query for [[Groupsurmags]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroupsurmags()
    {
        return $this->hasMany(Groupsurmag::className(), ['NIM' => 'NIM']);
    }

    /**
     * Gets query for [[Groupsurperpks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroupsurperpks()
    {
        return $this->hasMany(Groupsurperpk::className(), ['NIM' => 'NIM']);
    }

    /**
     * Gets query for [[IDAGAMA]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIDAGAMA()
    {
        return $this->hasOne(Agama::className(), ['IDAGAMA' => 'IDAGAMA']);
    }

    /**
     * Gets query for [[IDPRODI]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIDPRODI()
    {
        return $this->hasOne(Prodi::className(), ['IDPRODI' => 'IDPRODI']);
    }

    /**
     * Gets query for [[IDGOLDAR]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIDGOLDAR()
    {
        return $this->hasOne(Goldarah::className(), ['IDGOLDAR' => 'IDGOLDAR']);
    }

    /**
     * Gets query for [[IDJENDER]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIDJENDER()
    {
        return $this->hasOne(Jender::className(), ['IDJENDER' => 'IDJENDER']);
    }

    /**
     * Gets query for [[Suratketerangans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratketerangans()
    {
        return $this->hasMany(Suratketerangan::className(), ['NIM' => 'NIM']);
    }

    /**
     * Gets query for [[Surijincutis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSurijincutis()
    {
        return $this->hasMany(Surijincuti::className(), ['NIM' => 'NIM']);
    }

    /**
     * Gets query for [[Surijinpns]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSurijinpns()
    {
        return $this->hasMany(Surijinpn::className(), ['NIM' => 'NIM']);
    }

    /**
     * Gets query for [[Surketnobeswas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSurketnobeswas()
    {
        return $this->hasMany(Surketnobeswa::className(), ['NIM' => 'NIM']);
    }

    /**
     * Gets query for [[Surpermks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSurpermks()
    {
        return $this->hasMany(Surpermk::className(), ['NIM' => 'NIM']);
    }
}
