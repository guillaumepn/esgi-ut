<?php


class UserTest extends PHPUnit_Framework_TestCase
{
    private $user;


    protected function setUp()
    {
        $this->user = new \App\User("test@test.fr", "toto", "toto", 20);
    }


	public function testisValidNominal()
	{
		$result = $this->user->isValid();
		$this->assertTrue($result);
	}

	public function testIsNotActiveBecauseEmailFormat()
	{
		$this->user->setEmail("test.fr");
		$result = $this->user->isValid();
		$this->assertFalse($result);
	}

	public function testIsNotActiveBecauseFirstnameIsInvalid()
	{
		$this->user->setFirstname("");
		$result = $this->user->isValid();
		$this->assertFalse($result);
	}

	public function testIsNotActiveBecauseToYoung()
	{
		$this->user->setAge(9);
		$result = $this->user->isValid();
		$this->assertFalse($result);
	}

	protected function tearDown()
	{
		$this->user = NULL;
	}


  /**
    * @dataProvider userProvider
    */
  // public function testIsValid($email, $prenom, $nom, $age) {
  //   $this->assertEquals(true, $this->user->isValid($email, $prenom, $nom, $age));
  // }
  //
  // public function userProvider()
  // {
  //   return [
  //      ['test@aol.fr', 'jean', 'salut', 20],
  //      ['notvalid.lol', '', 'nico', 12]
  //   ];
  // }

}
