<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jender".
 *
 * @property string $IDJENDER
 * @property string|null $NAMAJENDER
 *
 * @property Mahasiswa[] $mahasiswas
 * @property Msdos[] $msdos
 */
class Jender extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jender';
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
            [['IDJENDER'], 'required'],
            [['IDJENDER'], 'string', 'max' => 1],
            [['NAMAJENDER'], 'string', 'max' => 15],
            [['IDJENDER'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDJENDER' => 'Idjender',
            'NAMAJENDER' => 'Namajender',
        ];
    }

    /**
     * Gets query for [[Mahasiswas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswas()
    {
        return $this->hasMany(Mahasiswa::className(), ['IDJENDER' => 'IDJENDER']);
    }

    /**
     * Gets query for [[Msdos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMsdos()
    {
        return $this->hasMany(Msdos::className(), ['IDJENDER' => 'IDJENDER']);
    }
}
