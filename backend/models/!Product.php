<?php

namespace backend\models;
//or namespace common\models;
//or namespace frontend\models;

class Product extends \yii\db\ActiveRecord
{

    use \mirocow\eav\EavTrait;

    /**
     * create_time, update_time to now()
     * crate_user_id, update_user_id to current login user id
     */
    public function behaviors()
    {
        return [
            'eav' => [
                'class' => \mirocow\eav\EavBehavior::className(),
                // это модель для таблицы object_attribute_value
                'valueClass' => \mirocow\eav\models\EavAttributeValue::className(),
            ]
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEavAttributes()
    {
        return \mirocow\eav\models\EavAttribute::find()
            ->joinWith('entity')
            ->where([
                'categoryId' => 8, // isset()? $this->category->id: 0,
                'entityModel' => $this::className()
            ]);
    }

}
