<?xml version='1.0' encoding='utf-8'?>

<xsl:stylesheet version='1.0' xmlns:xsl='http://www.w3.org/1999/XSL/Transform'>
<xsl:template match='/'>
  <html xmlns='http://www.w3.org/1999/xhtml' lang='es'>
    <head>
      <meta charset='utf-8' />
      <title>Lista de estudiantes</title>
    </head>
    <body>
      <h1>Estudiantes</h1>
      <table style='border: 1px solid;'>
        <tr style='background-color: #9acd32;'>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Apodo</th>
          <th>Nacimiento</th>
          <th>Puntuaje</th>
        </tr>
        <xsl:for-each select='students/student'>
          <tr>
            <td><xsl:value-of select='first_name'/></td>
            <td><xsl:value-of select='last_name'/></td>
            <td><xsl:value-of select='nickname'/></td>
            <td><xsl:value-of select='date_of_birth'/></td>
            <td><xsl:value-of select='mark'/></td>
          </tr>
        </xsl:for-each>
      </table>
    </body>
  </html>
</xsl:template>

</xsl:stylesheet>