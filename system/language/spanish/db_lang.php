<?php

$lang['db_invalid_connection_str'] = 'No se puede determinar la configuración de base de datos basado en la cadena de conexión que ha enviado.';
$lang['db_unable_to_connect'] = 'No se puede conectar con el servidor de base de datos utilizando la configuración proporcionada.';
$lang['db_unable_to_select'] = 'No se puede seleccionar la base de datos especificada: %s';
$lang['db_unable_to_create'] = 'No se puede crear la base de datos especificada: %s';
$lang['db_invalid_query'] = 'La consulta que ha enviado no es válida.';
$lang['db_must_set_table'] = 'Debe establecer la tabla de base de datos que se utilizará con la consulta.';
$lang['db_must_use_set'] = 'Debe utilizar el método de "set" para actualizar una entrada.';
$lang['db_must_use_index'] = 'Debe especificar un índice para que coincida con el de actualizaciones por lotes.';
$lang['db_batch_missing_index'] = 'Una o más filas presentadas para la actualización por lotes le falta el índice especificado.';
$lang['db_must_use_where'] = 'Las actualizaciones no están permitidas a menos que contengan una cláusula "where".';
$lang['db_del_must_use_where'] = 'No se permite eliminar a menos que contengan un "where" o "like" como cláusula.';
$lang['db_field_param_missing'] = 'Para buscar a los campos requiere el nombre de la tabla como un parámetro.';
$lang['db_unsupported_function'] = 'Esta función no está disponible para la base de datos que está utilizando.';
$lang['db_transaction_failure'] = 'Fracaso en la transacción: Rollback realizado.';
$lang['db_unable_to_drop'] = 'Incapaz de borrar la base de datos especificada.';
$lang['db_unsuported_feature'] = 'Característica no compatible de la plataforma de base de datos que está utilizando.';
$lang['db_unsuported_compression'] = 'El formato de compresión de archivos que eligió no es compatible con su servidor.';
$lang['db_filepath_error'] = 'No se puede escribir datos a la ruta del archivo que ha enviado.';
$lang['db_invalid_cache_path'] = 'El camino de caché que ha enviado no es válido o se puede escribir. ';
$lang['db_table_name_required'] = 'Un nombre de tabla es necesario para la operación.';
$lang['db_column_name_required'] = 'Un nombre de columna se requiere para la operación.';
$lang['db_column_definition_required'] = 'Se requiere una definición de columna para esa operación.';
$lang['db_unable_to_set_charset'] = 'No se puede establecer el conjunto de caracteres de conexión del cliente: %s';
$lang['db_error_heading'] = 'Un error de base de datos se ha producido';

/* End of file db_lang.php */
/* Location: ./system/language/english/db_lang.php */