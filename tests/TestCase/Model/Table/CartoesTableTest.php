<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CartoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CartoesTable Test Case
 */
class CartoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CartoesTable
     */
    public $Cartoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cartoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cartoes') ? [] : ['className' => 'App\Model\Table\CartoesTable'];
        $this->Cartoes = TableRegistry::get('Cartoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cartoes);

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
