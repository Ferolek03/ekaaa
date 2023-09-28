<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "request".
 *
 * @property int $id
 * @property int $id_user
 * @property int $id_gender
 * @property int $id_position
 * @property int $id_children
 * @property int $id_job
 * @property int $id_degree
 * @property string $fio
 * @property string $age
 *
 * @property Children $children
 * @property Degree $degree
 * @property Gender $gender
 * @property Job $job
 * @property Position $position
 * @property User $user
 */
class Request extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'request';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'id_gender', 'id_position', 'id_children', 'id_job', 'id_degree', 'fio', 'age'], 'required'],
            [['id_user', 'id_gender', 'id_position', 'id_children', 'id_job', 'id_degree'], 'integer'],
            [['fio', 'age'], 'string', 'max' => 255],
            [['id_children'], 'exist', 'skipOnError' => true, 'targetClass' => Children::class, 'targetAttribute' => ['id_children' => 'id']],
            [['id_degree'], 'exist', 'skipOnError' => true, 'targetClass' => Degree::class, 'targetAttribute' => ['id_degree' => 'id']],
            [['id_gender'], 'exist', 'skipOnError' => true, 'targetClass' => Gender::class, 'targetAttribute' => ['id_gender' => 'id']],
            [['id_job'], 'exist', 'skipOnError' => true, 'targetClass' => Job::class, 'targetAttribute' => ['id_job' => 'id']],
            [['id_position'], 'exist', 'skipOnError' => true, 'targetClass' => Position::class, 'targetAttribute' => ['id_position' => 'id']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'id_gender' => 'Id Gender',
            'id_position' => 'Id Position',
            'id_children' => 'Id Children',
            'id_job' => 'Id Job',
            'id_degree' => 'Id Degree',
            'fio' => 'Fio',
            'age' => 'Age',
        ];
    }

    /**
     * Gets query for [[Children]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChildren()
    {
        return $this->hasOne(Children::class, ['id' => 'id_children']);
    }

    /**
     * Gets query for [[Degree]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDegree()
    {
        return $this->hasOne(Degree::class, ['id' => 'id_degree']);
    }

    /**
     * Gets query for [[Gender]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGender()
    {
        return $this->hasOne(Gender::class, ['id' => 'id_gender']);
    }

    /**
     * Gets query for [[Job]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJob()
    {
        return $this->hasOne(Job::class, ['id' => 'id_job']);
    }

    /**
     * Gets query for [[Position]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPosition()
    {
        return $this->hasOne(Position::class, ['id' => 'id_position']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'id_user']);
    }
}
