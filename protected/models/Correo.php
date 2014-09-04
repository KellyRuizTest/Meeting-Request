<?php

/**
 * This is the model class for table "correo".
 *
 * The followings are the available columns in table 'correo':
 * @property integer $idCorreo
 * @property integer $cont
 * @property string $titulo
 * @property string $notificacion
 *
 * The followings are the available model relations:
 * @property Empleado[] $empleados
 */
class Correo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Correo the static model class
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
		return 'correo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cont', 'numerical', 'integerOnly'=>true),
			array('titulo', 'length', 'max'=>15),
			array('notificacion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idCorreo, cont, titulo, notificacion', 'safe', 'on'=>'search'),
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
			'empleados' => array(self::HAS_MANY, 'Empleado', 'Correo_idCorreo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idCorreo' => 'Id Correo',
			'cont' => 'Cont',
			'titulo' => 'Titulo',
			'notificacion' => 'Notificacion',
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

		$criteria->compare('idCorreo',$this->idCorreo);
		$criteria->compare('cont',$this->cont);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('notificacion',$this->notificacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}