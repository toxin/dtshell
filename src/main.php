<?php
echo('test');

if (isset($_GET['mode'])) {
  $mode = $_GET['mode'];
} else {
  $mode = 'toxin';
}

class GUI {
  public function __construct() {
    $this->modules = array();
  }

  public function render() {
    echo('win');
    $this->modules[$_GET['mode']].run();
    echo('<html>.... base template');
    $this->modules[$_GET['mode']].renderPage();
  }

  public function addModule($name, $linkname, $class) {
    $this->registered_modules[$name] = $class;
  }

}

$gui = new GUI();

class Module {
  public function run() {}
  public function render() {}
}

/* Module: Toxin
 *   Default module for the Toxin shell */
class Toxin extends Module {
  public function render() {
    echo('<p>Welcome to the Toxin Shell!</p>');
  }
}

/* Module: PortScan */
class PortScan extends Module {
  public function run() {
    if ($_GET['action'] == 'scanall') {
      // Scan all ports
    }
  }

  public function render(){
    echo('<a href="?mode=portscan&action=scanall">Scan all</a>');
  }

}
$gui.addModule('portscan', 'Portscan', PortScan);


/* Module: MakeFile */
class MakeFile extends Module {

}
$gui.addModule('makefile', 'Make file', MakeFile);


$gui->render();

?>