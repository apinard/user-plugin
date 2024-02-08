<?php return [
  'plugin' => [
    'tab' => 'Usuarios',
    'access_users' => 'Administrar usuarios',
    'access_groups' => 'Administrar grupos',
    'access_settings' => 'Preferencias de usuario',
    'impersonate_user' => 'Personificar Usuario',
  ],
  'users' => [
    'menu_label' => 'Usuarios',
    'all_users' => 'Todos los usuarios',
    'new_user' => 'Nuevo usuario',
    'list_title' => 'Administrar usuarios',
    'trashed_hint_title' => 'El usuario tiene su perfil desactivado',
    'trashed_hint_desc' => 'Este usuario tiene desactivado su perfil y  no quiere aparecer en el sitio. Los usuarios pueden reactivar su perfil en cualquier momento iniciando sesión nuevamente.',
    'banned_hint_title' => 'El Usuario ha sido bloqueado',
    'banned_hint_desc' => 'Este usuario ha sido bloqueado por un administrador y no será capaz de iniciar sesión.',
    'guest_hint_title' => 'Este usuario es un invitado',
    'guest_hint_desc' => 'El usuario es almacenado sólo para efectos de referencia y necesita registrarse antes de iniciar sesión.',
    'activate_warning_title' => '¡El usuario no se pudo activar!',
    'activate_warning_desc' => 'Este usuario todavía no ha sido activado y no será capaz de iniciar sesión.',
    'activate_confirm' => '¿Realmente desea activar este usuario?',
    'activated_success' => '¡El usuario ha sido activado exitosamente!',
    'activate_manually' => 'Activar usuario manualmente',
    'convert_guest_confirm' => '¿Convertir este invitado en usuario?',
    'convert_guest_manually' => 'Convertir a usuario registrado',
    'convert_guest_success' => 'El usuario ha sido convertido a una cuenta registrada',
    'impersonate_user' => 'Iniciar sesión como este usuario',
    'impersonate_confirm' => '¿Estás seguro que quieres iniciar sesión como este usuario? Puedes volver a tu estado original cerrando la sesión.',
    'impersonate_success' => 'Has iniciado sesión como este usuario correctamente.',
    'delete_confirm' => '¿Realmente desea eliminar este usuario?',
    'unban_user' => 'Desbloquear este usuario',
    'unban_confirm' => '¿Realmente desea desbloquear este usuario?',
    'unbanned_success' => 'El usuario ha sido desbloqueado',
    'return_to_list' => 'Volver a la lista de usuarios',
    'update_details' => 'Actualizar detalles',
    'bulk_actions' => 'Acciones en masa',
    'delete_selected' => 'Eliminar usuarios seleccionados',
    'delete_selected_confirm' => '¿Eliminar los usuarios seleccionados?',
    'delete_selected_empty' => 'No hay usuarios seleccionados a eliminar.',
    'delete_selected_success' => 'Se eliminaron exitosamente los usuarios seleccionados.',
    'activate_selected' => 'Activar usuarios seleccionados',
    'activate_selected_confirm' => '¿Activar los usuarios seleccionados?',
    'activate_selected_empty' => 'No hay usuarios seleccionados para activar.',
    'activate_selected_success' => 'Los usuarios seleccionados han sido activados exitosamente.',
    'deactivate_selected' => 'Desactivar usuarios seleccionados',
    'deactivate_selected_confirm' => '¿Desactivar los usuarios seleccionados?',
    'deactivate_selected_empty' => 'No hay usuarios seleccionados a desactivar.',
    'deactivate_selected_success' => 'Se desactivaron exitosamente los usuarios seleccionados.',
    'restore_selected' => 'Restablecer los usuarios seleccionados',
    'restore_selected_confirm' => '¿Restablecer los usuarios seleccionados?',
    'restore_selected_empty' => 'No hay usuarios seleccionados a restablecer.',
    'restore_selected_success' => 'Se restablecieron exitosamente los usuarios seleccionados.',
    'ban_selected' => 'Bloquear usuarios seleccionados',
    'ban_selected_confirm' => '¿Bloquear los usuarios seleccionados?',
    'ban_selected_empty' => 'No hay usuarios seleccionados a bloquear.',
    'ban_selected_success' => 'Se bloquearon exitosamente los usuarios seleccionados.',
    'unban_selected' => 'Desbloquear usuarios seleccionados',
    'unban_selected_confirm' => '¿Desbloquear los usuarios seleccionados?',
    'unban_selected_empty' => 'No hay usuarios seleccionados a desbloquear.',
    'unban_selected_success' => 'Se desbloquearon exitosamente los usuarios seleccionados.',
  ],
  'settings' => [
    'users' => 'Usuarios',
    'menu_label' => 'Preferencias de usuario',
    'menu_description' => 'Administra las preferencias de los usuarios.',
    'activation_tab' => 'Activación',
    'signin_tab' => 'Iniciar sesión',
    'registration_tab' => 'Registro',
    'notifications_tab' => 'Notificaciones',
    'allow_registration' => 'Permitir registro de usuarios',
    'allow_registration_comment' => 'Si está deshabilitado los usuarios sólo pueden ser creados por administradores.',
    'min_password_length' => 'Largo mínimo de la contraseña',
    'min_password_length_comment' => 'La cantidad mínima de caracteres requerida para contraseñas.',
    'activate_mode' => 'Modo de activación',
    'activate_mode_comment' => 'Seleccione como debería ser activado un perfil de usuario.',
    'activate_mode_auto' => 'Automática',
    'activate_mode_auto_comment' => 'Activada automáticamente al registrarse.',
    'activate_mode_user' => 'Usuario',
    'activate_mode_user_comment' => 'El usuario activa su perfil usando su e-mail.',
    'activate_mode_admin' => 'Administrador',
    'activate_mode_admin_comment' => 'Sólo un administrador puede activar un usuario.',
    'require_activation' => 'Inicio de sesión requiere activación.',
    'require_activation_comment' => 'Usuarios deben tener una perfil activado para poder iniciar sesión.',
    'use_throttle' => 'Límite de intentos',
    'use_throttle_comment' => 'Intentos de inicios de sesión seguidos que provocaran la suspensión temporal del perfil de usuario.',
    'block_persistence' => 'Prevenir sesiones concurrentes',
    'block_persistence_comment' => 'Prevenir que los usuarios habilitados puedan iniciar sesión desde múltiples dispositivos.',
    'login_attribute' => 'Atributo de inicio de sesión',
    'login_attribute_comment' => 'Seleccione que dato de usuario debería ser utilizado para el inicio de sesión.',
    'remember_login' => 'Modo recordar usuario',
    'remember_login_comment' => 'Selecciona si la sesión del usuario debe ser persistente.',
    'remember_always' => 'Siempre',
    'remember_never' => 'Nunca',
    'remember_ask' => 'Preguntar al usuario al iniciar sesión',
  ],
  'user' => [
    'label' => 'Usuario',
    'id' => 'ID',
    'username' => 'Nombre de usuario',
    'name' => 'Nombres',
    'name_empty' => 'Anónimo',
    'surname' => 'Apellidos',
    'email' => 'E-mail',
    'created_at' => 'Registrado',
    'last_seen' => 'Última vez visto',
    'is_guest' => 'Invitado',
    'joined' => 'Incorporado',
    'is_online' => 'En línea ahora',
    'is_offline' => 'Actualmente desconectado',
    'send_invite' => 'Enviar invitación por email',
    'send_invite_comment' => 'Envía un mensaje de bienvenida con información de inicio de sesión y contraseña.',
    'create_password' => 'Crear contraseña',
    'create_password_comment' => 'Ingrese nueva contraseña para iniciar sesión',
    'reset_password' => 'Restablecer contraseña',
    'reset_password_comment' => 'Para restablecer la contraseña del usuario, ingrese una nueva contraseña aquí.',
    'confirm_password' => 'Confirmación de contraseña',
    'confirm_password_comment' => 'Ingrese la contraseña nuevamente para confirmarla.',
    'groups' => 'Grupos',
    'empty_groups' => 'No hay grupos de usuarios disponibles.',
    'avatar' => 'Avatar',
    'details' => 'Detalles',
    'account' => 'Perfil',
    'block_mail' => 'Bloquear todos los envios de e-mail para este usuario.',
    'status_guest' => 'Invitado',
    'status_activated' => 'Activado',
    'status_registered' => 'Registrado',
  ],
  'group' => [
    'label' => 'Grupo',
    'id' => 'ID',
    'name' => 'Nombre',
    'description_field' => 'Descripción',
    'code' => 'Código',
    'code_comment' => 'Ingrese un código único para identificar este grupo.',
    'created_at' => 'Creado',
    'users_count' => 'Usuarios',
  ],
  'groups' => [
    'menu_label' => 'Grupos',
    'all_groups' => 'Grupos de usuarios',
    'new_group' => 'Nuevo grupo',
    'delete_selected_confirm' => '¿Realmente quiere eliminar todos los grupos seleccionados?',
    'list_title' => 'Administrar grupos',
    'delete_confirm' => '¿Realmente desea eliminar este grupo?',
    'delete_selected_success' => 'Los grupos seleccionados fueron eliminados exitosamente.',
    'delete_selected_empty' => 'No hay grupos seleccionados para eliminar.',
    'return_to_list' => 'Volver a la lista de grupos',
    'return_to_users' => 'Volver a la lista de usuarios',
    'create_title' => 'Añadir grupo',
    'update_title' => 'Editar grupo',
    'preview_title' => 'Vista previa de grupo',
  ],
  'login' => [
    'attribute_email' => 'Email',
    'attribute_username' => 'Nombre de usuario',
  ],
  'account' => [
    'account' => 'Perfil',
    'account_desc' => 'Formulario para gestionar datos del usuario.',
    'banned' => 'Los sentimos, este usuario no se encuentra activado actualmente. Por favor contáctanos para mayor asistencia.',
    'redirect_to' => 'redirigir a',
    'redirect_to_desc' => 'Página hacia la cual redirigir despues de una actualización, inicio de sesión o registro.',
    'code_param' => 'Parámetro para el código de activación',
    'code_param_desc' => 'El parámetro de URL en la página usuado para el código de activación del registro.',
    'force_secure' => 'Forzar protocolo seguro',
    'force_secure_desc' => 'Siempre redirigir la URL utilizando HTTPS.',
    'invalid_user' => 'No se encontro un usuario con las credenciales proporcionadas.',
    'invalid_activation_code' => 'El código de activación que proporcionó es inválido.',
    'invalid_deactivation_pass' => 'La contraseña que ingresó es inválida.',
    'success_activation' => 'Su perfil fue activado exitosamente.',
    'success_deactivation' => 'Su perfil fue desactivado exitosamente. ¡Nos apena mucho su partida!',
    'success_saved' => '¡Preferencias guardadas exitosamente!',
    'login_first' => '¡Debe iniciar sesión primero!',
    'already_active' => '¡Su perfil ya estaba activado!',
    'activation_email_sent' => 'Un e-mail de confirmación ha sido enviado a su dirección de correo electrónico.',
    'registration_disabled' => 'El registro de usuarios está temporalmente deshabilitado.',
    'sign_in' => 'Iniciar sesión',
    'register' => 'Registro',
    'full_name' => 'Nombre completo',
    'email' => 'E-mail',
    'password' => 'Contraseña',
    'login' => 'Iniciar sesión',
    'new_password' => 'Nueva contraseña',
    'new_password_confirm' => 'Confirme su nueva contraseña',
  ],
  'reset_password' => [
    'reset_password' => 'Restablecer contraseña',
    'reset_password_desc' => 'Formulario de contraseña olvidada.',
    'code_param' => 'Parámetro para el código de restablecimiento',
    'code_param_desc' => 'El parámetro de URL de la página usado para el código de restablecimiento.e',
  ],
  'session' => [
    'session' => 'Sesión',
    'session_desc' => 'Agrega la sesión del usuario a una página y puede restringir el acceso a dicha página.',
    'security_title' => 'Permitir solamente',
    'security_desc' => 'Quién es permitido acceder a esta página.',
    'all' => 'Todos',
    'users' => 'Usuarios',
    'guests' => 'Invitados',
    'allowed_groups_title' => 'Permitir grupos',
    'allowed_groups_description' => 'Selecciona los grupos permitidos o ninguno para permitir todos los grupos',
    'redirect_title' => 'redirigir a',
    'redirect_desc' => 'Página a la cual redirigir si el acceso es denegado.',
    'logout' => '¡Ha terminado exitosamente su sesión!',
    'stop_impersonate_success' => 'Has dejado de personificar al usuario.',
  ],
];
