<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

return <<<CODE
<?php

use Yiisoft\Db\Migration;

/**
 * Handles the creation of table `{table}`.
 */
class {$class} extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        \$this->createTable('{table}', [
            'title' => \$this->primaryKey(),
            'body' => \$this->text()->notNull(),
            'price' => \$this->money(11,2),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        \$this->dropTable('{table}');
    }
}

CODE;
