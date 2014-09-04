<?php

/**
 * This is the model class for table "empleado".
 *
 * The followings are the available columns in table 'empleado':
 * @property string $correo
 * @property integer $idEmpleado
 * @property string $nombre
 * @property integer $cedula
 * @property integer $Correo_idCorreo
 *
 * The followings are the available model relations:
 * @property Correo $correoIdCorreo
 * @property Reunion[] $reunions
 */
class Empleado extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Empleado the static model class
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
		return 'empleado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('correo, cedula', 'required'),
                        //array('cedula', )
			array('cedula, Correo_idCorreo', 'numerical', 'integerOnly'=>true),
			array('correo', 'length', 'max'=>35),
			array('nombre', 'length', 'max'=>25),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('correo, idEmpleado, nombre, cedula, Correo_idCorreo', 'safe', 'on'=>'search'),
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
			'correoIdCorreo' => array(self::BELONGS_TO, 'Correo', 'Correo_idCorreo'),
			'reunions' => array(self::HAS_MANY, 'Reunion', 'Empleado_idEmpleado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'correo' => 'Correo:',
			'idEmpleado' => 'Id Empleado',
			'nombre' => 'Nombre:',
			'cedula' => 'Cedula:',
			'Correo_idCorreo' => 'Correo Id Correo',
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

		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('idEmpleado',$this->idEmpleado);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('cedula',$this->cedula);
		$criteria->compare('Correo_idCorreo',$this->Correo_idCorreo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}