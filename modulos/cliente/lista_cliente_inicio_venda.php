<?
////////////////////////////////////////////////////////////////////////////////////////
//                                                                                    //
// NOTICE OF COPYRIGHT                                                                //
//                                                                                    //
// ASC - Ajax Sales Cloud - http://www.greyland.com.br                                                  //
//                                                                                    //
// Copyright (C) 2008 onwards Renato Marinho ( renato.marinho@greyland.com.br )         //
//                                                                                    //
// This program is free software; you can redistribute it and/or modify it under      //
// the terms of the GNU General Public License as published by the Free Software      //
// Foundation; either version 3 of the License, or (at your option) any later         //
// version.                                                                           //
//                                                                                    //
// This program is distributed in the hope that it will be useful, but WITHOUT ANY    // 
// WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A    //
// PARTICULAR PURPOSE.  See the GNU General Public License for more details:          //
//                                                                                    //
//  http://www.gnu.org/copyleft/gpl.html                                              //
//                                                                                    //
////////////////////////////////////////////////////////////////////////////////////////

if (! isset ( $_CONF ['PATH'] )) {
	require "../../config/default.php";
}

$validations = new validations ( );
$db = new db ( );
$db->connect ();

?>


<div class="linha_separador" id="listacliente_inicio"
	style="width: 480px; height: 57px;">
<table height="100%" cellpadding="0" cellspacing="2">
	<tr>
		<td><input type="text" id="pesquisacliente" style="width: 382px; font-size: 16px;" maxlength="50" onkeypress="returnCallBack(event, pesquisar_inicio_clienteselecionevenda)"></td>
		<td><input type="button" value="buscar" class="botao btn_buscar" style="width: 90px;" onclick="javascript:pesquisar_inicio_clienteselecionevenda();"></td>
		<td width="2"></td>
	</tr>
	<tr>
		<td colspan="2">
		<table width="100%" cellpadding="5" cellspacing="5">
			<tr>
				<td><input type="radio" id="rdopesquisanome" name="pesquisa" checked onclick="javascript:;"></td>
				<td>Nome</td>
				<td width="10"></td>
				<td><input type="radio" id="rdopesquisacodigo" name="pesquisa" value="2" onclick="javascript:;"></td>
				<td>C�digo</td>
				<td width="10"></td>
				<td><input type="radio" id="rdopesquisacpf" name="pesquisa" value="3" onclick="javascript:;"></td>
				<td>CFP/CNPJ</td>
				<td width="10"></td>
				<td><input type="radio" id="rdopesquisaemail" name="pesquisa" value="4" onclick="javascript:;"></td>
				<td>E-mail</td>
				<td width="10"></td>
				<td><input type="radio" id="rdopesquisatelefone" name="pesquisa" value="5" onclick="javascript:;"></td>
				<td>Telefone</td>
				<td width="10"></td>
				<td><input type="radio" id="rdopesquisacelular" name="pesquisa" value="6" onclick="javascript:;"></td>
				<td>Celular</td>
			</tr>
		</table>
		</td>
		<td width="1"></td>
	</tr>
</table>
</div>


<div>
	<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td>
			<div id="listacliente" style="overflow: auto; height: 265px; width: 502px"></div>
			</td>
		</tr>
		<tr>
			<td height="10" class="l3"></td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
		<tr>
			<td align="right" height="25"><input type="button" value="iniciar venda" style="width: 120px;" class="botao btn_irpara" onclick="javascript:fechacancelar();pesquisarproduto_venda();carrega_iniciovenda_escolhaprodutos();"></td>
		</tr>
	</table>
</div>

