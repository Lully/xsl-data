<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/">
<xsl:output omit-xml-declaration="yes" encoding="UTF-8"/>
  <xsl:template match="/">
    <xsl:for-each select="//item">
      <xsl:for-each select="dc:subject[position() != last()]">
        <xsl:variable name="value" select="."/>
          <xsl:for-each select="following-sibling::dc:subject">
<xsl:value-of select="$value"/>;<xsl:value-of select="."/><xsl:text>
</xsl:text>
          </xsl:for-each>
      </xsl:for-each>
    </xsl:for-each>
  </xsl:template>
</xsl:stylesheet>
