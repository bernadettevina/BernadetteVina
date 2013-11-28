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
			<font color="black">asal_sekolah</font>
		</th>
		<th>
			<font color="black">Kota</font>
		</th>
	  </tr>
	  <xsl:for-each select="mydata/item">
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
				<xsl:value-of select="asal_sekolah"/>
			</b>	
		  </td>
		  <td>
			<b>
				<xsl:value-of select="Kota"/>
			</b>	
		  </td>
		</tr>
	  </xsl:for-each>
	 </table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
