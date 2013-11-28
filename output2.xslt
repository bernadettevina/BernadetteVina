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
			<font color="black">Nama</font>
		</th>
		<th>
			<font color="black">email</font>
		</th>
	  </tr>
	  <xsl:for-each select="mydata/row">
	    <tr>
		  <td>
			<b>
				<xsl:value-of select="NIM"/>
			</b>
		  </td>
		  <td>
			<b>
				<xsl:value-of select="Nama"/>
			</b>
		   </td>
		  <td>
			<b>
				<xsl:value-of select="email"/>
			</b>	
		  </td>
		</tr>
	  </xsl:for-each>
	 </table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
