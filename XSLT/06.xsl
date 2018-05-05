<?xml version='1.0' encoding='utf-8'?>

<xsl:stylesheet version='1.0' xmlns:xsl='http://www.w3.org/1999/XSL/Transform'>
<xsl:template match='/'>
  <html xmlns='http://www.w3.org/1999/xhtml' lang='es'>
    <head>
      <meta charset='utf-8' />
      <title>Videojuegos</title>
    </head>
    <body>
      <h1>Videojuegos</h1>
      <table style='border: 1px solid;'>
        <tr style='background-color: #9acd32;'>
          <th>Título</th>
          <th>Género</th>
          <th>Plataforma</th>
        </tr>
           <xsl:for-each select='Videojuegos/Videojuego'>
		   <xsl:sort select="Titulo"/>
          <tr>
            <td><xsl:value-of select='Titulo'/></td>
            <td><xsl:value-of select='Genero'/></td>
            <td><xsl:value-of select='Plataforma'/></td>
          </tr>
        </xsl:for-each>
        </table>
    </body>
  </html>
</xsl:template>

</xsl:stylesheet>
