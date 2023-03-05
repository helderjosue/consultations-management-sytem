<?php

namespace backend\models;

use common\models\User;
use Yii;

/**
 * This is the model class for table "tipo".
 *
 * @property int $id
 * @property string $nome
 * @property int $area_id
 * @property string $created_at
 * @property int|null $created_by
 * @property string|null $updated_at
 *
 * @property Area $area
 * @property User $createdBy
 */
class Tipo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'area_id', 'created_at'], 'required', 'message' => 'Este campo é obrigatório'],
            [['area_id', 'created_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['nome'], 'string', 'max' => 255],
            [['area_id'], 'exist', 'skipOnError' => true, 'targetClass' => Area::class, 'targetAttribute' => ['area_id' => 'id']],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Tipo de Médico',
            'area_id' => 'Área',
            'created_at' => 'Data de Registo',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Area]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArea()
    {
        return $this->hasOne(Area::class, ['id' => 'area_id']);
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::class, ['id' => 'created_by']);
    }
}
