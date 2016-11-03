<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TesteTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TesteTable Test Case
 */
class TesteTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TesteTable
     */
    public $Teste;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.teste'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Teste') ? [] : ['className' => 'App\Model\Table\TesteTable'];
        $this->Teste = TableRegistry::get('Teste', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Teste);

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
