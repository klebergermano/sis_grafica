<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImasTable Test Case
 */
class ImasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ImasTable
     */
    public $Imas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.imas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Imas') ? [] : ['className' => 'App\Model\Table\ImasTable'];
        $this->Imas = TableRegistry::get('Imas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Imas);

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
