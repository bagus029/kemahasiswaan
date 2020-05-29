<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "validasi".
 *
 * @property int $idvalidasi
 * @property int|null $iddetailkeg
 * @property int|null $validasibem
 * @property int|null $validasiwd
 * @property string|null $tglvalidasibem
 * @property string|null $tglvalidasiwd
 *
 * @property Detailkegiatan $iddetailkeg0
 */
class Validasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'validasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idvalidasi'], 'required'],
            [['idvalidasi', 'iddetailkeg', 'validasibem', 'validasiwd'], 'integer'],
            [['tglvalidasibem', 'tglvalidasiwd'], 'safe'],
            [['idvalidasi'], 'unique'],
            [['iddetailkeg'], 'exist', 'skipOnError' => true, 'targetClass' => Detailkegiatan::className(), 'targetAttribute' => ['iddetailkeg' => 'iddetailkeg']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idvalidasi' => 'Idvalidasi',
            'iddetailkeg' => 'Iddetailkeg',
            'validasibem' => 'Validasibem',
            'validasiwd' => 'Validasiwd',
            'tglvalidasibem' => 'Tglvalidasibem',
            'tglvalidasiwd' => 'Tglvalidasiwd',
        ];
    }

    /**
     * Gets query for [[Iddetailkeg0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIddetailkeg0()
    {
        return $this->hasOne(Detailkegiatan::className(), ['iddetailkeg' => 'iddetailkeg']);
    }
}
