<?php
	class Readmore{
		function breakthis($string){
			$text	= explode('<!--PAGEBREAK--!>',$string); 
			$count 	= count($text);
			if(!$count){
				return $string;
			}elseif($count==2){
				$result = $this->set_style();
				$result .= '<div id="visible_text">'.$text[0].'</div><div id="more_text">'.$text[1].'<div class="btn_read_more" id="btn_read_more"><a href="#" onclick="readmore();"><div class="btn">READ MORE</div></a></div></div>';
				$result .= $this->script_button();
				return $result;
			}else{
				$result = $this->set_style();
				$result .= '<div id="visible_text">'.$text[0].'<div><div id="more_text">';
				for($i=1; $i<$count; $i++){
					$result .= $text[$i];
				}
				$result .= '<div class="btn_read_more" id="btn_read_more"><a href="#" onclick="readmore();"><div class="btn">READ MORE</div></a></div></div>';
				$result .= $this->script_button();

				return $result;
			}
		}

		function script_button(){
			$script = '<script>';
			$script .= 'function readmore(){$(".btn_read_more").hide(),$("#more_text").css({height:"100%","-webkit-transition":"all ease 5s",transition:"all ease 5s","-moz-transition":"all ease 5s","-o-transition":"all ease 5s"})}';
			$script .= '</script>';

			return $script;
		}

		function set_style(){
			$style = '<style>';
			$style .= '#more_text{height:60px;position:relative;overflow:hidden;transition:all ease .5s!important;-moz-transition:all ease .5s!important;-webkit-transition:all ease .5s!important;-o-transition:all ease .5s!important}#more_text .btn_read_more{position:absolute;bottom:0;left:0;width:100%;text-align:center;margin:0;padding:10px 0;background-image:linear-gradient(to bottom,transparent,#fff)}.btn{color:#FFF;background-color:#00f;border:1px solid #000;height:40px;line-height:40px;width:300px;margin:0 auto;cursor:pointer}';
			$style .= '</style>';
			return $style;
			
		}
	}
?>