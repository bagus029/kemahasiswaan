<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "fakultas".
 *
 * @property int $IDFAKULTAS
 * @property string|null $FAKULTAS
 * @property string|null $ALAMATFAKULTAS
 * @property string|null $WEBSITE
 * @property string|null $EMAIL
 * @property string|null $TLPFAKULTAS
 * @property string|null $UNIVERSITAS
 *
 * @property Msdos[] $msdos
 * @property Prodi[] $prodis
 */
class Fakultas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fakultas';
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
            [['FAKULTAS'], 'string', 'max' => 200],
            [['ALAMATFAKULTAS'], 'string', 'max' => 500],
            [['WEBSITE', 'EMAIL', 'TLPFAKULTAS'], 'string', 'max' => 20],
            [['UNIVERSITAS'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDFAKULTAS' => 'Idfakultas',
            'FAKULTAS' => 'Fakultas',
            'ALAMATFAKULTAS' => 'Alamatfakultas',
            'WEBSITE' => 'Website',
            'EMAIL' => 'Email',
            'TLPFAKULTAS' => 'Tlpfakultas',
            'UNIVERSITAS' => 'Universitas',
        ];
    }

    /**
     * Gets query for [[Msdos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMsdos()
    {
        return $this->hasMany(Msdos::className(), ['IDFAKULTAS' => 'IDFAKULTAS']);
    }

    /**
     * Gets query for [[Prodis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdis()
    {
        return $this->hasMany(Prodi::className(), ['IDFAKULTAS' => 'IDFAKULTAS']);
    }
}
