<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pengguna".
 *
 * @property int $IDPENGGUNA
 * @property string|null $IDGROUPS
 * @property string|null $USERNAME
 * @property string|null $PASS
 *
 * @property Groups $iDGROUPS
 */
class Pengguna extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengguna';
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
            [['IDGROUPS'], 'string', 'max' => 1],
            [['USERNAME', 'PASS'], 'string', 'max' => 100],
            [['IDGROUPS'], 'exist', 'skipOnError' => true, 'targetClass' => Groups::className(), 'targetAttribute' => ['IDGROUPS' => 'IDGROUPS']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDPENGGUNA' => 'Idpengguna',
            'IDGROUPS' => 'Idgroups',
            'USERNAME' => 'Username',
            'PASS' => 'Pass',
        ];
    }

    /**
     * Gets query for [[IDGROUPS]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIDGROUPS()
    {
        return $this->hasOne(Groups::className(), ['IDGROUPS' => 'IDGROUPS']);
    }
}
