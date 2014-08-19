/* 

	Nombre: Insertar TAGS 
	Version: 0.1
	Autor: http://martin.com.uy


*/

var apertura_tag_strong = false;
var apertura_tag_a = false;
var apertura_tag_em = false;
var apertura_tag_br = false;
var selected_text = null;
var selected_text_pos = null;

function resetear_tags_status(){
	apertura_tag_strong = false;
	apertura_tag_a = false;
	apertura_tag_em = false;
	selected_text_pos = -1;
}

function cargar_tags_actions(id_textarea){
	$("#"+id_textarea).select(function(){ 
		selected_text = new String(getSelected()); 
		selected_text_pos = doGetCaretPosition(document.getElementById(id_textarea));
	});	
	$("#"+id_textarea).mousedown(function(){ 
		selected_text = null; 
		selected_text_pos = -1;
	});

	$('#insertar_strong').click(function(){
		insertar_tag_en_textarea('strong', id_textarea);
		return false;
	});
	$('#insertar_a').click(function(){
		insertar_tag_en_textarea('a', id_textarea);
		return false;
	});
	$('#insertar_em').click(function(){
		insertar_tag_en_textarea('em', id_textarea);
		return false;
	});
	$('#insertar_br').click(function(){
		insertar_tag_en_textarea('br', id_textarea);
		return false;
	});

	setCaretPosition(document.getElementById(id_textarea), 0);
}

function insertar_tag_en_textarea(tag, id_textarea){

	var textarea = document.getElementById(id_textarea);
	var texto_textarea = $('#'+id_textarea).val();

	if(selected_text_pos == -1){

		if(tag == 'strong'){
			if(apertura_tag_strong == false){
				apertura_tag_strong = true;
				$('#insertar_'+tag).text("/strong");
				tag = '<strong>';
			}else{
				apertura_tag_strong = false;
				$('#insertar_'+tag).text("strong");
				tag = '</strong>';
			}
		}else if(tag == 'a'){
			if(apertura_tag_a == false){
				apertura_tag_a = true;
				$('#insertar_'+tag).text("/a");
				tag = '<a href="" target="_blank">';
			}else{
				apertura_tag_a = false;
				$('#insertar_'+tag).text("a");
				tag = '</a>';
			}
		}else if(tag == 'em'){
			if(apertura_tag_em == false){
				apertura_tag_em = true;
				$('#insertar_'+tag).text("/em");
				tag = '<em>';
			}else{
				apertura_tag_em = false;
				$('#insertar_'+tag).text("em");
				tag = '</em>';
			}
		}else if(tag == 'br'){
			if(apertura_tag_br == false){
				$('#insertar_'+tag).text("br");
				tag = '<br />';
			}
		}		
	
		var pos_cursor = doGetCaretPosition(textarea);
		var texto_antes_de_tag = texto_textarea.slice(0, pos_cursor);
		var texto_despues_de_tag = texto_textarea.slice(pos_cursor);

		$('#'+id_textarea).val(texto_antes_de_tag + tag + texto_despues_de_tag);
		setCaretPosition(textarea, pos_cursor+tag.length);
	}else{

		var texto_antes_de_tag = texto_textarea.slice(0, selected_text_pos);
		var texto_despues_de_tag = texto_textarea.slice(selected_text_pos+selected_text.length);

		if(tag == 'a'){
			var texto_hasta_cursor_nueva_pos = texto_antes_de_tag + '<a href="" target="_blank">' + selected_text + '</a>';
		}else if(tag == 'strong'){
			var texto_hasta_cursor_nueva_pos = texto_antes_de_tag + '<strong>' + selected_text + '</strong>';
		}else if(tag == 'em'){
			var texto_hasta_cursor_nueva_pos = texto_antes_de_tag + '<em>' + selected_text + '</em>';
		}

		$('#'+id_textarea).val(texto_hasta_cursor_nueva_pos + texto_despues_de_tag);

		setCaretPosition(textarea, texto_hasta_cursor_nueva_pos.length);
	}	

	selected_text = null;
	selected_text_pos = -1;	

}

//Funcion tomada de http://motyar.blogspot.com
function getSelected() {
	if(window.getSelection) { return window.getSelection(); }
	else if(document.getSelection) { return document.getSelection(); }
		    else {
		            var selection = document.selection && document.selection.createRange();
		            if(selection.text) { return selection.text; }
		return false;
	    }
	    return false;
}

//Funcion tomada de http://blog.vishalon.net/
function doGetCaretPosition (ctrl) {
	var CaretPos = 0;	// IE Support
	if (document.selection) {
	ctrl.focus ();
		var Sel = document.selection.createRange ();
		Sel.moveStart ('character', -ctrl.value.length);
		CaretPos = Sel.text.length;
	}
	// Firefox support
	else if (ctrl.selectionStart || ctrl.selectionStart == '0')
		CaretPos = ctrl.selectionStart;
	return (CaretPos);
}
function setCaretPosition(ctrl, pos){
	if(ctrl.setSelectionRange)
	{
		ctrl.focus();
		ctrl.setSelectionRange(pos,pos);
	}
	else if (ctrl.createTextRange) {
		var range = ctrl.createTextRange();
		range.collapse(true);
		range.moveEnd('character', pos);
		range.moveStart('character', pos);
		range.select();
	}
}
