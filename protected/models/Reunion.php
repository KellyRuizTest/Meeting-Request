<?php

/**
 * This is the model class for table "reunion".
 *
 * The followings are the available columns in table 'reunion':
 * @property integer $idReunion
 * @property string $nombre
 * @property string $fecha
 * @property string $hora_final
 * @property string $hora_init
 * @property integer $Sala_idSala
 * @property integer $Empleado_idEmpleado
 *
 * The followings are the available model relations:
 * @property Empleado $empleadoIdEmpleado
 * @property Sala $salaIdSala
 */
class Reunion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Reunion the static model class
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
		return 'reunion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hora_init, Sala_idSala, Empleado_idEmpleado', 'required'),
			array('Sala_idSala, Empleado_idEmpleado', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>35),
                        array('fecha', 'length', 'max'=>10),
			array('fecha, hora_final', 'safe'),
			array('fecha', 'compare','compareValue'=>  date("d/m/Y"),'operator'=>'>='),
                        array('hora_init', 'validaRul'),
                        array('hora_final', 'compare','compareAttribute'=>  'hora_init','operator'=>'>'),
			array('idReunion, nombre, fecha, hora_final, hora_init, Sala_idSala, Empleado_idEmpleado', 'safe', 'on'=>'search'),
		);
	}     
	/**
	 * @return array relational rules.
	 */
        
        
        public function validaRul($attribute,$params) {
            
            $horaAc = date("H:i");
            if ($this->fecha == date("d/m/Y")){
                
                if($this->hora_init < $horaAc){
                    $this->addError($this->hora_init, "Must be greater than: $horaAc");
                }
            }
            
        }
        
        
        public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'empleadoIdEmpleado' => array(self::BELONGS_TO, 'Empleado', 'Empleado_idEmpleado'),
			'salaIdSala' => array(self::BELONGS_TO, 'Sala', 'Sala_idSala'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idReunion' => 'Id Reunion',
			'nombre' => 'Nombre',
			'fecha' => 'Fecha',
			'hora_final' => 'Hora Final',
			'hora_init' => 'Hora Inicial',
			'Sala_idSala' => 'Sala',
			'Empleado_idEmpleado' => 'Empleado',
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

		$criteria->compare('idReunion',$this->idReunion);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora_final',$this->hora_final,true);
		$criteria->compare('hora_init',$this->hora_init,true);
		$criteria->compare('Sala_idSala',$this->Sala_idSala);
		$criteria->compare('Empleado_idEmpleado',$this->Empleado_idEmpleado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function sala($key=null){
        switch ($key) {
            case 'all':
                $list=array();
                foreach(Sala::model()->findAll() as $key){
                    if ($key->disponibilidad == 0){
                        $list[$key->idSala]=$key->nombre;
                    }
                }
                return $list;
            break;
            default:
                return Sala::model()->findByPK($key?$key:$this->Sala_idSala);
        }
    }
        public function empleado($key=null){
        switch ($key) {
            case 'all':
                $list=array();
                foreach(Empleado::model()->findAll() as $key){
                    $list[$key->idEmpleado]=$key->nombre;
                }
                return $list;
            break;
            default:
                return Empleado::model()->findByPK($key?$key:$this->Empleado_idEmpleado);
        }
    }
    
    
    
    
}