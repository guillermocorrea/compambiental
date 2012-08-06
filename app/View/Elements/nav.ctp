<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          
          <?php echo $this->Html->link(Configure::read('AppName'),"/",array('class' => 'brand')) ?>
          <div class="nav-collapse">
            <ul class="nav">

            <?php if(AuthComponent::user('rol') === Configure::read('admin') ) { ?>
              <li class="dropdown <?php echo $this->request->controller == 'users' ? 'active' : ''; ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><?php echo $this->Html->link('Usuarios','/users') ?></li>
                      <li><?php echo $this->Html->link('Registrar','/users/register') ?></li>
                    </ul>
                  </li>
            <?php } ?>  
            </ul>
            <ul class="nav pull-right">
              <?php if(AuthComponent::user('id') ) { ?>
                <li><span>
                  <?php echo $this->Html->link(AuthComponent::user('primer_nombre') 
                  . " " . AuthComponent::user('primer_apellido'),'/users/profile') ?></span></li>
                <li><?php echo $this->Html->link('Salir','/users/logout') ?></li>
              <?php } else { ?>
                <li><?php echo $this->Html->link('Login','/') ?></li>
              <?php } ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>