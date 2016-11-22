<?php
interface ICommand
{
  function onCommand( $name, $args );
}
class CommandChain
{
  private $_commands = array();
  public function addCommand( $cmd )
  {
    $this->_commands []= $cmd;
  }
  public function runCommand( $name, $args )
  {
    $flag = FALSE;
    foreach( $this->_commands as $cmd )
    {
      $cmd_result = $cmd->onCommand( $name, $args );
      if ($cmd_result['flag']) {
        $flag = TRUE;
      }
      // if ( $cmd->onCommand( $name, $args ) )
      // {
      //   echo "<br/>";
      //   return;
      // } else {
      //   echo "Command $name not found.<br/>";
      //   return;
      // }
    }
    if ($flag) {
      echo $cmd_result['result'];
    } else {
      echo "Command $name not found.<br/>";
    }
  }
}
class UserCommand implements ICommand
{
  public function onCommand( $name, $args )
  {
    if ( $name != 'addUser' ) return array('flag' => false);
    return array(
      'flag' => true,
      'result' => "UserCommand handling 'addUser'",
    );
  }
}
class MailCommand implements ICommand
{
  public function onCommand( $name, $args )
  {
    if ( $name != 'mail' ) return array('flag' => false);
    return array(
      'flag' => true,
      'result' => "MailCommand handling 'mail'",
      );
  }
}
$cc = new CommandChain();
$cc->addCommand( new UserCommand() );
$cc->runCommand( 'addUser', null );
$cc->runCommand( 'deleteUser', null );
$cc->addCommand( new MailCommand() );
$cc->runCommand( 'mail', null );
