<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html" indent="yes"/>
<xsl:template match="/">
<html>
<body>
	 <table border="1" cellpading="3">
	  <tr>
	    <th>
			<font color="black">NIM</font>
		</th>
		<th>
			<font color="black">nama</font>
		</th>
		<th>
			<font color="black">email</font>
		</th>
		<th>
			<font color="black">jenis_kelamin</font>
		</th>
	  </tr>
	  <xsl:for-each select="webservice/mahasiswa">
	    <tr>
		  <td>
			<b>
				<xsl:value-of select="NIM"/>
			</b>
		  </td>
		  <td>
			<b>
				<xsl:value-of select="nama"/>
			</b>
		   </td>
		  <td>
			<b>
				<xsl:value-of select="email"/>
			</b>	
		  </td>
		  <td>
			<b>
				<xsl:value-of select="jenis_kelamin"/>
			</b>	
		  </td>
		  
		</tr>
	  </xsl:for-each>
	 </table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>