<?php

class text extends base_component implements components_interface {

	public function make_text() : string {
		$html = '';

		ob_start();
		?>
		<div class="<?=$this -> cfg( 'contenido', 'alineado' )?>">
			<?php
			$text = $this -> cfg('contenido','texto');
			$variables = $this -> _ITE -> funcs -> get_template_variables( $text );
			if( ! empty( $variables ) ){ 
				$text = $this -> _ITE -> funcs -> replace_in_template( $text, $_REQUEST );
				if( isset( $_REQUEST['d'] ) ) {
					$data = decode( $_REQUEST['d'] );
					$text = $this -> _ITE -> funcs -> replace_in_template( $text, $data );
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
		return $this -> make_text();
	}
}