<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Kegiatan;

/**
 * KegiatanSearch represents the model behind the search form of `common\models\Kegiatan`.
 */
class KegiatanSearch extends Kegiatan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idkegiatan', 'namakegiatan'], 'safe'],
            [['idjeniskegiatan', 'statuskegiatan'], 'integer'],
            [['poinkegiatan'], 'number'],
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
        $query = Kegiatan::find();

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
            'poinkegiatan' => $this->poinkegiatan,
            'statuskegiatan' => $this->statuskegiatan,
        ]);

        $query->andFilterWhere(['like', 'idkegiatan', $this->idkegiatan])
            ->andFilterWhere(['like', 'namakegiatan', $this->namakegiatan]);

        return $dataProvider;
    }
}
