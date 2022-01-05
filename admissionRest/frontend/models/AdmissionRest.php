<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "admissionrest".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $place
 * @property string|null $phone
 */
class AdmissionRest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admissionrest';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'place', 'phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'place' => 'Place',
            'phone' => 'Phone',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\AdmissionRestQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\AdmissionRestQuery(get_called_class());
    }
}
