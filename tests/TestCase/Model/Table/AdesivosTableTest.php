<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdesivosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdesivosTable Test Case
 */
class AdesivosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdesivosTable
     */
    public $Adesivos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.adesivos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Adesivos') ? [] : ['className' => 'App\Model\Table\AdesivosTable'];
        $this->Adesivos = TableRegistry::get('Adesivos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Adesivos);

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
