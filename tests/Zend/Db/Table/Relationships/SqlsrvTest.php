<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Db
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */

require_once 'Zend/Db/Table/Relationships/TestCommon.php';



/**
 * @category   Zend
 * @package    Zend_Db
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @group      Zend_Db
 * @group      Zend_Db_Table
 * @group      Zend_Db_Table_Relationships
 */
#[\AllowDynamicProperties]
class Zend_Db_Table_Relationships_SqlsrvTest extends Zend_Db_Table_Relationships_TestCommon
{

    public function testTableRelationshipCascadingUpdateUsageBasicString()
    {
        $this->markTestSkipped($this->getDriver() . ' cannot update identity columns.');
    }

    public function testTableRelationshipCascadingUpdateUsageInvalidNoop()
    {
        $this->markTestSkipped($this->getDriver() . ' cannot update identity columns.');
    }

    public function getDriver()
    {
        return 'Sqlsrv';
    }
}
