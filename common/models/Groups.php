<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "groups".
 *
 * @property string $IDGROUPS
 * @property string|null $NAMAGROUPS
 * @property string|null $DIVISI
 *
 * @property Detailaktifcuti[] $detailaktifcutis
 * @property Detailsuratketerangan[] $detailsuratketerangans
 * @property Detailsurijincuti[] $detailsurijincutis
 * @property Detailsurijinpn[] $detailsurijinpns
 * @property Detailsurisu[] $detailsurisus
 * @property Detailsurketnobeswa[] $detailsurketnobeswas
 * @property Detailsurmag[] $detailsurmags
 * @property Detailsurpelpk[] $detailsurpelpks
 * @property Detailsurpermk[] $detailsurpermks
 * @property Detailsurperpk[] $detailsurperpks
 * @property Detailsurtugmonitoring[] $detailsurtugmonitorings
 * @property Detailsurtugns[] $detailsurtugns
 * @property Detailsurtugpm[] $detailsurtugpms
 * @property Detailsurtugpn[] $detailsurtugpns
 * @property Pengguna[] $penggunas
 */
class Groups extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'groups';
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
            [['IDGROUPS'], 'required'],
            [['IDGROUPS'], 'string', 'max' => 1],
            [['NAMAGROUPS'], 'string', 'max' => 100],
            [['DIVISI'], 'string', 'max' => 150],
            [['IDGROUPS'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDGROUPS' => 'Idgroups',
            'NAMAGROUPS' => 'Namagroups',
            'DIVISI' => 'Divisi',
        ];
    }

    /**
     * Gets query for [[Detailaktifcutis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailaktifcutis()
    {
        return $this->hasMany(Detailaktifcuti::className(), ['IDGROUPS' => 'IDGROUPS']);
    }

    /**
     * Gets query for [[Detailsuratketerangans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailsuratketerangans()
    {
        return $this->hasMany(Detailsuratketerangan::className(), ['IDGROUPS' => 'IDGROUPS']);
    }

    /**
     * Gets query for [[Detailsurijincutis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailsurijincutis()
    {
        return $this->hasMany(Detailsurijincuti::className(), ['IDGROUPS' => 'IDGROUPS']);
    }

    /**
     * Gets query for [[Detailsurijinpns]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailsurijinpns()
    {
        return $this->hasMany(Detailsurijinpn::className(), ['IDGROUPS' => 'IDGROUPS']);
    }

    /**
     * Gets query for [[Detailsurisus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailsurisus()
    {
        return $this->hasMany(Detailsurisu::className(), ['IDGROUPS' => 'IDGROUPS']);
    }

    /**
     * Gets query for [[Detailsurketnobeswas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailsurketnobeswas()
    {
        return $this->hasMany(Detailsurketnobeswa::className(), ['IDGROUPS' => 'IDGROUPS']);
    }

    /**
     * Gets query for [[Detailsurmags]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailsurmags()
    {
        return $this->hasMany(Detailsurmag::className(), ['IDGROUPS' => 'IDGROUPS']);
    }

    /**
     * Gets query for [[Detailsurpelpks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailsurpelpks()
    {
        return $this->hasMany(Detailsurpelpk::className(), ['IDGROUPS' => 'IDGROUPS']);
    }

    /**
     * Gets query for [[Detailsurpermks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailsurpermks()
    {
        return $this->hasMany(Detailsurpermk::className(), ['IDGROUPS' => 'IDGROUPS']);
    }

    /**
     * Gets query for [[Detailsurperpks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailsurperpks()
    {
        return $this->hasMany(Detailsurperpk::className(), ['IDGROUPS' => 'IDGROUPS']);
    }

    /**
     * Gets query for [[Detailsurtugmonitorings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailsurtugmonitorings()
    {
        return $this->hasMany(Detailsurtugmonitoring::className(), ['IDGROUPS' => 'IDGROUPS']);
    }

    /**
     * Gets query for [[Detailsurtugns]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailsurtugns()
    {
        return $this->hasMany(Detailsurtugns::className(), ['IDGROUPS' => 'IDGROUPS']);
    }

    /**
     * Gets query for [[Detailsurtugpms]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailsurtugpms()
    {
        return $this->hasMany(Detailsurtugpm::className(), ['IDGROUPS' => 'IDGROUPS']);
    }

    /**
     * Gets query for [[Detailsurtugpns]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetailsurtugpns()
    {
        return $this->hasMany(Detailsurtugpn::className(), ['IDGROUPS' => 'IDGROUPS']);
    }

    /**
     * Gets query for [[Penggunas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenggunas()
    {
        return $this->hasMany(Pengguna::className(), ['IDGROUPS' => 'IDGROUPS']);
    }
}
