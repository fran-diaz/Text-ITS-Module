<?php
/**
 * Configuración default para el componente text
 */

return [
	'name' => 'Caja de Texto',
	'description' => 'Una caja de texto',
	'general' => [
		'nombre' => [
			'type' => 'varchar',
			'name' => 'Nombre',
			'detail' => 'Nombre del componente',
			'required' => false,
			'value' => 'Texto',
		],
		'invisible_box' => [
			'type' => 'checkbox',
			'name' => '¿Caja transparente?',
			'detail' => 'Caja visible o no visible',
			'required' => false,
			'default_values' => [
				'true' => 'Si',
				'false' => 'No',
			],
			'value' => 'false',
		],
		'ancho' => [
			'type' => 'enum',
			'name' => 'Anchura del componente',
			'detail' => 'Ancho de la caja del componente',
			'required' => false,
			'default_values' => [
				'3' => '25%',
				'4' => '30%',
				'6' => '50%',
				'8' => '60%',
				'9' => '75%',
				'12' => '100%',
			],
			'value' => '4',
		],
		'alto' => [
			'type' => 'enum',
			'name' => 'Altura del componente',
			'detail' => 'Ancho de la caja del componente',
			'required' => false,
			'default_values' => [
				'h-md-auto' => 'Auto',
				'h-md-25' => '25%',
				'h-md-50' => '50%',
				'h-md-75' => '75%',
				'h-md-100' => '100%',
			],
			'value' => 'h-md-50',
		],
	],
	'conexión' => [
		'external_connection' => [
			'type' => 'connections',
			'name' => 'Conexión externa',
			'detail' => 'Conexión a un servidor de base de datos externo',
			'external_table' => 'system__connections',
			'external_field' => 'connection',
			'value' => '',
		],
	],
	'contenido' => [
		'texto' => [
			'type' => 'text',
			'name' => 'Texto',
			'detail' => 'Texto a mostrar dentro del componente',
			'required' => true,
			'value' => 'Texto',
		],
		'alineado' => [
			'type' => 'enum',
			'name' => 'Alineación',
			'detail' => 'Como se alinea el texto dentro de la caja',
			'required' => false,
			'default_values' => [
				'text-left' => 'Izquierda',
				'text-center' => 'Centrado',
				'text-right' => 'Derecha',
				'text-justify' => 'Justificado',
			],
			'value' => 'text-left',
		],
	],
];