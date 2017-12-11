<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">

<html>
<head><link rel="stylesheet" type="text/css" href="style.css"/>
</head>
  <body>
  <h1 class="rss">RSS </h1>
  <div id="tabela">
			<table class="sredina" border="1">
			  <tr>
			  <th>RB</th>
				 <th>Naslov</th>
				 <th>Link</th>
				<th>Opis</th>
				</tr>

		<xsl:for-each select="rss/channel/item">
		
		

	<tr>
   
       <td><xsl:value-of select="position()"/></td>  
	    <td><xsl:value-of select="title"/></td>
       <td><xsl:value-of select="link"/></td>
	   <td><xsl:value-of select="description"/></td>
	  
   </tr>
 
 
   </xsl:for-each>
   </table>
   </div>
   </body></html>
   </xsl:template>
   </xsl:stylesheet>