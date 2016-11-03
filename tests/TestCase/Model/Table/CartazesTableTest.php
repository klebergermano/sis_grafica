<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CartazesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CartazesTable Test Case
 */
class CartazesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CartazesTable
     */
    public $Cartazes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cartazes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cartazes') ? [] : ['className' => 'App\Model\Table\CartazesTable'];
        $this->Cartazes = TableRegistry::get('Cartazes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cartazes);

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
