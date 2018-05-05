<?xml version='1.0' encoding='utf-8'?>

<xsl:stylesheet version='1.0' xmlns:xsl='http://www.w3.org/1999/XSL/Transform'>
<xsl:template match='/'>
  <html xmlns='http://www.w3.org/1999/xhtml' lang='es'>
    <head>
      <meta charset='utf-8' />
      <title>CDs</title>
    </head>
    <body>
      <h1>CDs</h1>
      <table style='border: 1px solid;'>
        <tr style='background-color: red;'>
          <th>Título</th>
        </tr>
           <xsl:for-each select='catalog/cd'>
		   <xsl:sort select="title"/>
		   <xsl:if test="price &gt; 9">
          <tr>
            <td><xsl:value-of select='title'/></td>
          </tr>
          </xsl:if>
        </xsl:for-each>
        </table>
    </body>
  </html>
</xsl:template>

</xsl:stylesheet>
