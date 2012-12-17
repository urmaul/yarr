<?php

/**
 * This is the model class for table "nodes".
 *
 * The followings are the available columns in table 'nodes':
 * @property string $id
 * @property string $createdTime
 * @property string $modifiedTime
 * @property string $slug
 * @property string $title
 * @property string $text
 */
class Node extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Node the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{nodes}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('createdTime, modifiedTime', 'required'),
			array('slug', 'length', 'max'=>256),
			array('title, text', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, createdTime, modifiedTime, slug, title, text', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'createdTime' => 'Created Time',
			'modifiedTime' => 'Modified Time',
			'slug' => 'Slug',
			'title' => 'Title',
			'text' => 'Text',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('createdTime',$this->createdTime,true);
		$criteria->compare('modifiedTime',$this->modifiedTime,true);
		$criteria->compare('slug',$this->slug,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('text',$this->text,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}