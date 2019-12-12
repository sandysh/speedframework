<?php

use Phinx\Migration\AbstractMigration;

class PermissionRole extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $refTable = $this->table('permission_role',['id' => false, 'composite_key' => ['role_id','permission_id']]);
        $refTable->addColumn('role_id','integer',['signed' => false])
            ->addColumn('permission_id','integer',['signed' => false])
            ->addForeignKey(['role_id'],
                              'roles',
                              ['id'],
                              ['delete'=> 'NO_ACTION', 'update'=> 'CASCADE'])
            ->addForeignKey(['permission_id'],
            'permissions',
            ['id'],
            ['delete'=> 'NO_ACTION', 'update'=> 'CASCADE'])

            ->create();
    }
}
