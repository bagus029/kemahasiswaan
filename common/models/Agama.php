<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "agama".
 *
 * @property int $IDAGAMA
 * @property string|null $NAMAAGAMA
 *
 * @property Mahasiswa[] $mahasiswas
 */
class Agama extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'agama';
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
            [['NAMAAGAMA'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDAGAMA' => 'Idagama',
            'NAMAAGAMA' => 'Namaagama',
        ];
    }

    /**
     * Gets query for [[Mahasiswas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswas()
    {
        return $this->hasMany(Mahasiswa::className(), ['IDAGAMA' => 'IDAGAMA']);
    }
}
