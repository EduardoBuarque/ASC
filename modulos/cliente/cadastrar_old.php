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
?>


<fieldset id="m"><legend>Cadastrar Novo Cliente</legend>

<div class="linha_separador" style="width: 480px;"><span id="mensagem"><b>Preencha
os dados abaixo para adicionar um novo cliente</b></span></div>

<div>

<form>

<table width="100%">
	<tr>
		<td width="50%" valign="top">
		<table>
			<tr>
				<td height="30">Nome</td>
				<td width="5"></td>
				<td><input value="<?=ucwords ( strtolower ( $txtnome ) );?>" type="text"
					name="nome" id="nome" maxlength="60"></td>
			</tr>
			<tr>
				<td height="30">Telefone 1</td>
				<td></td>
				<td><input value="<?=$dddtel;?>" type="text" name="dddtel"
					id="dddtel" maxlength="2" style="width: 20px;"> - <input
					value="<?=$tel1;?>" type="text" name="tel1" id="tel1" maxlength="4"
					style="width: 30px;"> - <input value="<?=$tel2;?>" type="text"
					name="tel2" id="tel2" maxlength="4" style="width: 30px;"></td>
			</tr>
			<tr>
				<td height="30">E-mail</td>
				<td></td>
				<td><input type="text" value="<?=strtolower ( $txtemail );?>"
					name="email" id="email" maxlength="100"></td>
			</tr>
			<tr>
				<td height="30">Identidade</td>
				<td></td>
				<td><input value="<?=$txtrg;?>" type="text" name="identidade"
					id="identidade" maxlength="9"
					onfocus="javascript:editar_cliente_rg();"
					onblur="javascript:editar_cliente_rg();"></td>
			</tr>
			<tr>
				<td height="30">Adicionais</td>
				<td></td>
				<td><textarea name="infoadd" style="width: 158px;" id="infoadd"
					rows="7"><?=$txtinf_adicional;?></textarea></td>
			</tr>
		</table>
		</td>
		<td width="20"></td>
		<td width="50%" valign="top">
		<table>
			<tr>
				<td height="30">Aniversario</td>
				<td width="5"></td>
				<td><SELECT NAME="dia" id="dia">
									<?
									for($n = 1; $n <= 31; $n ++) {
										?>
									<OPTION value="<?=$n;?>" <?=($n == $dia) ? 'selected' : '';?>><?=$n;?></option>
									<?
									}
									?>
								</SELECT>&nbsp;de&nbsp;<SELECT NAME="mes" id="mes">
									<?
									for($n = 1; $n <= 12; $n ++) {
										?>
									<OPTION value="<?=$n;?>" <?=($n == $mes) ? 'selected' : '';?>><?=$meses [$n];?></option>
									<?
									}
									?>
								</SELECT></td>
			</tr>
			<tr>
				<td height="30">Telefone 2</td>
				<td></td>
				<td><input value="<?=$dddcel;?>" type="text" name="dddcel"
					id="dddcel" maxlength="2" style="width: 20px;"> - <input
					value="<?=$cel1;?>" type="text" name="cel1" id="cel1" maxlength="4"
					style="width: 30px;"> - <input value="<?=$cel2;?>" type="text"
					name="cel2" id="cel2" maxlength="4" style="width: 30px;"></td>
			</tr>
			<tr>
				<td height="30">CPF</td>
				<td></td>
				<td><input value="<?=$txtcpf;?>" type="text" name="cpf" id="cpf"
					maxlength="11" onfocus="javascript:editar_cliente_cpf();"
					onblur="javascript:editar_cliente_cpf();"></td>
			</tr>
			<tr>
				<td height="30">CEP</td>
				<td></td>
				<td><input value="<?=substr ( $txtcep, 0, 5 );?>" style="width: 38px"
					type="text" id="cep" name="cep" maxlength="5"> - <input
					value="<?=substr ( $txtcep, 5, 3 );?>" style="width: 23px" type="text"
					id="cepdv" name="cepdv" maxlength="3"> <a href="javascript:;"
					onclick="javascript:carrega_CEP();">Buscar
				</button></td>
			</tr>
			<tr>
				<td colspan="3">
				<div id="cepdados" style="height: 150px; padding: 0px;">
				<table width="100%">
					<tr>
						<td width="60" height="30">Endere&ccedil;o</td>
						<td align="left"><input
							value="<?=ucwords ( strtolower ( $txtendereco ) );?>" type="text"
							name="endereco" id="endereco" maxlength="50"></td>
					</tr>
					<tr>
						<td height="30">Bairro</td>
						<td><input value="<?=ucwords ( strtolower ( $txtbairro ) );?>"
							type="text" name="bairro" id="bairro" maxlength="30"></td>
					</tr>
					<tr>
						<td height="30">Cidade</td>
						<td><input value="<?=ucwords ( strtolower ( $txtcidade ) );?>"
							type="text" name="cidade" id="cidade" value="RIO DE JANEIRO"
							maxlength="30"></td>
					</tr>
					<tr>
						<td height="30">Estado</td>
						<td><select name="estado" id="estado">
							<option value="AC">AC</option>
							<option value="AL">AL</option>
							<option value="AP">AP</option>
							<option value="AM">AM</option>
							<option value="BA">BA</option>
							<option value="CE">CE</option>
							<option value="DF">DF</option>
							<option value="GO">GO</option>
							<option value="ES">ES</option>
							<option value="MA">MA</option>
							<option value="MT">MT</option>
							<option value="MS">MS</option>
							<option value="MG">MG</option>
							<option value="PA">PA</option>
							<option value="PB">PB</option>
							<option value="PR">PR</option>
							<option value="PE">PE</option>
							<option value="PI">PI</option>
							<option value="RJ">RJ</option>
							<option value="RN">RN</option>
							<option value="RS">RS</option>
							<option value="RO">RO</option>
							<option value="RR">RR</option>
							<option value="SP">SP</option>
							<option value="SC">SC</option>
							<option value="SE">SE</option>
							<option value="TO">TO</option>
						</select></td>
					</tr>
				</table>
				</div>
				</td>
			</tr>
		</table>
		</td>
	</tr>
			<?
			if ($refer != 'aniver') {
				?>
			<tr>
		<td colspan="3" align="right">
		<table>
			<tr>
				<td><input type="button" class="botao" value="Voltar para lista"
					onclick="javascript:carrega_listagemcliente(path+'modulos/cliente/lista.php','conteudo_total');"></td>
				<td width="10"></td>
				<td><input type="button" class="botao" name="cadcliente"
					value="Adicionar cliente"
					onclick="javascript:editar_dadoscliente('modulos/cliente/cliente_cadastrar.php', 'true');"></td>
			</tr>
		</table>
		</td>
	</tr>
			<?
			}
			?>
		</table>

</form>

</div>

</fieldset>
