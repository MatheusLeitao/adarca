<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FamiliasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FamiliasTable Test Case
 */
class FamiliasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FamiliasTable
     */
    public $Familias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Familias',
        'app.Pessoas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Familias') ? [] : ['className' => FamiliasTable::class];
        $this->Familias = TableRegistry::getTableLocator()->get('Familias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Familias);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
