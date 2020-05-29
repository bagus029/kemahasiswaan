<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Jeniskegiatan;

/**
 * JeniskegiatanSearch represents the model behind the search form of `common\models\Jeniskegiatan`.
 */
class JeniskegiatanSearch extends Jeniskegiatan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idjeniskegiatan', 'statusjeniskegiatan'], 'integer'],
            [['jeniskegiatan'], 'safe'],
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
        $query = Jeniskegiatan::find();

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
            'idjeniskegiatan' => $this->idjeniskegiatan,
            'statusjeniskegiatan' => $this->statusjeniskegiatan,
        ]);

        $query->andFilterWhere(['like', 'jeniskegiatan', $this->jeniskegiatan]);

        return $dataProvider;
    }
}
