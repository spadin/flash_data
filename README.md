## Flash Data Helper

Easily set a one-time use notice or error message. Now you can pass error 
messages or notices without having to use a URL get parameter.

### Usage

Controller:

        $flash_data = Loader::helper('flash_data','flash_data');
        $flash_data->notice('My one-time message goes here instead of the URL.');
        
        $this->redirect('/somePage');

View (/somePage):

        <? $flash_data = Loader::helper('flash_data','flash_data'); ?>
        <?= $flash_data->notice(); ?>

_The notice is unset as soon as it is retrieved._

Notice, this isn't the same as using `$this->set('variableName',$variable)` 
because the set method only work within the current controller. The flash data 
works across controllers because it sets a temporary session variable with your 
data that will be removed the first time it is accessed.

