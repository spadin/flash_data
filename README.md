## Flash Data Helper

Easily set a one-time use notice or error message. Now you can pass error 
messages or notices without having to use a URL get parameter.

### Installation

0. [Download this package](https://github.com/spadin/flash_data/zipball/master).
0. Unzip the package in the packages directory of your Concrete5 installation.
0. From the Concrete5 dashboard, click the Install Package button in the Add Functionality tab.

### Usage

Controller:

        $flash = Loader::helper('flash_data','flash_data');
        $flash->notice('My one-time message goes here instead of the URL.');
        
        $this->redirect('/somePage');

View (/somePage):

        <?php $flash = Loader::helper('flash_data','flash_data'); ?>
        <?php echo $flash->notice(); ?>

_The notice deleted once it is accessed._

Note, this isn't the same as using `$this->set('variableName',$variable)` 
because the set method only works within the current controller. 

The flash data helper works across controllers by setting a temporary 
session variable with your message that is then removed the first time it is 
accessed.
