<?php

namespace app\models;
use Yii;
use app\models\Theme;
/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $title
 * @property string $body
 * @property integer $theme
 * @property string $publish_date
 */
class News extends \yii\db\ActiveRecord
{
	   public $id; 
       public $title;
       public $body;
	   public $theme;
	   public $publish_date;
	   
	public function getTheme()
	{
	 
		   return $this->hasOne(Theme::className(), ['id_theme' => 'theme']);
	}
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['body'], 'string'],
            [['theme'], 'integer'],
            [['publish_date'], 'safe'],
            [['title'], 'string', 'max' => 255],
			 [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'body' => 'Body',
            'theme' => 'Theme',
            'publish_date' => 'Publish Date',
        ];
    }
}
