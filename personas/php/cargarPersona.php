<?php 
require('../../php/config.php');
$id=$_POST['id'];

$query ="SELECT * FROM Boletas WHERE id=".$id; 

$result = mysql_query($query)or die(mysql_error());
$num_row = mysql_num_rows($result);
$row=mysql_fetch_array($result);

$fechan = explode("-", $row['fechan']);
$tiempoc = explode("-", $row['tiempoc']);


if( $num_row >=1 ) { 
?>
<div class="panel panel-default">
  <div class="panel-heading text-left">Informaci&oacute;n Personal
	  <i style="cursor:pointer;float:right;font-size:18px;" id="quitar_detalles_persona" class="fa fa-times"></i>
  	  <span id="modificar_persona" style="cursor:pointer;float:right;font-size:18px;margin-right:5px;" class="glyphicon glyphicon-floppy-disk"></span>
	  <span style="display:none;" id="status_persona_modificada" class="label"></span>
  </div>
  <div class="panel-body" style="color:#fff;">
  <input name="id_e" id="id_e" type="hidden" value="<?php echo $row['id']; ?>" />
		<div class="col-md-3">
			<div class="form-group">
				<div class="input-group input-group-sm">
				  <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
				  <input type="text" class="form-control" id="nombre1_e" name="nombre1_e" placeholder="1er. Nombre" value="<?php echo $row['nombre1']; ?>">
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<div class="input-group input-group-sm">
				  <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
				  <input type="text" class="form-control" id="nombre2_e" name="nombre2_e" placeholder="2do. Nombre" value="<?php echo $row['nombre2']; ?>">
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<div class="input-group input-group-sm">
				  <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
				  <input type="text" class="form-control" id="apellido1_e" name="apellido1_e" placeholder="1er. Apellido" value="<?php echo $row['apellido1']; ?>">
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<div class="input-group input-group-sm">
				  <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
				  <input type="text" class="form-control" id="apellido2_e" name="apellido2_e" placeholder="2do. Apellido" value="<?php echo $row['apellido2']; ?>">
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<div class="input-group input-group-sm">
				  <div class="input-group-addon"><i class="fa fa-female"></i></div>
				  <input type="text" class="form-control" id="apellidoc_e" name="apellidoc_e" placeholder="Apellido Casada" value="<?php echo $row['apellidoc']; ?>">
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<div class="input-group input-group-sm">
				  <div class="input-group-addon"><i class="fa fa-child"></i></div>
				  <input type="text" class="form-control" id="nombreu_e" name="nombreu_e" placeholder="Nombre Usual" value="<?php echo $row['nombreu']; ?>">
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<div class="input-group input-group-sm">
				  <div class="input-group-addon"><i class="fa fa-male"></i><i class="fa fa-female"></i></div>
					<select id="genero_e" name="genero_e" class="form-control">
					  <option value="--" <?php if($row['genero']=="--"){echo 'selected="selected"';}?>>--</option>
					  <option value="Hombre" <?php if($row['genero']=="Hombre"){echo 'selected="selected"';}?>>Hombre</option>
					  <option value="Mujer" <?php if($row['genero']=="Mujer"){echo 'selected="selected"';}?>>Mujer</option>
					</select>
					<span class="input-group-addon">G&eacute;nero</span>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<div class="input-group input-group-sm">
				  <div class="input-group-addon"><i class="fa fa-heart"></i></div>
					<select id="estadoc_e" name="estadoc_e" class="form-control">
					  <option value="--" <?php if($row['estadoc']=="--"){echo 'selected="selected"';}?>>--</option>
					  <option value="Soltero" <?php if($row['estadoc']=="Soltero"){echo 'selected="selected"';}?>>Soltero</option>
					  <option value="Casado" <?php if($row['estadoc']=="Casado"){echo 'selected="selected"';}?>>Casado</option>
					  <option value="Unido" <?php if($row['estadoc']=="Unido"){echo 'selected="selected"';}?>>Unido</option>
					  <option value="Divorciado" <?php if($row['estadoc']=="Divorciado"){echo 'selected="selected"';}?>>Divorciado</option>
					  <option value="Viudo" <?php if($row['estadoc']=="Viudo"){echo 'selected="selected"';}?>>Viudo</option>
					</select>
				  <span class="input-group-addon">Estado Civil</span>
				</div>
			</div>
		</div>
			<div class="col-md-3">
				<h4><span class="label label-primary" style="font-weight:normal;">Fecha de Nacimiento:</span></h4>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<div class="input-group input-group-sm">
					<div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
						<select id="fechan_d_e" name="fechan_d_e" class="form-control">
					<option value="00" <?php if($fechan[2]=="00"){echo 'selected="selected"';}?>>--</option>
				  	<option value="01" <?php if($fechan[2]=="01"){echo 'selected="selected"';}?>>1</option>
				  	<option value="02" <?php if($fechan[2]=="02"){echo 'selected="selected"';}?>>2</option>
				  	<option value="03" <?php if($fechan[2]=="03"){echo 'selected="selected"';}?>>3</option>
				  	<option value="04" <?php if($fechan[2]=="04"){echo 'selected="selected"';}?>>4</option>
				  	<option value="05" <?php if($fechan[2]=="05"){echo 'selected="selected"';}?>>5</option>
					<option value="06" <?php if($fechan[2]=="06"){echo 'selected="selected"';}?>>6</option>
					<option value="07" <?php if($fechan[2]=="07"){echo 'selected="selected"';}?>>7</option>
					<option value="08" <?php if($fechan[2]=="08"){echo 'selected="selected"';}?>>8</option>
					<option value="09" <?php if($fechan[2]=="09"){echo 'selected="selected"';}?>>9</option>
					<option value="10" <?php if($fechan[2]=="10"){echo 'selected="selected"';}?>>10</option>
					<option value="11" <?php if($fechan[2]=="11"){echo 'selected="selected"';}?>>11</option>
					<option value="12" <?php if($fechan[2]=="12"){echo 'selected="selected"';}?>>12</option>
					<option value="13" <?php if($fechan[2]=="13"){echo 'selected="selected"';}?>>13</option>
					<option value="14" <?php if($fechan[2]=="14"){echo 'selected="selected"';}?>>14</option>
					<option value="15" <?php if($fechan[2]=="15"){echo 'selected="selected"';}?>>15</option>
					<option value="16" <?php if($fechan[2]=="16"){echo 'selected="selected"';}?>>16</option>
					<option value="17" <?php if($fechan[2]=="17"){echo 'selected="selected"';}?>>17</option>
					<option value="18" <?php if($fechan[2]=="18"){echo 'selected="selected"';}?>>18</option>
					<option value="19" <?php if($fechan[2]=="19"){echo 'selected="selected"';}?>>19</option>
					<option value="20" <?php if($fechan[2]=="20"){echo 'selected="selected"';}?>>20</option>
					<option value="21" <?php if($fechan[2]=="21"){echo 'selected="selected"';}?>>21</option>
					<option value="22" <?php if($fechan[2]=="22"){echo 'selected="selected"';}?>>22</option>
					<option value="23" <?php if($fechan[2]=="23"){echo 'selected="selected"';}?>>23</option>
					<option value="24" <?php if($fechan[2]=="24"){echo 'selected="selected"';}?>>24</option>
					<option value="25" <?php if($fechan[2]=="25"){echo 'selected="selected"';}?>>25</option>
					<option value="26" <?php if($fechan[2]=="26"){echo 'selected="selected"';}?>>26</option>
					<option value="27" <?php if($fechan[2]=="27"){echo 'selected="selected"';}?>>27</option>
					<option value="28" <?php if($fechan[2]=="28"){echo 'selected="selected"';}?>>28</option>
					<option value="29" <?php if($fechan[2]=="29"){echo 'selected="selected"';}?>>29</option>
					<option value="30" <?php if($fechan[2]=="30"){echo 'selected="selected"';}?>>30</option>
					<option value="31" <?php if($fechan[2]=="31"){echo 'selected="selected"';}?>>31</option>
						</select>
						<span class="input-group-addon">D&iacute;a</span>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<div class="input-group input-group-sm">
					<div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
						<select id="fechan_m_e" name="fechan_m_e" class="form-control">
							<option value="00" <?php if($fechan[1]=="00"){echo 'selected="selected"';}?>>--</option>
							<option value="1"  <?php if($fechan[1]=="1"){echo 'selected="selected"';}?>>Enero</option>
							<option value="2"  <?php if($fechan[1]=="2"){echo 'selected="selected"';}?>>Febrero</option>
							<option value="3"  <?php if($fechan[1]=="3"){echo 'selected="selected"';}?>>Marzo</option>
							<option value="4"  <?php if($fechan[1]=="4"){echo 'selected="selected"';}?>>Abril</option>
							<option value="5"  <?php if($fechan[1]=="5"){echo 'selected="selected"';}?>>Mayo</option>
							<option value="6"  <?php if($fechan[1]=="6"){echo 'selected="selected"';}?>>Junio</option>
							<option value="7"  <?php if($fechan[1]=="7"){echo 'selected="selected"';}?>>Julio</option>
							<option value="8"  <?php if($fechan[1]=="8"){echo 'selected="selected"';}?>>Agosto</option>
							<option value="9"  <?php if($fechan[1]=="9"){echo 'selected="selected"';}?>>Septiembre</option>
							<option value="10"  <?php if($fechan[1]=="10"){echo 'selected="selected"';}?>>Octubre</option>
							<option value="11"  <?php if($fechan[1]=="11"){echo 'selected="selected"';}?>>Noviembre</option>
							<option value="12"  <?php if($fechan[1]=="12"){echo 'selected="selected"';}?>>Diciembre</option>
						</select> 
						<span class="input-group-addon">Mes</span>
					</div>
				</div>
			</div>
		<div class="col-md-3">
				<div class="form-group">
					<div class="input-group input-group-sm">
						<div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
							<select id="fechan_a_e" name="fechan_a_e" class="form-control">
								<option value="0000" <?php if($fechan[0]=="0000"){echo 'selected="selected"';}?> >--</option>
								<option value="2014" <?php if($fechan[0]=="2014"){echo 'selected="selected"';}?> >2014</option>
								<option value="2013" <?php if($fechan[0]=="2013"){echo 'selected="selected"';}?> >2013</option>
								<option value="2012" <?php if($fechan[0]=="2012"){echo 'selected="selected"';}?> >2012</option>
								<option value="2011" <?php if($fechan[0]=="2011"){echo 'selected="selected"';}?> >2011</option>
								<option value="2010" <?php if($fechan[0]=="2010"){echo 'selected="selected"';}?> >2010</option>
								<option value="2009" <?php if($fechan[0]=="2009"){echo 'selected="selected"';}?> >2009</option>
								<option value="2008" <?php if($fechan[0]=="2008"){echo 'selected="selected"';}?> >2008</option>
								<option value="2007" <?php if($fechan[0]=="2007"){echo 'selected="selected"';}?> >2007</option>
								<option value="2006" <?php if($fechan[0]=="2006"){echo 'selected="selected"';}?> >2006</option>
								<option value="2005" <?php if($fechan[0]=="2005"){echo 'selected="selected"';}?> >2005</option>
								<option value="2004" <?php if($fechan[0]=="2004"){echo 'selected="selected"';}?> >2004</option>
								<option value="2003" <?php if($fechan[0]=="2003"){echo 'selected="selected"';}?> >2003</option>
								<option value="2002" <?php if($fechan[0]=="2002"){echo 'selected="selected"';}?> >2002</option>
								<option value="2001" <?php if($fechan[0]=="2001"){echo 'selected="selected"';}?> >2001</option>
								<option value="2000" <?php if($fechan[0]=="2000"){echo 'selected="selected"';}?> >2000</option>
								<option value="1999" <?php if($fechan[0]=="1999"){echo 'selected="selected"';}?> >1999</option>
								<option value="1998" <?php if($fechan[0]=="1998"){echo 'selected="selected"';}?> >1998</option>
								<option value="1997" <?php if($fechan[0]=="1997"){echo 'selected="selected"';}?> >1997</option>
								<option value="1996" <?php if($fechan[0]=="1996"){echo 'selected="selected"';}?> >1996</option>
								<option value="1995" <?php if($fechan[0]=="1995"){echo 'selected="selected"';}?> >1995</option>
								<option value="1994" <?php if($fechan[0]=="1994"){echo 'selected="selected"';}?> >1994</option>
								<option value="1993" <?php if($fechan[0]=="1993"){echo 'selected="selected"';}?> >1993</option>
								<option value="1992" <?php if($fechan[0]=="1992"){echo 'selected="selected"';}?> >1992</option>
								<option value="1991" <?php if($fechan[0]=="1991"){echo 'selected="selected"';}?> >1991</option>
								<option value="1990" <?php if($fechan[0]=="1990"){echo 'selected="selected"';}?> >1990</option>
								<option value="1989" <?php if($fechan[0]=="1989"){echo 'selected="selected"';}?> >1989</option>
								<option value="1988" <?php if($fechan[0]=="1988"){echo 'selected="selected"';}?> >1988</option>
								<option value="1987" <?php if($fechan[0]=="1987"){echo 'selected="selected"';}?> >1987</option>
								<option value="1986" <?php if($fechan[0]=="1986"){echo 'selected="selected"';}?> >1986</option>
								<option value="1985" <?php if($fechan[0]=="1985"){echo 'selected="selected"';}?> >1985</option>
								<option value="1984" <?php if($fechan[0]=="1984"){echo 'selected="selected"';}?> >1984</option>
								<option value="1983" <?php if($fechan[0]=="1983"){echo 'selected="selected"';}?> >1983</option>
								<option value="1982" <?php if($fechan[0]=="1982"){echo 'selected="selected"';}?> >1982</option>
								<option value="1981" <?php if($fechan[0]=="1981"){echo 'selected="selected"';}?> >1981</option>
								<option value="1980" <?php if($fechan[0]=="1980"){echo 'selected="selected"';}?> >1980</option>
								<option value="1979" <?php if($fechan[0]=="1979"){echo 'selected="selected"';}?> >1979</option>
								<option value="1978" <?php if($fechan[0]=="1978"){echo 'selected="selected"';}?> >1978</option>
								<option value="1977" <?php if($fechan[0]=="1977"){echo 'selected="selected"';}?> >1977</option>
								<option value="1976" <?php if($fechan[0]=="1976"){echo 'selected="selected"';}?> >1976</option>
								<option value="1975" <?php if($fechan[0]=="1975"){echo 'selected="selected"';}?> >1975</option>
								<option value="1974" <?php if($fechan[0]=="1974"){echo 'selected="selected"';}?> >1974</option>
								<option value="1973" <?php if($fechan[0]=="1973"){echo 'selected="selected"';}?> >1973</option>
								<option value="1972" <?php if($fechan[0]=="1972"){echo 'selected="selected"';}?> >1972</option>
								<option value="1971" <?php if($fechan[0]=="1971"){echo 'selected="selected"';}?> >1971</option>
								<option value="1970" <?php if($fechan[0]=="1970"){echo 'selected="selected"';}?> >1970</option>
								<option value="1969" <?php if($fechan[0]=="1969"){echo 'selected="selected"';}?> >1969</option>
								<option value="1968" <?php if($fechan[0]=="1968"){echo 'selected="selected"';}?> >1968</option>
								<option value="1967" <?php if($fechan[0]=="1967"){echo 'selected="selected"';}?> >1967</option>
								<option value="1966" <?php if($fechan[0]=="1966"){echo 'selected="selected"';}?> >1966</option>
								<option value="1965" <?php if($fechan[0]=="1965"){echo 'selected="selected"';}?> >1965</option>
								<option value="1964" <?php if($fechan[0]=="1964"){echo 'selected="selected"';}?> >1964</option>
								<option value="1963" <?php if($fechan[0]=="1963"){echo 'selected="selected"';}?> >1963</option>
								<option value="1962" <?php if($fechan[0]=="1962"){echo 'selected="selected"';}?> >1962</option>
								<option value="1961" <?php if($fechan[0]=="1961"){echo 'selected="selected"';}?> >1961</option>
								<option value="1960" <?php if($fechan[0]=="1960"){echo 'selected="selected"';}?> >1960</option>
								<option value="1959" <?php if($fechan[0]=="1959"){echo 'selected="selected"';}?> >1959</option>
								<option value="1958" <?php if($fechan[0]=="1958"){echo 'selected="selected"';}?> >1958</option>
								<option value="1957" <?php if($fechan[0]=="1957"){echo 'selected="selected"';}?> >1957</option>
								<option value="1956" <?php if($fechan[0]=="1956"){echo 'selected="selected"';}?> >1956</option>
								<option value="1955" <?php if($fechan[0]=="1955"){echo 'selected="selected"';}?> >1955</option>
								<option value="1954" <?php if($fechan[0]=="1954"){echo 'selected="selected"';}?> >1954</option>
								<option value="1953" <?php if($fechan[0]=="1953"){echo 'selected="selected"';}?> >1953</option>
								<option value="1952" <?php if($fechan[0]=="1952"){echo 'selected="selected"';}?> >1952</option>
								<option value="1951" <?php if($fechan[0]=="1951"){echo 'selected="selected"';}?> >1951</option>
								<option value="1950" <?php if($fechan[0]=="1950"){echo 'selected="selected"';}?> >1950</option>
								<option value="1949" <?php if($fechan[0]=="1949"){echo 'selected="selected"';}?> >1949</option>
								<option value="1948" <?php if($fechan[0]=="1948"){echo 'selected="selected"';}?> >1948</option>
								<option value="1947" <?php if($fechan[0]=="1947"){echo 'selected="selected"';}?> >1947</option>
								<option value="1946" <?php if($fechan[0]=="1946"){echo 'selected="selected"';}?> >1946</option>
								<option value="1945" <?php if($fechan[0]=="1945"){echo 'selected="selected"';}?> >1945</option>
								<option value="1944" <?php if($fechan[0]=="1944"){echo 'selected="selected"';}?> >1944</option>
								<option value="1943" <?php if($fechan[0]=="1943"){echo 'selected="selected"';}?> >1943</option>
								<option value="1942" <?php if($fechan[0]=="1942"){echo 'selected="selected"';}?> >1942</option>
								<option value="1941" <?php if($fechan[0]=="1941"){echo 'selected="selected"';}?> >1941</option>
								<option value="1940" <?php if($fechan[0]=="1940"){echo 'selected="selected"';}?> >1940</option>
								<option value="1939" <?php if($fechan[0]=="1939"){echo 'selected="selected"';}?> >1939</option>
								<option value="1938" <?php if($fechan[0]=="1938"){echo 'selected="selected"';}?> >1938</option>
								<option value="1937" <?php if($fechan[0]=="1937"){echo 'selected="selected"';}?> >1937</option>
								<option value="1936" <?php if($fechan[0]=="1936"){echo 'selected="selected"';}?> >1936</option>
								<option value="1935" <?php if($fechan[0]=="1935"){echo 'selected="selected"';}?> >1935</option>
								<option value="1934" <?php if($fechan[0]=="1934"){echo 'selected="selected"';}?> >1934</option>
								<option value="1933" <?php if($fechan[0]=="1933"){echo 'selected="selected"';}?> >1933</option>
								<option value="1932" <?php if($fechan[0]=="1932"){echo 'selected="selected"';}?> >1932</option>
								<option value="1931" <?php if($fechan[0]=="1931"){echo 'selected="selected"';}?> >1931</option>
								<option value="1930" <?php if($fechan[0]=="1930"){echo 'selected="selected"';}?> >1930</option>
								<option value="1929" <?php if($fechan[0]=="1929"){echo 'selected="selected"';}?> >1929</option>
								<option value="1928" <?php if($fechan[0]=="1928"){echo 'selected="selected"';}?> >1928</option>
								<option value="1927" <?php if($fechan[0]=="1927"){echo 'selected="selected"';}?> >1927</option>
								<option value="1926" <?php if($fechan[0]=="1926"){echo 'selected="selected"';}?> >1926</option>
								<option value="1925" <?php if($fechan[0]=="1925"){echo 'selected="selected"';}?> >1925</option>
								<option value="1924" <?php if($fechan[0]=="1924"){echo 'selected="selected"';}?> >1924</option>
								<option value="1923" <?php if($fechan[0]=="1923"){echo 'selected="selected"';}?> >1923</option>
								<option value="1922" <?php if($fechan[0]=="1922"){echo 'selected="selected"';}?> >1922</option>
								<option value="1921" <?php if($fechan[0]=="1921"){echo 'selected="selected"';}?> >1921</option>
								<option value="1920" <?php if($fechan[0]=="1920"){echo 'selected="selected"';}?> >1920</option>
								<option value="1919" <?php if($fechan[0]=="1919"){echo 'selected="selected"';}?> >1919</option>
								<option value="1918" <?php if($fechan[0]=="1918"){echo 'selected="selected"';}?> >1918</option>
								<option value="1917" <?php if($fechan[0]=="1917"){echo 'selected="selected"';}?> >1917</option>
								<option value="1916" <?php if($fechan[0]=="1916"){echo 'selected="selected"';}?> >1916</option>
								<option value="1915" <?php if($fechan[0]=="1915"){echo 'selected="selected"';}?> >1915</option>
								<option value="1914" <?php if($fechan[0]=="1914"){echo 'selected="selected"';}?> >1914</option>
								<option value="1913" <?php if($fechan[0]=="1913"){echo 'selected="selected"';}?> >1913</option>
								<option value="1912" <?php if($fechan[0]=="1912"){echo 'selected="selected"';}?> >1912</option>
								<option value="1911" <?php if($fechan[0]=="1911"){echo 'selected="selected"';}?> >1911</option>
								<option value="1910" <?php if($fechan[0]=="1910"){echo 'selected="selected"';}?> >1910</option>
								<option value="1909" <?php if($fechan[0]=="1909"){echo 'selected="selected"';}?> >1909</option>
								<option value="1908" <?php if($fechan[0]=="1908"){echo 'selected="selected"';}?> >1908</option>
								<option value="1907" <?php if($fechan[0]=="1907"){echo 'selected="selected"';}?> >1907</option>
								<option value="1906" <?php if($fechan[0]=="1906"){echo 'selected="selected"';}?> >1906</option>
								<option value="1905" <?php if($fechan[0]=="1905"){echo 'selected="selected"';}?> >1905</option>
								<option value="1904" <?php if($fechan[0]=="1904"){echo 'selected="selected"';}?> >1904</option>
								<option value="1903" <?php if($fechan[0]=="1903"){echo 'selected="selected"';}?> >1903</option>
								<option value="1902" <?php if($fechan[0]=="1902"){echo 'selected="selected"';}?> >1902</option>
								<option value="1901" <?php if($fechan[0]=="1901"){echo 'selected="selected"';}?> >1901</option>
								<option value="1900" <?php if($fechan[0]=="1900"){echo 'selected="selected"';}?> >1900</option>
							</select>
							<span class="input-group-addon">A&ntilde;o</span>
						</div>
					</div>
				</div>
		</div>
	</div>
  <div class="panel panel-default">
  <div class="panel-heading text-left">Informaci&oacute;n de Contacto</div>
	  <div class="panel-body" style="color:#fff;">
	  
		<div class="col-md-3">
			<div class="form-group">
				<div class="input-group input-group-sm">
				  <div class="input-group-addon"><i class="fa fa-home"></i></div>
				  <input type="text" class="form-control" id="direccion_e" name="direccion_e" placeholder="Direcci&oacute;n de residencia" value="<?php echo $row['direccion']; ?>">
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<div class="input-group input-group-sm">
				  <div class="input-group-addon"><i class="fa fa-globe"></i></div>
				  <select id="pais_e" name="pais_e" class="form-control">
					<option value="Guatemala" selected="selected">Guatemala</option>
				  </select>
				  <span class="input-group-addon">Pa&iacute;s</span>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<div class="input-group input-group-sm">
				  <div class="input-group-addon"><i class="fa fa-globe"></i></div>
				  <select id="departamento_e" name="departamento_e" class="form-control">
					<option value="Peten" <?php if($row['departamento']=="Peten"){echo 'selected="selected"';}?>>Pet&eacute;n</option>
					<option value="Huehuetenango" <?php if($row['departamento']=="Huehuetenango"){echo 'selected="selected"';}?>>Huehuetenango</option>
					<option value="Quiche" <?php if($row['departamento']=="Quiche"){echo 'selected="selected"';}?>>Quich&eacute;</option>
					<option value="Alta Verapaz" <?php if($row['departamento']=="Alta Verapaz"){echo 'selected="selected"';}?>>Alta Verapaz</option>
					<option value="Izabal" <?php if($row['departamento']=="Izabal"){echo 'selected="selected"';}?>>Izabal</option>
					<option value="San Marcos" <?php if($row['departamento']=="San Marcos"){echo 'selected="selected"';}?>>San Marcos</option>
					<option value="Quetzaltenango" <?php if($row['departamento']=="Quetzaltenango"){echo 'selected="selected"';}?>>Quetzaltenango</option>
					<option value="Totonicapen" <?php if($row['departamento']=="Totonicapan"){echo 'selected="selected"';}?>>Totonicap&aacute;n</option>
					<option value="Solola" <?php if($row['departamento']=="Solola"){echo 'selected="selected"';}?>>Solol&aacute;</option>
					<option value="Chimaltenango" <?php if($row['departamento']=="Chimaltenango"){echo 'selected="selected"';}?>>Chimaltenango</option>
					<option value="Sacatepequez" <?php if($row['departamento']=="Sacatepequez"){echo 'selected="selected"';}?>>Sacatep&eacute;quez</option>
					<option value="Guatemala" <?php if($row['departamento']=="Guatemala"){echo 'selected="selected"';}?>>Guatemala</option>
					<option value="Baja Verapaz" <?php if($row['departamento']=="Baja Verapaz"){echo 'selected="selected"';}?>>Baja Verapaz</option>
					<option value="El Progreso" <?php if($row['departamento']=="El Progreso"){echo 'selected="selected"';}?>>El Progreso</option>
					<option value="Jalapa" <?php if($row['departamento']=="Jalapa"){echo 'selected="selected"';}?>>Jalapa</option>
					<option value="Zacapa" <?php if($row['departamento']=="Zacapa"){echo 'selected="selected"';}?>>Zacapa</option>
					<option value="Chiquimula" <?php if($row['departamento']=="Chiquimula"){echo 'selected="selected"';}?>>Chiquimula</option>
					<option value="Retalhuleu" <?php if($row['departamento']=="Retalhuleu"){echo 'selected="selected"';}?>>Retalhuleu</option>
					<option value="Suchitepequez" <?php if($row['departamento']=="Suchitepequez"){echo 'selected="selected"';}?>>Suchitep&eacute;quez</option>
					<option value="Escuintla" <?php if($row['departamento']=="Escuintla"){echo 'selected="selected"';}?>>Escuintla</option>
					<option value="Santa Rosa" <?php if($row['departamento']=="Santa Rosa"){echo 'selected="selected"';}?>>Santa Rosa</option>
					<option value="Jutiapa" <?php if($row['departamento']=="Jutiapa"){echo 'selected="selected"';}?>>Jutiapa</option>
				</select>
				<span class="input-group-addon">Depto.</span>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<div class="input-group input-group-sm">
				  <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
				  <input type="text" class="form-control" id="municipio_e" name="municipio_e" placeholder="Municipio" value="<?php echo $row['municipio']; ?>">
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<div class="input-group input-group-sm">
				  <div class="input-group-addon"><i class="fa fa-users"></i></div>
				  <select id="puo_e" name="puo_e" class="form-control">
					<option value="--" <?php if($row['puo']=="--"){echo 'selected="selected"';}?> >--</option>
					<option value="Estudiante" <?php if($row['puo']=="Estudiante"){echo 'selected="selected"';}?>>Estudiante</option>
					<option value="Obrero" <?php if($row['puo']=="Obrero"){echo 'selected="selected"';}?>>Obrero</option>
					<option value="Profesional" <?php if($row['puo']=="Profesional"){echo 'selected="selected"';}?>>Profesional</option>
					<option value="Ama de casa" <?php if($row['puo']=="Ama de Casa"){echo 'selected="selected"';}?>>Ama de Casa</option>
					<option value="Empresario" <?php if($row['puo']=="Empresario"){echo 'selected="selected"';}?>>Empresario</option>
				  </select> 
				  <span class="input-group-addon">Profesi&oacute;n</span>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<div class="input-group input-group-sm">
				  <div class="input-group-addon"><i class="fa fa-building-o"></i></div>
				  <input type="text" class="form-control" id="trabajo_e" name="trabajo_e" placeholder="Lugar de Trabajo" value="<?php echo $row['trabajo']; ?>">
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<div class="input-group input-group-sm">
				  <div class="input-group-addon"><i class="fa fa-book"></i></div>
					<select id="universidad_e" name="universidad_e" class="form-control">
						<option value="--" <?php if($row['universidad']=="--"){echo 'selected="selected"';}?> >--</option>
						<option value="Universidad San Carlos" <?php if($row['universidad']=="Universidad San Carlos"){echo 'selected="selected"';}?>>USAC - San Carlos de Guatemala</option>
						<option value="Universidad Mariano Galvez" <?php if($row['universidad']=="Universidad Mariano Galvez"){echo 'selected="selected"';}?>>UMG - Mariano G&aacute;lvez de Guatemala</option>
						<option value="Universidad Rafael Landivar" <?php if($row['universidad']=="Universidad Rafael Landivar"){echo 'selected="selected"';}?>>URL - Rafael Land&iacute;var</option>
						<option value="Universidad Del Valle" <?php if($row['universidad']=="Universidad Del Valle"){echo 'selected="selected"';}?>>UVG - Del Valle de Guatemala</option>
						<option value="Universidad Galileo" <?php if($row['universidad']=="Universidad Galileo"){echo 'selected="selected"';}?>>UG - Galilelo</option>
						<option value="Universidad San Pablo" <?php if($row['universidad']=="Universidad San Pablo"){echo 'selected="selected"';}?>>USPG - San Pablo de Guatemala</option>
						<option value="Universidad Mesoamericana" <?php if($row['universidad']=="Universidad Mesoamericana"){echo 'selected="selected"';}?>>UMES - Mesoamericana</option>
						<option value="Universidad Da Vinci" <?php if($row['universidad']=="Universidad Da Vinci"){echo 'selected="selected"';}?>>UDV - Da Vinci de Guatemala</option>
						<option value="Universidad Rural" <?php if($row['universidad']=="Universidad Rural"){echo 'selected="selected"';}?>>URG - Rural de Guatemala</option>
						<option value="Universidad Francisco Marroquin" <?php if($row['universidad']=="Universidad Francisco Marroquin"){echo 'selected="selected"';}?>>UFM - Francisco Marroqu&iacute;n</option>
						<option value="Universidad Panamericana" <?php if($row['universidad']=="Universidad Panamericana"){echo 'selected="selected"';}?>>UPANA - Panamericana de Guatemala</option>
						<option value="Universidad Internaciones" <?php if($row['universidad']=="Universidad Internaciones"){echo 'selected="selected"';}?>>UNI - Internaciones</option>
						<option value="Universidad Itsmo" <?php if($row['universidad']=="Universidad Itsmo"){echo 'selected="selected"';}?>>UNIS - Itsmo</option>
						<option value="Universidad De Occidente" <?php if($row['universidad']=="Universidad De Occidente"){echo 'selected="selected"';}?>>UDEO - De Occidente</option>
					</select>
					<span class="input-group-addon">Univ.</span>
				  </div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<div class="input-group input-group-sm">
				  <div class="input-group-addon"><i class="fa fa-book"></i></div>
				  <input type="text" class="form-control" id="colegio_e" name="colegio_e" placeholder="Colegio/Escuela" value="<?php echo $row['colegio']; ?>">
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<div class="input-group input-group-sm">
				  <div class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></div>
				  <input type="text" class="form-control" id="telefono_e" name="telefono_e" placeholder="Tel&eacute;fono Residencial" value="<?php echo $row['telefono']; ?>">
				</div>
			</div>
		</div>		
		<div class="col-md-3">
			<div class="form-group">
				<div class="input-group input-group-sm">
				  <div class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></div>
				  <input type="text" class="form-control" id="celular_e" name="celular_e" placeholder="Tel&eacute;fono M&oacute;vil" value="<?php echo $row['celular']; ?>">
				</div>
			</div>
		</div>	
		<div class="col-md-3">
			<div class="form-group">
				<div class="input-group input-group-sm">
				  <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
				  <input type="text" class="form-control" id="correo_e" name="correo_e" placeholder="Correo Electr&oacute;nico" value="<?php echo $row['correo']; ?>">
				</div>
			</div>
		</div>	
		<div class="col-md-3">
			<div class="form-group">
				<div class="input-group input-group-sm">
				  <div class="input-group-addon"><span class="glyphicon glyphicon-time"></span></div>
				  <input type="text" class="form-control horas" id="hora_e" name="hora_e" value="<?php echo $row['hora']; ?>" data-format="hh:mm A" placeholder="Hora para localizar" readonly="">
				  <span class="input-group-addon">Localizable</span>
				</div>
				
			</div>
		</div>			
	  </div>
  </div>
<div class="panel panel-default">
  <div class="panel-heading text-left">Informaci&oacute;n Congregacional</div>
  <div class="panel-body" style="color:#fff;">
	<div class="col-md-4">
		<div class="form-group">
			<div class="input-group input-group-sm">
				  <div class="input-group-addon">&iquest;Asiste a Iglesia El Shaddai?</div>
					<select id="iglesia_e" name="iglesia_e" class="form-control">
						  <option value="Si" <?php if($row['iglesia']=="Si"){echo 'selected="selected"';}?>>Si</option>
						  <option value="No" <?php if($row['iglesia']=="No"){echo 'selected="selected"';}?>>No</option>
					</select>
			</div>
		</div>
		<!--<input id="switch-state iglesia" type="checkbox" checked name="servidorActivo" data-label-text="&iquest;Asiste a Iglesia El Shaddai?" data-size="small" data-off-text="No" data-on-text="Si">-->
	</div>
	<div class="col-md-8" id="iglesia_casilla_e">
		<div class="form-group">
			<div class="input-group input-group-sm">
			  <div class="input-group-addon">Nombre de la Iglesia</div>
			  <input type="text" id="iglesian_e" name="iglesian_e" class="form-control" value="<?php echo $row['iglesian']; ?>"/>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="col-md-4">
			<h4>
			<span class="label label-primary" style="font-weight:normal;">&iquest;Tiempo de Congregarse?</span>
			</h4>
		</div>
		<div class="col-md-4">
			<div class="input-group input-group-sm">
				 <div class="input-group-addon"><span class="glyphicon glyphicon-sort-by-order"></span></div>
				<input type="text" id="tiempoc_e" name="tiempoc_e" class="form-control" value="<?php echo $tiempoc[0]; ?>"/>
				<span class="input-group-addon">Cantidad</span>
			</div>
		</div>
		<div class="col-md-4">
			<div class="input-group input-group-sm">
				 <div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
				<select id="cantidad_e" name="cantidad_e" class="form-control">
					<option value="--" <?php if($tiempoc[1]=="--"){echo 'selected="selected"';}?> >--</option>
					<option value="Anos" <?php if($tiempoc[1]=="Anos"){echo 'selected="selected"';}?>>A&ntilde;os</option>
					<option value="Meses" <?php if($tiempoc[1]=="Meses"){echo 'selected="selected"';}?>>Meses</option>
					<option value="Semanas" <?php if($tiempoc[1]=="Semanas"){echo 'selected="selected"';}?>>Semanas</option>
					<option value="Dias" <?php if($tiempoc[1]=="Dias"){echo 'selected="selected"';}?>>D&iacute;as</option>
				</select>
			  <span class="input-group-addon">Medida</span>
			</div>
		</div>
	</div>
</div>
</div>

<?php }?>