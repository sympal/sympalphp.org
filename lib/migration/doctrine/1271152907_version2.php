<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version2 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('core_release', 'core_release_content_id_sf_sympal_content_id', array(
             'name' => 'core_release_content_id_sf_sympal_content_id',
             'local' => 'content_id',
             'foreign' => 'id',
             'foreignTable' => 'sf_sympal_content',
             'onUpdate' => '',
             'onDelete' => 'CASCADE',
             ));
        $this->addIndex('core_release', 'core_release_content_id', array(
             'fields' => 
             array(
              0 => 'content_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('core_release', 'core_release_content_id_sf_sympal_content_id');
        $this->removeIndex('core_release', 'core_release_content_id', array(
             'fields' => 
             array(
              0 => 'content_id',
             ),
             ));
    }
}