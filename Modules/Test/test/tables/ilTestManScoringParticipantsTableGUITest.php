<?php declare(strict_types=1);

/* Copyright (c) 1998-2020 ILIAS open source, Extended GPL, see docs/LICENSE */

/**
 * Class ilTestManScoringParticipantsTableGUITest
 * @author Marvin Beym <mbeym@databay.de>
 */
class ilTestManScoringParticipantsTableGUITest extends ilTestBaseTestCase
{
    private ilTestManScoringParticipantsTableGUI $tableGui;
    private ilObjTestGUI $parentObj_mock;

    protected function setUp() : void
    {
        parent::setUp();

        $lng_mock = $this->createMock(ilLanguage::class);
        $lng_mock->expects($this->any())
                 ->method("txt")
                 ->willReturnCallback(function () {
                     return "testTranslation";
                 });

        $ctrl_mock = $this->createMock(ilCtrl::class);
        $ctrl_mock->expects($this->any())
                  ->method("getFormAction")
                  ->willReturnCallback(function () {
                      return "testFormAction";
                  });

        $this->setGlobalVariable("lng", $lng_mock);
        $this->setGlobalVariable("ilCtrl", $ctrl_mock);
        $this->setGlobalVariable("tpl", $this->createMock(ilGlobalPageTemplate::class));
        $this->setGlobalVariable("component.db", $this->createMock(ilComponentDataDB::class));
        $this->setGlobalVariable("ilPluginAdmin", new ilPluginAdmin());
        $this->setGlobalVariable("ilDB", $this->createMock(ilDBInterface::class));

        $this->parentObj_mock = $this->createMock(ilObjTestGUI::class);
        $this->parentObj_mock->object = $this->createMock(ilObjTest::class);
        $this->tableGui = new ilTestManScoringParticipantsTableGUI($this->parentObj_mock, "");
    }

    public function test_instantiateObject_shouldReturnInstance() : void
    {
        $this->assertInstanceOf(ilTestManScoringParticipantsTableGUI::class, $this->tableGui);
    }
}
