<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TaloesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TaloesTable Test Case
 */
class TaloesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TaloesTable
     */
    public $Taloes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.taloes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Taloes') ? [] : ['className' => 'App\Model\Table\TaloesTable'];
        $this->Taloes = TableRegistry::get('Taloes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Taloes);

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
