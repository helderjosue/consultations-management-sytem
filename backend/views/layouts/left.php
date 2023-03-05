<aside class="main-sidebar">

    <section class="sidebar">



		<?= dmstr\widgets\Menu::widget(
			[
				'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
				'items' => [
					['label' => 'Menu', 'options' => ['class' => 'header']],
					['label' => 'Dashboard', 'icon' => 'dashboard', 'url' => ['/site/index']],
					['label' => 'Pacientes', 'icon' => 'file-code-o', 'url' => ['/paciente/index']],
					['label' => 'Consultas', 'icon' => 'file-code-o', 'url' => ['/consulta/index']],
					['label' => 'Medicos', 'icon' => 'far fa-list-alt', 'url' => ['/medico/index']],
					['label' => 'Áreas', 'icon' => 'file-code-o', 'url' => ['/area/index']],
					['label' => 'Tipos', 'icon' => 'file-code-o', 'url' => ['/tipo/index']],
					['label' => 'Usuarios', 'icon' => 'file-code-o', 'url' => ['/user/index']],

					['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
					[
						'label' => 'Definições',
						'icon' => 'settings',
						'url' => '#',
						'items' => [
							['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
							['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
							[
								'label' => 'Level One',
								'icon' => 'circle-o',
								'url' => '#',
								'items' => [
									['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
									[
										'label' => 'Level Two',
										'icon' => 'circle-o',
										'url' => '#',
										'items' => [
											['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
											['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
										],
									],
								],
							],
						],
					],
				],
			]
		) ?>

    </section>

</aside>
