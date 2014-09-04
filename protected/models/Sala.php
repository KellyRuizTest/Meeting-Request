<?php

/**
 * This is the model class for table "sala".
 *
 * The followings are the available columns in table 'sala':
 * @property integer $idSala
 * @property string $nombre
 * @property integer $disponibilidad
 *
 * The followings are the available model relations:
 * @property Reunion[] $reunions
 */

date_default_timezone_set("America/Caracas");
class Sala extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Sala the static model class
         * 
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
		return 'sala';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			
                        
                        array('disponibilidad', 'numerical', 'integerOnly'=>true),
                        array('reservacion', 'numerical', 'integerOnly'=>true),
                        array('nombre', 'length', 'max'=>25),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idSala, nombre, disponibilidad', 'safe', 'on'=>'search'),
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
			'reunions' => array(self::HAS_MANY, 'Reunion', 'Sala_idSala'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idSala' => 'Id Sala',
			'nombre' => 'Nombre',
                        'disponibilidad' => 'Disponibilidad',
                        'reservacion'=> 'Reservacion',
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

		$criteria->compare('idSala',$this->idSala);
		$criteria->compare('nombre',$this->nombre,true);
                $criteria->compare('disponibilidad',$this->disponibilidad);
                $criteria->compare('reservacion',$this->reservacion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function imageupload(){
            
            $datos = date("H:i");            
            $datosfech = date("d/m/Y");            
            echo $datosfech;
            echo " - ";
            echo $datos;
            foreach (Reunion::model()->findAll() as $key) {                
                if ($key->fecha == $datosfech){                                  
                    if (($datos > $key->hora_init) && ($datos < $key->hora_final)){                         
                        $value = Sala::model()->findByPk($key->Sala_idSala);
                        $value->disponibilidad = 1;
                        $value->save();                     
                    }else{
                        $value = Sala::model()->findByPk($key->Sala_idSala);
                        $value->disponibilidad = 0;
                        $value->save();
                    }                    
                }              
                if ($datosfech > $key->fecha){
                        $value = Sala::model()->findByPk($key->Sala_idSala);
                        $value->disponibilidad = 0;
                        $value->save();
                }
            }            
        }
        
        public function aviladis(){
            
            $list=array();
            
            if ($list = Sala::model()->findByPk(10)){
                return $list;
            }else{
                
            }
            
        }
        
        public function angeldis(){
            
            $list=array();
            
            $list = Sala::model()->findByPk(11);
            return $list;
            
        }
        
          public function roraimadis(){
            
            $list=array();
            
            $list = Sala::model()->findByPk(12);
            return $list;
            
        }
        
          public function orquideadis(){
            
            $list=array();
            
            $list = Sala::model()->findByPk(13);
            return $list;
            
        }
        
           public function turpialdis(){
            
            $list=array();
            
            $list = Sala::model()->findByPk(14);
            return $list;
            
        }
        
        public function roquesadis(){
            
            $list=array();
            
            $list = Sala::model()->findByPk(15);
            return $list;
            
        }
     
      
       
}