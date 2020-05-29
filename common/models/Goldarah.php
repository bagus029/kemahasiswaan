<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "goldarah".
 *
 * @property int $IDGOLDAR
 * @property string|null $NAMAGOLDAR
 *
 * @property Mahasiswa[] $mahasiswas
 */
class Goldarah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'goldarah';
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
            [['NAMAGOLDAR'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDGOLDAR' => 'Idgoldar',
            'NAMAGOLDAR' => 'Namagoldar',
        ];
    }

    /**
     * Gets query for [[Mahasiswas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswas()
    {
        return $this->hasMany(Mahasiswa::className(), ['IDGOLDAR' => 'IDGOLDAR']);
    }
}
