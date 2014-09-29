<?php 

class PrintArrayTest extends \PHPUnit_Framework_TestCase
{

    public function testWhenStringIsProvided()
    {
		require_once ('PrintArray.php');
		
		$data = 'Test string';	
		        
		$p = new PrintArray();
        
		$result = $p->print_array($data);

        $this->assertEquals('Error: Array not provided', $result);
    }

    public function testWhenSingleArrayIsProvided()
    {
		$data = array(
				'Name' => 'Trixie',
				'Color' => 'Green',
				'Element' => 'Earth',
				'Likes' => 'Flowers'
		);	
		
		$p = new PrintArray();
        
		$result = $p->print_array($data);

        $this->assertEquals('Error: Wrong array type provided', $result);
    }

    public function testWhenArraysContainsDifferentColumnNames()
    {
		$data = array(
			array(
				'Name' => 'Trixie',
				'Color' => 'Green',
				'Element' => 'Earth',
				'Likes' => 'Flowers'
				),
			array(
				'DifferentName' => 'Tinkerbell',	// Different Column Name
				'Element' => 'Air',
				'Likes' => 'Singning',
				'Color' => 'Blue'
				), 
			array(
				'Element' => 'Water',
				'Likes' => 'Dancing',
				'Name' => 'Blum',
				'Color' => 'Pink'
				),
		);
		
		$p = new PrintArray();
        
		$result = $p->print_array($data);

        $this->assertEquals('Error: Arrays contains different column names', $result);
    }

    public function testWhenArraysContainsDifferentNumberOfColumns()
    {
		$data = array(
			array(
				'Name' => 'Trixie',
				'Color' => 'Green',
				'Element' => 'Earth',
				'Likes' => 'Flowers'
				),
			array(
				'Name' => 'Tinkerbell',
				'Element' => 'Air',
				'Likes' => 'Singning',
				'Color' => 'Blue'
				), 
			array(
				'Element' => 'Water',
				'Likes' => 'Dancing',
				'Name' => 'Blum',
//				'Color' => 'Pink'		// Array contains only 3 columns
				),
		);
		
		$p = new PrintArray();
        
		$result = $p->print_array($data);

        $this->assertEquals('Error: Arrays contains different number of columns', $result);
    }
	
    public function testWhenCorrectArrayIsProvided()
    {
		$data = array(
			array(
				'Name' => 'Trixie',
				'Color' => 'Green',
				'Element' => 'Earth',
				'Likes' => 'Flowers'
				),
			array(
				'Name' => 'Tinkerbell',
				'Element' => 'Air',
				'Likes' => 'Singning',
				'Color' => 'Blue'
				), 
			array(
				'Element' => 'Water',
				'Likes' => 'Dancing',
				'Name' => 'Blum',
				'Color' => 'Pink'
				),
		);
		
		$p = new PrintArray();
        
		$result = $p->print_array($data);

        $this->assertContains('Name', $result);
        $this->assertContains('Color', $result);
        $this->assertContains('Element', $result);
        $this->assertContains('Likes', $result);
        $this->assertContains('Trixie', $result);
        $this->assertContains('Green', $result);
        $this->assertContains('Earth', $result);
        $this->assertContains('Flowers', $result);
        $this->assertContains('Tinkerbell', $result);
        $this->assertContains('Air', $result);
        $this->assertContains('Singning', $result);
        $this->assertContains('Blue', $result);
        $this->assertContains('Water', $result);
        $this->assertContains('Dancing', $result);
        $this->assertContains('Blum', $result);
        $this->assertContains('Pink', $result);
        $this->assertContains('Water', $result);
        $this->assertContains('Dancing', $result);
        $this->assertContains('Blum', $result);
        $this->assertContains('Pink', $result);
		$this->assertContains('#FF0000', $result);
		$this->assertContains('#00FF00', $result);
		$this->assertContains('#0000FF', $result);
		$this->assertContains('#FCFC2D', $result);
    }
	
}
?>