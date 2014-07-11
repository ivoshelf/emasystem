
        <div id="topo"><!-- TOPO -->
            <div class="uk-container uk-container-center">
                <div class="uk-grid"><!-- GRID  CENTRAL -->
                    <div class="uk-width-1-2">
                        <div class="uk-grid"><!-- GRID  CENTRAL -->
                            <div class="uk-width-1-6 menu2"><!-- MENU LATERAL -->
                                <button class="uk-button padding-top" data-uk-offcanvas="{target:'#offcanvas-1'}"><i class="uk-icon-bars"></i></button>
                                    <div id="offcanvas-1" class="uk-offcanvas">
                                        <div class="uk-offcanvas-bar">
                                            <ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav>
                                                <img width="176" height="50" src="<?php echo base_url(); ?>public/img/brand/emasystem-logo-menu.png" alt="EMASystem - Sistema para gerenciamento de envio de e-mails">
                                                <li class="uk-active"><?php echo anchor('home', '<i class="uk-icon-home"></i> Home'); ?></li>
                                                <li><?php echo anchor('notificacoes', '<i class="uk-icon-comment"></i> Notificações'); ?></li>
                                                
                                                <li class="uk-parent">
                                                    <a href="#"><i class="uk-icon-envelope"></i> Emailing</a>
                                                    <ul class="uk-nav-sub">
                                                        <li><?php echo anchor('emailing/gerenciar', 'Gerenciar categorias'); ?></li>
	                                                    <li><?php echo anchor('emailing/criar', 'Criar e-mailing'); ?></li>
	                                                    <li><?php echo anchor('emailing/acompanhar', 'Acompanhar'); ?></li>
	                                                    <li><?php echo anchor('emailing/historico', 'Histórico'); ?></li>
                                                    </ul>
                                                </li>
                                                
                                                <li><?php echo anchor('analytics', '<i class="uk-icon-dashboard"></i> Analytics'); ?></li>
                                                <li class="uk-parent">
                                                    <a href="#"><i class="uk-icon-gear"></i> Configurações</a>
                                                    <ul class="uk-nav-sub">
                                                        <li><?php echo anchor('configurar/perfil', 'Sua conta'); ?></li>
                                                    	<li><?php echo anchor('configurar/novousuario', 'Adicionar usuários'); ?></li>
                                                    	<li><?php echo anchor('configurar/gerenciar', 'Gerenciar usuários'); ?></li>
                                                    	<li><?php echo anchor('configurar/novousuario', 'Contas de e-mail'); ?></li>
                                                    	<li><?php echo anchor('configurar/sistema', 'Sistema'); ?></li>
                                                    </ul>
                                                </li>
                                                    
                                            </ul>
                                        </div>
                                    </div>
                            </div>
                            <div class="uk-width-5-6">
                                <img class="logogrande" width="194" height="50" src="<?php echo base_url(); ?>public/img/brand/emasystem-logo-home.png" alt="EMASystem - Sistema para gerenciamento de envio de e-mails">
                            </div>
                        </div>
                        
                    </div>
                    <div class="uk-width-1-2">
                    </div>
                </div><!-- FIM GRID  CENTRAL -->
            </div>
        </div><!-- FIM TOPO -->
