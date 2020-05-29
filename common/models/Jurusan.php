<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jurusan".
 *
 * @property int $IDJURUSAN
 * @property string|null $NAMAJURUSAN
 *
 * @property Msdos[] $msdos
 */
class Jurusan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jurusan';
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
            [['NAMAJURUSAN'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDJURUSAN' => 'Idjurusan',
            'NAMAJURUSAN' => 'Namajurusan',
        ];
    }

    /**
     * Gets query for [[Msdos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMsdos()
    {
        return $this->hasMany(Msdos::className(), ['IDJURUSAN' => 'IDJURUSAN']);
    }
}
