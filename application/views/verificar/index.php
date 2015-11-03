<form action="" method="POST">
	<table align="center" width="30%" >
		<tr style="background:blue;color:white;" >
			<td colspan="2" align="center">PARAMETROS DE LA BASE DE DATOS</td>
		</tr>
		<tr>
			<td>HOST</td>
			<td><input type="text" name="host" required></td>
		</tr>
		<tr>
			<td>GESTOR DE BASE DE DATOS</td>
			<td>
				<select name="driver" id="" required>
					<option value="0">--SELECCIONE--</option>
					<option value="mysql">--MYSQL--</option>
					<option value="postgre">--POSTGRE--</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>NOMBRE BASE DE DATOS</td>
			<td><input type="text" name="basedatos" required></td>
		</tr>
		<tr>
			<td>USUARIO BD</td>
			<td><input type="text" name="user" required></td>
		</tr>
		<tr>
			<td>CLAVE BD</td>
			<td><input type="text" name="password"></td>
		</tr>
		<tr>
			<td colspan="2" align="center" ><input type="submit" value="ACEPTAR" ></td>
		</tr>
	</table>
</form>