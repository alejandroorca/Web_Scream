<?xml version='1.0' encoding='utf-8'?>

<xsl:stylesheet version='1.0' xmlns:xsl='http://www.w3.org/1999/XSL/Transform'>
<xsl:template match='/'>
  <html xmlns='http://www.w3.org/1999/xhtml' lang='es'>
    <head>
      <meta charset='utf-8' />
      <title>Películas</title>
    </head>
    <body>
       <xsl:for-each select='Peliculas/Pelicula'>
		   <xsl:sort select="Points"/>
		   <xsl:if test="Points &gt;= 3">
			   <xsl:choose>
        <xsl:when test="Duracion &gt;= 120">
      <header style='color: red;'>
      <h1><xsl:value-of select='Titulo'/></h1>
<p><xsl:value-of select='Informacion'/></p>
       <img><xsl:attribute name="src"><xsl:value-of select="Foto" /></xsl:attribute></img>
      </header>
       </xsl:when>
        <xsl:otherwise>
            <header>
      <h1><xsl:value-of select='Titulo'/></h1>
<p><xsl:value-of select='Informacion'/></p>
       <img><xsl:attribute name="src"><xsl:value-of select="Foto" /></xsl:attribute></img>
      </header>
      </xsl:otherwise>
      </xsl:choose>
      </xsl:if>
        </xsl:for-each>
    </body>
  </html>
</xsl:template>

</xsl:stylesheet>

