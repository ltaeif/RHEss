<?php

/**
 * BaseUserRole
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $display_name
 * @property boolean $is_assignable
 * @property boolean $is_predefined
 * @property Doctrine_Collection $DataGroupPermission
 * @property Doctrine_Collection $SystemUser
 * @property Doctrine_Collection $ScreenPermission
 * @property Doctrine_Collection $HomePage
 * @property Doctrine_Collection $ModuleDefaultPage
 * 
 * @method integer             getId()                  Returns the current record's "id" value
 * @method string              getName()                Returns the current record's "name" value
 * @method string              getDisplayName()         Returns the current record's "display_name" value
 * @method boolean             getIsAssignable()        Returns the current record's "is_assignable" value
 * @method boolean             getIsPredefined()        Returns the current record's "is_predefined" value
 * @method Doctrine_Collection getDataGroupPermission() Returns the current record's "DataGroupPermission" collection
 * @method Doctrine_Collection getSystemUser()          Returns the current record's "SystemUser" collection
 * @method Doctrine_Collection getScreenPermission()    Returns the current record's "ScreenPermission" collection
 * @method Doctrine_Collection getHomePage()            Returns the current record's "HomePage" collection
 * @method Doctrine_Collection getModuleDefaultPage()   Returns the current record's "ModuleDefaultPage" collection
 * @method UserRole            setId()                  Sets the current record's "id" value
 * @method UserRole            setName()                Sets the current record's "name" value
 * @method UserRole            setDisplayName()         Sets the current record's "display_name" value
 * @method UserRole            setIsAssignable()        Sets the current record's "is_assignable" value
 * @method UserRole            setIsPredefined()        Sets the current record's "is_predefined" value
 * @method UserRole            setDataGroupPermission() Sets the current record's "DataGroupPermission" collection
 * @method UserRole            setSystemUser()          Sets the current record's "SystemUser" collection
 * @method UserRole            setScreenPermission()    Sets the current record's "ScreenPermission" collection
 * @method UserRole            setHomePage()            Sets the current record's "HomePage" collection
 * @method UserRole            setModuleDefaultPage()   Sets the current record's "ModuleDefaultPage" collection
 * 
 * @package    orangehrm
 * @subpackage model\core\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUserRole extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_user_role');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('display_name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('is_assignable', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             ));
        $this->hasColumn('is_predefined', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('DataGroupPermission', array(
             'local' => 'id',
             'foreign' => 'user_role_id'));

        $this->hasMany('SystemUser', array(
             'local' => 'id',
             'foreign' => 'user_role_id'));

        $this->hasMany('ScreenPermission', array(
             'local' => 'id',
             'foreign' => 'user_role_id'));

        $this->hasMany('HomePage', array(
             'local' => 'id',
             'foreign' => 'user_role_id'));

        $this->hasMany('ModuleDefaultPage', array(
             'local' => 'id',
             'foreign' => 'user_role_id'));
    }
}