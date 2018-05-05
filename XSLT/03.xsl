<?xml version='1.0' encoding='utf-8'?>

<xsl:stylesheet version='1.0' xmlns:xsl='http://www.w3.org/1999/XSL/Transform'>
<xsl:template match='/'>
  <html xmlns='http://www.w3.org/1999/xhtml' lang='es'>
    <head>
      <meta charset='utf-8' />
      <title>Camaleones</title>
    </head>
    <body>
      <h1>Estudiantes</h1>
      <table style='border: 1px solid;'>
        <tr style='background-color: #9acd32;'>
          <th>Género</th>
          <th>Reino</th>
          <th>Filo</th>
          <th>Clase</th>
          <th>Orden</th>
        </tr>
        <xsl:for-each select='Camaleones/Camaleon'>
          <tr>
            <td><xsl:value-of select='Genero'/></td>
            <td><xsl:value-of select='Reino'/></td>
            <td><xsl:value-of select='Filo'/></td>
            <td><xsl:value-of select='Clase'/></td>
            <td><xsl:value-of select='Orden'/></td>
          </tr>
        </xsl:for-each>
      </table>
    </body>
  </html>
</xsl:template>

</xsl:stylesheet>