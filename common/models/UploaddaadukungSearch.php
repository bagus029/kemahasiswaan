<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Uploaddatadukung;

/**
 * UploaddaadukungSearch represents the model behind the search form of `common\models\Uploaddatadukung`.
 */
class UploaddaadukungSearch extends Uploaddatadukung
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['iddatadukung', 'iddetailkeg', 'statusdatadukung'], 'integer'],
            [['namadatadukung', 'filedatadukung', 'tanggalupload', 'tanggalupdate'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Uploaddatadukung::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'iddatadukung' => $this->iddatadukung,
            'iddetailkeg' => $this->iddetailkeg,
            'tanggalupload' => $this->tanggalupload,
            'tanggalupdate' => $this->tanggalupdate,
            'statusdatadukung' => $this->statusdatadukung,
        ]);

        $query->andFilterWhere(['like', 'namadatadukung', $this->namadatadukung])
            ->andFilterWhere(['like', 'filedatadukung', $this->filedatadukung]);

        return $dataProvider;
    }
}
