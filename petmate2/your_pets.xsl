<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:output method="html" />

<xsl:template match="/">
    <html>
        <head>
            <title>
                your_pets
            </title>
            <style>
                tr:nth-child(odd) {
                    background: white;
                }

                tr:nth-child(even) {
                    background: #D3D3D3;
                }
            </style>
        </head>
        <body>
            <h1>YOUR PETS</h1>
            <table border="2" style="text-align: center; border-collapse: collapse;">
                <tr>
                    <th style="padding: 10px">
                        PET ID
                    </th>
                    <th style="padding: 10px;">
                        PET NAME
                    </th>
                    <th style="padding: 10px">
                        PET TYPE
                    </th>
                    <th style="padding: 10px">
                        BREED
                    </th>
                    <th style="padding: 10px">
                        AGE(in years)
                    </th>
                    <th style="padding: 10px">
                        WEIGHT
                    </th>
                    <th style="padding: 10px">
                        GENDER
                    </th>
                    <th style="padding: 10px">
                        PET PIC
                    </th>
                    <th style="padding: 10px">
                        CREATED ON
                    </th>
                    <th style="padding: 10px">
                        UPDATED ON
                    </th>
                </tr>
                <xsl:for-each select="pets/pet">
                    <tr>
                        <td style="padding: 10px"> <xsl:value-of select="pet_id"/> </td>
                        <td style="padding: 10px"> <xsl:value-of select="pet_name"/> </td>
                        <td style="padding: 10px"> <xsl:value-of select="pet_type"/> </td>
                        <td style="padding: 10px"> <xsl:value-of select="breed"/> </td>
                        <td style="padding: 10px"> <xsl:value-of select="age"/> </td>
                        <td style="padding: 10px"> <xsl:value-of select="weight"/> </td>
                        <td style="padding: 10px"> <xsl:value-of select="gender"/> </td>
                        <td style="padding: 10px"> <a download="pet_{pet_id}.{extension}" href="{pet_pic}">download</a> </td>
                        <td style="padding: 10px"> <xsl:value-of select="posted_on"/> </td>
                        <td style="padding: 10px"> <xsl:value-of select="updated_on"/> </td>
                    </tr>
                </xsl:for-each>
            </table>
        </body>
    </html> 
</xsl:template>
</xsl:stylesheet>