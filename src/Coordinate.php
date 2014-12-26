<?php


namespace Excel\Entity;


final class Coordinate
{
    /**
     * @var string
     */
    private $coordinate;

    /**
     * @var integer
     */
    private $rowNumber;

    /**
     * @var integer
     */
    private $columnNumber;

    /**
     * @return string
     */
    public function getCoordinate()
    {
        return $this->coordinate;
    }

    /**
     * @return int
     */
    public function getRowNumber()
    {
        return $this->rowNumber;
    }

    /**
     * @return int
     */
    public function getColumnNumber()
    {
        return $this->columnNumber;
    }

    /**
     * @param string $coordinate
     * @return Coordinate
     */
    public function setCoordinate($coordinate)
    {
        $this->coordinate = $coordinate;
        $this->updateNumbersByCoordinate();

        return $this;
    }

    /**
     * @param $rowNumber
     * @return Coordinate
     */
    public function setRowNumber($rowNumber)
    {
        $this->rowNumber = $rowNumber;
        $this->updateCoordinateByNumbers();

        return $this;
    }

    /**
     * @param $columnNumber
     * @return Coordinate
     */
    public function setColumnNumber($columnNumber)
    {
        $this->columnNumber = $columnNumber;
        $this->updateCoordinateByNumbers();

        return $this;
    }

    /**
     * detect numbers from coordinate
     */
    private function updateNumbersByCoordinate()
    {
        // rowNumber
        $this->rowNumber = intval(preg_replace('/[^\d+]/', '', $this->coordinate));

        // columnNumber
        $char = preg_replace('/\d+/', '', $this->coordinate);

        $charA = 65;
        $colNumber = 0;
        for ($i = strlen($char); $i > 0; $i--) {
            $colNumber += pow(26, $i - 1) * (ord($char[$i - 1]) - $charA + 1);
        }
        $this->columnNumber = $colNumber;
    }

    /**
     * detect coordinate from rowNumber and columnNumber
     */
    private function updateCoordinateByNumbers()
    {
        $quot = intval(floor($this->columnNumber / 26));
        $mod = $this->columnNumber % 26;

        $char = $quot > 0 ? chr($quot).chr($mod) : chr($mod);

        $this->coordinate = $char.$this->rowNumber;
    }
}
