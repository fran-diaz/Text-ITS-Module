<?php
/**
 * Componente text
 */

class text extends base_component implements components_interface {

	public function make_text() : string {
		global $_ITE, $_ITEC;
		$html = '';

		ob_start();
		?>
		<div class="<?=$this->cfg( 'contenido', 'alineado' )?>">
			<?php
			$text = $this->cfg('contenido','texto');
			$variables = $_ITE -> funcs -> get_template_variables($text);
			if( ! empty( $variables ) ){ 
				if( isset( $_REQUEST['d'] ) ) {
					//$_ITEC_temp = $_ITEC;

					$data = decode( $_REQUEST['d'] );

					/*if( isset( $data['dsn']) ) {
						$conn_data = $_ITEC -> get( 'system__connections', '*', ['dsn' => $data['dsn']] );
						if( $conn_data ){
							$_ITEC_temp = new ITE\db\db ( $conn_data, $_ITE );
						}
					}
					
					$d_info = $_ITEC_temp -> get( $data['table'], '*', [$data['table'].'_id' => $data['id']] );*/
					$text = $_ITE -> funcs -> replace_in_template( $text, $data );
				} else {
					$text = $_ITE -> funcs -> replace_in_template( $text );
				}
			}
			echo $text;
			?>
		</div>
		<?php

		$html = ob_get_contents();
		ob_end_clean();

		return $html;
	}

	public function gen_content( ) : string {		
		return $this -> make_text( $this -> component_info );
	}
}