<?xml version='1.0' encoding='utf-8'?>

<xsl:stylesheet version='1.0' xmlns:xsl='http://www.w3.org/1999/XSL/Transform'>
<xsl:template match='/'>
  <html xmlns='http://www.w3.org/1999/xhtml' lang='es'>
    <head>
      <meta charset='utf-8' />
      <title>Murciélagos</title>
    </head>
    <body>
       <xsl:for-each select='Murcielagos/Murcielago'>
      <header>
      <h1>Murciélago Yoda</h1>
<p style='color: red;'><xsl:value-of select='Informacion'/></p>
      </header>
      <table style='border: 1px solid;'>
        <tr style='background-color: #9acd32;'>
          <th>Reino</th>
          <th>Filo</th>
          <th>Clase</th>
          <th>Orden</th>
          <th>Familia</th>
        </tr>
          <tr>
            <td><xsl:value-of select='Reino'/></td>
            <td><xsl:value-of select='Filo'/></td>
            <td><xsl:value-of select='Clase'/></td>
            <td><xsl:value-of select='Orden'/></td>
            <td><xsl:value-of select='Familia'/></td>
          </tr>
           </table>
          <p>Imagen del murciélago Yoda</p>
       <img><xsl:attribute name="src"><xsl:value-of select="Foto" /></xsl:attribute></img>
        </xsl:for-each>
    </body>
  </html>
</xsl:template>

</xsl:stylesheet>
