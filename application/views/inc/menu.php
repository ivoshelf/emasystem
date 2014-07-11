
        <div id="content"><!-- CENTER -->
            <div class="space">&nbsp;</div>
            <div class="uk-container uk-container-center">
                <div class="uk-grid"><!-- GRID  CENTRAL -->
                    <div class="uk-width-1-1">
                        <div class="uk-panel-box clear">

                            <div class="uk-grid"><!-- GRID  DIVISOR -->

                                <div class="uk-width-3-10 menu">
                                    <div class="padding">
                                        <h2>Menu</h2>
                                        <ul class="uk-nav uk-nav-side uk-nav-parent-icon" data-uk-nav="{multiple:true}">
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
                                            
                                            <li><?php echo anchor('sair', '<i class="uk-icon-power-off"></i> Sair'); ?></li>
                                        </ul>

                                    </div>
                                </div>
