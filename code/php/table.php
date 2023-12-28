<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les tableaux en html</title>
    <style>
        table{width:100%;}
        td{background-color: aquamarine;}
    </style>
</head>
<body>
    
    <table>
        <!-- de lignes et de colonnes
            1 ligne contient des colonnes
            les lignes sont divisées en colonnes = <tr></tr>
            tr => table row
            colonnes = cellules qui contiennent les données
            = <td></td>
            td = table data 
            th = table heading => titre           
        -->
        <tr>
            <th rowspan="3">titre 1</th>
            <th colspan="4">titre 2</th>
        </tr>
        <tr>
            <td>Un</td>
            <td>Deux</td>
            <td>trois</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum iste corporis, incidunt explicabo ducimus libero natus officiis aut obcaecati hic aliquid, doloremque aliquam quibusdam eligendi aperiam eaque eveniet? Culpa, quo.</td>
        </tr>

        <tr>
            <td><img src="images/gallery-6.jpg" width="100"></td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
        </tr>

    </table>




</body>
</html>