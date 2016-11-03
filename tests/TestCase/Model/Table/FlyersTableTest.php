<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FlyersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FlyersTable Test Case
 */
class FlyersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FlyersTable
     */
    public $Flyers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.flyers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Flyers') ? [] : ['className' => 'App\Model\Table\FlyersTable'];
        $this->Flyers = TableRegistry::get('Flyers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Flyers);

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
