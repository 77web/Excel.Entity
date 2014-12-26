<?php


namespace Excel\Entity;


class CoordinateTest extends \PHPUnit_Framework_TestCase 
{
    public function provideTestData()
    {
        return [
            ['A1', 1, 1],
            ['AA256', 27, 256],
            ['ZZ1', 702, 1],
            ['AAA1', 703, 1],
        ];
    }

    /**
     * @dataProvider provideTestData
     * @param string $coord
     * @param integer $expectedColumnNumber
     * @param integer $expectedRowNumber
     */
    public function test_setCoordinate($coord, $expectedColumnNumber, $expectedRowNumber)
    {
        $coordinate = new Coordinate();
        $coordinate->setCoordinate($coord);

        $this->assertEquals($expectedColumnNumber, $coordinate->getColumnNumber());
        $this->assertEquals($expectedRowNumber, $coordinate->getRowNumber());
    }
}
