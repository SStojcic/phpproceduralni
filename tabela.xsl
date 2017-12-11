<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">

<html>
<head><link rel="stylesheet" type="text/css" href="style.css"/>
</head>
  <body>
  
  <div id="tabela">
			<table class="sredina" border="1">
			  <tr>
			  <th>RB</th>
				 <th>Location</th>
				 <th>Last mod</th>
				<th>Change frequency</th>
				</tr>
		<xsl:for-each select="urlset/url">
		
		

	<tr>
   
       <td><xsl:value-of select="position()"/></td>  
	    <td><xsl:value-of select="loc"/></td>
       <td><xsl:value-of select="lastmod"/></td>
	   <td><xsl:value-of select="changefreq"/></td>
	  
   </tr>
 
 
   </xsl:for-each>
   </table>
   </div>
   </body></html>
   </xsl:template>
   </xsl:stylesheet>