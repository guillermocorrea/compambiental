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

            <?php if(AuthComponent::user('id')) { ?>
                <li class="dropdown <?php echo $this->request->controller == 'comparendos' ? 'active' : ''; ?>">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Comparendos<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link('<i class="icon-list-alt"></i> Comparendos','/comparendos', array('escape'=>false)) ?></li>
                        <li class="divider"></li>
                        <li><?php echo $this->Html->link('<i class="icon-pencil"></i> Registrar','/comparendos/add', array('escape'=>false)) ?></li>
                      </ul>
                </li>

                <li class="dropdown <?php echo $this->request->controller == 'infractors' ? 'active' : ''; ?>">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Personas<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link('<i class="icon-user"></i> Personas','/infractors', array('escape'=>false)) ?></li>
                        <li class="divider"></li>
                        <li><?php echo $this->Html->link('<i class="icon-pencil"></i> Registrar','/infractors/add', array('escape'=>false)) ?></li>
                      </ul>
                </li>

                <li class="dropdown <?php echo $this->request->controller == 'infractions' ? 'active' : ''; ?>">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Infracciones<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link('<i class="icon-list-alt"></i> Infracciones','/infractions', array('escape'=>false)) ?></li>
                        <li class="divider"></li>
                        <li><?php echo $this->Html->link('<i class="icon-pencil"></i> Registrar','/infractions/add', array('escape'=>false)) ?></li>
                      </ul>
                </li>

              <?php if(AuthComponent::user('rol') === Configure::read('admin') ) { ?>
                <li class="dropdown <?php echo $this->request->controller == 'users' ? 'active' : ''; ?>">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link('Usuarios','/users') ?></li>
                        <li><?php echo $this->Html->link('Registrar','/users/register') ?></li>
                      </ul>
                </li>
              <?php } ?>  
                

            <?php } ?>  
            </ul>
            <ul class="nav pull-right">
              <li>
                  <a id="loading" href="#"><?php echo $this->Html->image('ajax-loader.gif', array('alt' => 'Cargando...'))?></a>
              </li>
              <?php if(AuthComponent::user('id') ) { ?>
                <li><div class="btn-group">
          <a class="btn btn-primary" href="<?php echo $this->Html->url('/users/profile')?>"><i class="icon-user icon-white"></i> <?php echo AuthComponent::user('primer_nombre') 
                  . " " . AuthComponent::user('primer_apellido')?></a>
          
        </div></li>
                <li><?php echo $this->Html->link('Salir <i class=" icon-arrow-right icon-white"></i>','/users/logout', array('escape'=>false)) ?></li>
              <?php } else { ?>
                <li><?php echo $this->Html->link('Login','/') ?></li>
              <?php } ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>