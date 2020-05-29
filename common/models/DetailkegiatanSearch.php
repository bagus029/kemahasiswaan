<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Detailkegiatan;

/**
 * DetailkegiatanSearch represents the model behind the search form of `common\models\Detailkegiatan`.
 */
class DetailkegiatanSearch extends Detailkegiatan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['iddetailkeg', 'statusdetailkeg', 'validasi'], 'integer'],
            [['idkegiatan', 'nim', 'detailkegiatan', 'tglkegiatan', 'tempatkegiatan', 'penyelenggara'], 'safe'],
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
        $query = Detailkegiatan::find();

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
            'iddetailkeg' => $this->iddetailkeg,
            'statusdetailkeg' => $this->statusdetailkeg,
            'tglkegiatan' => $this->tglkegiatan,
            'validasi' => $this->validasi,
        ]);

        $query->andFilterWhere(['like', 'idkegiatan', $this->idkegiatan])
            ->andFilterWhere(['like', 'nim', $this->nim])
            ->andFilterWhere(['like', 'detailkegiatan', $this->detailkegiatan])
            ->andFilterWhere(['like', 'tempatkegiatan', $this->tempatkegiatan])
            ->andFilterWhere(['like', 'penyelenggara', $this->penyelenggara]);

        return $dataProvider;
    }
}
