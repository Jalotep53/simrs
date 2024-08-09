<?php

namespace frontend\models;

use Yii;
use frontend\models\Databarang;
use frontend\models\KatObatBmhpOksigen;
/**
 * This is the model class for table "obat_bmhp_oksigen".
 *
 * @property int $id
 * @property string|null $kode_brng
 * @property int|null $kode_kat
 */
class ObatBmhpOksigen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat_bmhp_oksigen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'kode_kat'], 'integer'],
            [['kode_brng'], 'string', 'max' => 16],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
          
            'kode_brng' => 'Kode Brng',
            'kode_kat' => 'Kode Kat',
        ];
    }
    public function getBarang() {
        return $this->hasOne(Databarang::className(), ['kode_brng' => 'kode_brng']);   
    }
    public function getKategori(){
        return $this->hasOne(KatObatBmhpOksigen::className(), ['id' => 'kode_kat']);
    }
}
