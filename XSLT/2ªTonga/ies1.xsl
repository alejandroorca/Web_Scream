﻿<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
  
   <!-- Plantilla raíz -->
  <xsl:template match="/">
    <xsl:apply-templates select="ies/ciclos/ciclo/nombre" />
  </xsl:template>

  <!-- Plantilla nombre -->
  <xsl:template match="/ies/ciclos/ciclo/nombre">
    <xsl:value-of select="." />
  </xsl:template>
</xsl:stylesheet>
