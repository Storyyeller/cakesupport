<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
#echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
    echo $this->Html->css('header');                                             
                                                                                 
    echo $this->fetch('meta');                                                   
    echo $this->fetch('css');                                                    
    echo $this->fetch('script');                                                 
  ?>                                                                             
</head>                                                                          
<body>                                                                           
  <div id="container">                                                           
    <div id="header">                                                            
      <div id="userinfo">                                                        
      <?php if($this->Session->read('User')) { ?>
      Welcome <?php echo CakeSession::read('User.username') ?>
      [<a href="/logout">Logout</a>]
      <?php } else { ?>
      <a href="/login">Login</a>
      |
      <a href="/register">Sign Up</a>
      <?php } ?>
      </div>                                                                     
    <ul id="nav">
      <li class="spacer"></li>
      <li><a href='/blog'>Blog</a></li>
      <li><a href='/questions'>Questions</a></li>
      <li><a href='/testimonials'>Testimonials</a></li>
      <li><a href='/faq'>F.A.Q</a></li>
    </ul>
    </div>                                                                       
    <div id="content">                                                           
      <?php echo $this->Session->flash(); ?>                                     
                                                                                 
      <?php echo $this->fetch('content'); ?>                                     
    </div>                                                                       
    <div id="footer">                                                            
    </div>                                                                       
  </div>                                                                         
</body>                                                                          
</html>  
